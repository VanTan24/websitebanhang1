
<body>
<p style="text-align: center;margin-top: 50px;font-size: 20px;color: darkblue;"> Thêm  sản phẩm </p>
<table border="1" width="100%" style="border-collapse: collapse;">
	
<form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data">
	<tr>
	
		<td> Tên sản phẩm</td>
		<td><input type="text"  name="tensp"></td>
	
	</tr>

	<tr>
	
		<td> Mã sản phẩm</td>
		<td><input type="text"  name="masp"></td>
	
	</tr>

	<tr>
	
		<td>Giá sản phẩm</td>
		<td><input type="text"  name="giasp"></td>
	
	</tr>

	<tr>
	
		<td> Số lượng</td>
		<td><input type="text"  name="soluong"></td>
	</tr>

	<tr>
	
		<td>Hình ảnh</td>
		<td><input type="file"  name="hinhanh"></td>
	</tr>

	<tr>
	
		<td> Nội dung </td>
		<td><textarea rows="10"   name="noidung" style="resize: none;"></textarea></td>
	</tr>

	<tr>
	
		<td> Danh mục sản phẩm </td>
		<td>
			<select name="tendanhmuc">
				<?php
					$sql_danhmuc = "SELECT * FROM tbl_danhmuc ";
					$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
					while($row_danhmuc  = mysqli_fetch_array($query_danhmuc)){
				?>
					<option value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
				<?php
				}
				?>
			</select>
		</td>
	</tr>

	<tr>
	
		<td> Tình trạng </td>
		<td>
			<select name="tinhtrang">
				<option value="1"> Kích hoạt </option>
				<option value="0"> Ẩn </option>
			</select>
		</td>
	</tr>
	

	
		
		<td colspan="2"><input type="submit" name="themsanpham" value="Thêm sản phẩm"  style="background-color:#00b2d5;color: white;margin-left: 520px;margin-top: 20px;border-radius: 22px;border: none;font-size: 20px;padding: 5px 32px;"></td>
		
	
	
	</form>
</table>
