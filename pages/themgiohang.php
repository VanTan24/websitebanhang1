<?php
	session_start();
	include('../admin/config/config.php');

	//Thêm số lượng sản phẩm trong giỏ hàng
	if(isset($_GET['cong'])){
		$id=$_GET['cong'];
		foreach($_SESSION['cart'] as $cart_item){

			if($cart_item['id']!=$id){
				$product[] = array('tensp' => $cart_item['tensp'],'id'=> $cart_item['id'],'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
				$_SESSION['cart'] = $product; 
			}else{
				$tangsoluong = $cart_item['soluong'] + 1;
				if($cart_item['soluong']<=9){
					
					$product[] = array('tensp' => $cart_item['tensp'],'id'=> $cart_item['id'],'soluong'=>$tangsoluong,'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
				}else{
					$product[] = array('tensp' => $cart_item['tensp'],'id'=> $cart_item['id'],'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
				}
				$_SESSION['cart'] = $product; 
			}

		}
		header('Location:giohang.php');
	}
	//Giảm số lượng sản phẩm trong giỏ hàng
	if(isset($_GET['tru'])){
		$id=$_GET['tru'];
		foreach($_SESSION['cart'] as $cart_item){

			if($cart_item['id']!=$id){
				$product[] = array('tensp' => $cart_item['tensp'],'id'=> $cart_item['id'],'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
				$_SESSION['cart'] = $product; 
			}else{
				$tangsoluong = $cart_item['soluong'] - 1;
				if($cart_item['soluong']>1){
					
					$product[] = array('tensp' => $cart_item['tensp'],'id'=> $cart_item['id'],'soluong'=>$tangsoluong,'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
				}else{
					$product[] = array('tensp' => $cart_item['tensp'],'id'=> $cart_item['id'],'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
				}
				$_SESSION['cart'] = $product; 
			}

		}
		header('Location:giohang.php');
	}

	//xóa 1 sản phẩm trong giỏ hàng
	if(isset($_SESSION['cart']) && isset($_GET['xoa'])){
		$id=$_GET['xoa'];
		foreach($_SESSION['cart'] as $cart_item){

			if($cart_item['id']!=$id){
				$product[] = array('tensp' => $cart_item['tensp'],'id'=> $cart_item['id'],'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
			}

		$_SESSION['cart'] = $product;
		header('Location:giohang.php');
		}
	}


	//Xóa tất cả trong giỏ hàng
	if (isset($_GET['xoatatca']) && $_GET['xoatatca']==1){
		unset($_SESSION['cart']);
		header('Location:giohang.php');
	}

	//Thêm sản phẩm vào giỏ hàng
	if (isset($_POST['themgiohang']	)){
		// session_destroy();
		$id = $_GET['stt'];
		$soluong = 1;
		$sql = "SELECT * FROM tbl_sanpham WHERE stt = '".$id."' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		$row = mysqli_fetch_array($query);
		if($row){
			$new_product = array(array('tensp' => $row['tensp'],'id'=> $id,'soluong'=>$soluong,'giasp'=>$row['giasp'],'hinhanh'=>$row['hinhanh'],'masp'=>$row['masp']));
		//Kiểm tra session giỏ hàng có tồn tại
		if(isset($_SESSION['cart'])){
			$found = false;
			foreach($_SESSION['cart'] as $cart_item){
				//Nếu dữ liệu trùng
				if($cart_item['id'] ==$id){
 					$product[] = array('tensp' => $cart_item['tensp'],'id'=> $cart_item['id'],'soluong'=>$soluong+1,'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
 					$found = true;
				}else{
					//Nếu dữ liệu không trùng
					$product[] = array('tensp' => $cart_item['tensp'],'id'=> $cart_item['id'],'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
				}
			}
			if($found == false){
				//Liên kết dữ liệu new_product với product
				$_SESSION['cart']=array_merge($product,$new_product);
			}else{
				$_SESSION['cart']=$product;
			}
		}else{
			$_SESSION['cart'] = $new_product;
		}


		}
		header('Location:../pages/giohang.php');
		
	}
		
?>