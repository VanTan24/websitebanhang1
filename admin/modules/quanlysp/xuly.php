<?php
include('../../config/config.php');

$tensp = $_POST['tensp'];
$masp = $_POST['masp'];
$giasp = $_POST['giasp'];
$soluong = $_POST['soluong'];
//xử lý hình ảnh
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;
$noidung = $_POST['noidung'];
$tinhtrang = $_POST['tinhtrang'];
$tendanhmuc = $_POST['tendanhmuc'];



if(isset($_POST['themsanpham'])){
	//them
	$sql_them = "INSERT INTO tbl_sanpham(tensp,masp,giasp,soluong,hinhanh,noidung,tinhtrang,id_danhmuc) VALUE ('".$tensp."','".$masp."','".$giasp."','".$soluong."','".$hinhanh."','".$noidung."','".$tinhtrang."','".$tendanhmuc."')";
	mysqli_query($mysqli,$sql_them);
	move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
	header('Location:../../index.php?action=quanlysp&query=them');
}elseif(isset($_POST['suasanpham'])){
	//sua
	if($hinhanh!=''){
		move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
		

		$sql_update = "UPDATE tbl_sanpham SET tensp='".$tensp."',masp='".$masp."',giasp='".$giasp."',soluong='".$soluong."',hinhanh='".$hinhanh."',noidung='".$noidung."',tinhtrang='".$tinhtrang."',id_danhmuc='".$tendanhmuc."' WHERE stt='$_GET[stt]'";
		//xóa hình ảnh cũ
	$sql = "SELECT * FROM tbl_sanpham WHERE stt = '$_GET[stt]' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		while($row = mysqli_fetch_array($query)){
			unlink('uploads/'.$row['hinhanh']);

		}

	}else{
		$sql_update = "UPDATE tbl_sanpham SET tensp='".$tensp."',masp='".$masp."',giasp='".$giasp."',soluong='".$soluong."',noidung='".$noidung."',tinhtrang='".$tinhtrang."',id_danhmuc='".$tendanhmuc."' WHERE stt='$_GET[stt]'";
	}
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=quanlysp&query=them');

	}else{
	//xoa
	$id=$_GET['stt'];
	$sql = "SELECT * FROM tbl_sanpham WHERE stt = '$id' LIMIT 1";
	$query = mysqli_query($mysqli,$sql);
	while($row = mysqli_fetch_array($query)){
		unlink('uploads/'.$row['hinhanh']);

	}
	$sql_xoa = "DELETE FROM tbl_sanpham WHERE stt='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlysp&query=them');

}
?>