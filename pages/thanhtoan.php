<?php
	session_start();
	include("../connect.php");
	require('../carbon/autoload.php');
	use Carbon\Carbon;
	use Carbon\CarbonInterval;
	$now = Carbon::now('Asia/Ho_Chi_Minh');
	$id_khachhang = $_SESSION['id_khachhang'];
	$code_order = rand(0,9999);
	$insert_cart = "INSERT INTO tbl_cart(id_khachhang,code_cart,cart_status,cart_date) VALUE('".$id_khachhang."','".$code_order."',1,'".$now."')";
	$cart_query = mysqli_query($mysqli,$insert_cart);
	if($cart_query){
		//Thêm giỏ hàng chi tiết
		foreach ($_SESSION['cart'] as $key => $value) {
			$stt = $value['id'];
			$soluong = $value['soluong'];
			$insert_oder_details = "INSERT INTO tbl_cart_details(stt,code_cart,soluongmua) VALUE('".$stt."','".$code_order."','".$soluong."')";
			mysqli_query($mysqli,$insert_oder_details);

		}
	}
	unset($_SESSION['cart']);
	header('Location:camon.php');
	

?>