<?php
		$sql_lietke_quanlydanhmucsp = "SELECT * FROM tbl_danhmuc ";
		$query_lietke_quanlydanhmucsp = mysqli_query($mysqli,$sql_lietke_quanlydanhmucsp);
?>

<table style="width: 100%"border="1"style="border-collapse: collapse">

	
	<div style="margin-top:30px;">
		<th>ID</th> 
		<th> Tên danh mục </th>
		<th> Quản lý</th>
</div>


	<?php
		$i= 0;
		while ($row = mysqli_fetch_array($query_lietke_quanlydanhmucsp)){
		$i++;
	?>

	<tr>

	<td><?php echo $i ?></td>
	<td><?php echo $row['tendanhmuc']?></td>
	
	
	<td>
		<a href="modules/quanlydanhmucsp/xuly.php?id_danhmuc=<?php echo $row['id_danhmuc']?> ">Xóa</a> | <a href="?action=quanlydanhmucsp&query=sua&id_danhmuc=<?php echo $row['id_danhmuc'] ?>"> Sửa </a>
	</td>
</tr>


<?php
}
?>
</table>