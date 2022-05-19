<?php
		$sql_lietke_quanlysp = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY stt DESC ";
		$query_lietke_quanlysp = mysqli_query($mysqli,$sql_lietke_quanlysp);
?>

<table style="width: 100%" border="1" style="border-collapse: collapse;">

	
	<div style="margin-top:30px;">
		<th>STT</th> 
		<th> Tên sản phẩm </th>
		<th> Hình ảnh</th>
		<th> Giá sp</th>
		<th>Số lượng </th>
		<th>Danh mục</th>
		<th> Mã sp</th>
		<th> Nội dung</th>
		<th> Tình trạng</th>
		<th> Quản lý</th>
	</div>
	

	<?php
		$i= 0;
		while ($row = mysqli_fetch_array($query_lietke_quanlysp)){
		$i++;
	?>

	<tr>

	<td><?php echo $i ?></td>
	<td><?php echo $row['tensp']?></td>
<td><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh']?>" width="150px"></td>
	<td><?php echo $row['giasp']?></td>
	<td><?php echo $row['soluong']?></td>
	<td><?php echo $row['tendanhmuc']?></td>
	<td><?php echo $row['masp']?></td>
	<td><?php echo $row['noidung']?></td>
	<td><?php if($row['tinhtrang']==1){
		echo 'Kích hoạt';
	}else{
		echo "Ẩn";
	}
	?>
	</td>

	<td>
		<a href="modules/quanlysp/xuly.php?stt=<?php echo $row['stt']?> ">Xóa</a> | <a href="?action=quanlysp&query=sua&stt=<?php echo $row['stt'] ?>"> Sửa </a>
	</td>
</tr>


<?php
}
?>
</table>