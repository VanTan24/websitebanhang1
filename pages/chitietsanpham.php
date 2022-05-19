<link rel="stylesheet" type="text/css" href="chitietsanpham.css">

<body>

	<h1 style="margin-left:650px;color: #6495ED;"> Chi tiết sản phẩm </h1>
<div class="t">
<?php
	$sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.stt='$_GET[id]' LIMIT 1";
	$query_chitiet = mysqli_query($mysqli,$sql_chitiet);
	while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>

<div class="hinhanh_sanpham">
	<img  src="admin/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh']?>">

<form method="POST" action="pages/themgiohang.php?stt=<?php echo $row_chitiet['stt']?>">
<div class="chitiet_sanpham">
	<h3>Tên sản phẩm :<?php echo $row_chitiet['tensp']?></h3>
<h3>Giá sản phẩm :<?php echo number_format($row_chitiet['giasp'],0,',','.').'VNĐ'?></h3>
	<h3>Số lượng sản phẩm :<?php echo $row_chitiet['soluong']?></h3>
	
	

</div>
<div class="themgiohang">
	<p><input  type="submit" value="Thêm giỏ hàng" name="themgiohang"  ></p>

</div>
</div>
</form>	

<?php
	}
?>
</div>
</body>