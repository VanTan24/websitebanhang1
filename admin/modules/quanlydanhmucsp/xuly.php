<?php
include('../../config/config.php');

$tendanhmuc = $_POST['tendanhmuc'];
$thutu = $_POST['thutu'];

if(isset($_POST['themdanhmuc'])){
	// Thêm
	$sql_them = "INSERT INTO tbl_danhmuc(tendanhmuc,thutu) values('".$tendanhmuc."','".$thutu."')";
	mysqli_query($mysqli,$sql_them);
	header('Location:../../index.php?action=quanlydanhmucsp&query=them');
}elseif(isset($_POST['suadanhmuc'])){
	//sua
	$sql_update = "UPDATE tbl_danhmuc SET tendanhmuc='".$tendanhmuc."',thutu='".$thutu."' WHERE id_danhmuc='$_GET[id_danhmuc]'";
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=quanlydanhmucsp&query=them');

}else{
	//Xóa
	$id=$_GET['id_danhmuc'];
	$sql_xoa = "DELETE FROM tbl_danhmuc WHERE id_danhmuc='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlydanhmucsp&query=them');
}
?>