<p> Xem đơn hàng</p>

<?php
		$code = $_GET['code'];
		$sql_lietke_dh = "SELECT * FROM tbl_cart_details,tbl_sanpham WHERE tbl_sanpham.stt=tbl_cart_details.stt AND tbl_cart_details.code_cart='$_GET[code]'  ";
		$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
?>

<table style="width: 100%"border="1"style="border-collapse: collapse">

	
	<div style="margin-top:30px;">
		<th>ID</th> 
		<th> Mã đơn hàng </th>
		<th>Tên sản phẩm</th>
		<th>Số lượng</th>
		<th>Đơn giá</th>
		<th>Thành tiền</th>
		
</div>


	<?php
		$i= 0;
		$tongtien = 0;
		while ($row = mysqli_fetch_array($query_lietke_dh)){
		$i++;
		$thanhtien =  $row['giasp']* $row['soluongmua'];
		$tongtien += $thanhtien;
	?>

	<tr>

	<td><?php echo $i ?></td>
	<td><?php echo $row['code_cart']?></td>
	<td><?php echo $row['tensp'] ?></td>
	<td><?php echo $row['soluongmua'] ?></td>
	<td><?php echo number_format($row['giasp'],0,',','.').'VNĐ' ?></td>
	<td><?php echo number_format($thanhtien,0,',','.').'VNĐ' ?></td>
	
</tr>

<?php
}
?>
	<tr>
	<td colspan="6">
		<p> Tổng tiền: <?php echo number_format($tongtien,0,',','.').'VNĐ' ?> </p>
		
		
	</td>
	</tr>
</table>