<?php
	$sql_sua_quanlysp = "SELECT * FROM tbl_sanpham WHERE stt='$_GET[stt]' LIMIT 1";
	$query_sua_quanlysp = mysqli_query($mysqli,$sql_sua_quanlysp);
?>

<p> Sửa sản phẩm </p>
<table border="1" width="100%" style="border-collapse: collapse;">
	<?php
		while($row = mysqli_fetch_array($query_sua_quanlysp)){
	?>
	
<form method="POST" action="modules/quanlysp/xuly.php?stt=<?php echo $row['stt'] ?>" enctype="multipart/form-data">
	<tr>
		<td> Tên sản phẩm</td>
		<td><input type="text" value="<?php echo $row['tensp'] ?>" name="tensp"></td>
		
	</tr>

	<tr>
		<td> Mã sản phẩm</td>
		<td><input type="text" value="<?php echo $row['masp'] ?>" name="masp"></td>
		
	</tr>

	<tr>
		<td>Giá sản phẩm</td>
		<td><input type="text" value="<?php echo $row['giasp'] ?>" name="giasp"></td>
		
	</tr>

	<tr>
		<td> Số lượng</td>
		<td><input type="text" value="<?php echo $row['soluong'] ?>" name="soluong"></td>
		
	</tr>

	<tr>
		<td>Hình ảnh</td>
		<td>
			<input type="file"  name="hinhanh">
			<img src="modules/quanlysp/uploads/<?php echo $row['hinhanh']?>" width="150px">
		</td>
		
	</tr>

	<tr>
		<td> Nội dung </td>
		<td><textarea rows="10"   name="noidung" style="resize: none;"><?php echo $row['noidung'] ?></textarea></td>
		
	</tr>

	<tr>
		<td> Danh mục sản phẩm </td>
		<td>
			<select name="tendanhmuc">
				<?php
					$sql_danhmuc = "SELECT * FROM tbl_danhmuc ";
					$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
					while($row_danhmuc  = mysqli_fetch_array($query_danhmuc)){
						if($row_danhmuc['id_danhmuc']==$row['id_danhmuc']){
				?>
					<option selected  value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
				<?php
					}else{
				
				?>
				<option selected  value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
				<?php
					}
				}
				?>
			</select>
		</td>
	</tr>


	<tr>
		<td> Tình trạng </td>
		<td>
			<select name="tinhtrang">
				<?php
					if($row['tinhtrang']==1){
				?>
				<option value="1" selected> Kích hoạt </option>
				<option value="0"> Ẩn </option>
				<?php
				}else{
				?>
				<option value="1"> Kích hoạt </option>
				<option value="0" selected> Ẩn </option>
				<?php
				}
				?>
			</select>
		</td>
	</tr>

	

	<tr>
		
		<td colspan="2"><input type="submit" name="suasanpham" value="Sửa sản phẩm"></td>
		
	</tr>

	
	</form>

	<?php
	}
	?>
</table>