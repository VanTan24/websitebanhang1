<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php
	session_start();
	
?>

	<p style="font-size: 40px;margin-left: 550px;"> Thông tin giỏ hàng của bạn </p>
	<?php
		if(isset($_SESSION['dangky'])){
			echo 'Xin Chào:'.'<span style="color:red">'.$_SESSION['dangky'].'</span>';
			// echo $_SESSION['id_khachhang'];
		}
	?>
</a>
<?php
	if(isset($_SESSION['cart'])){

	}
?>
<table style="width: 100%;height: 50%;text-align: center;border-collapse: collapse;margin-top: 50px;"border= "1">
	<tr>
	    <th style="background-color:seagreen;color: white;">ID</th>
	    <!-- <th>Mã sản phẩm</th> -->
	    <th style="background-color: seagreen;color: white;">Tên sản phẩm</th>
	    <th style="background-color: seagreen;color: white;">Hình ảnh</th>
	    <th style="background-color: seagreen;color: white;">Số lượng</th>
	    <th style="background-color: seagreen;color: white;">Giá sản phẩm</th>
	    <th style="background-color: seagreen;color: white;">Thành tiền</th>
	    <th style="background-color: seagreen;color: white;">Quản lý</th>
  </tr>
  <?php
  if(isset($_SESSION['cart'])){
  	$i = 0;
  	$tongtien = 0;
  	foreach($_SESSION['cart'] as $cart_item){
  		$thanhtien = $cart_item['soluong'] * $cart_item['giasp'];
  		$tongtien = $tongtien + $thanhtien;
  		$i++;
  ?>
  <tr>
	    <td><?php echo $i; ?></td>
	   <!--  <td><?php echo $cart_item['masp']; ?></td> -->
	    <td><?php echo $cart_item['tensp']; ?></td>
		<td>
			<img src="/LUONG VAN TAN-CNTT19/admin/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']?>"width="150px">
	    <td>
	    	<a href="themgiohang.php?cong=<?php echo $cart_item['id']?>"><i class="fas fa-plus"></i></a>
	    	<?php echo $cart_item['soluong']; ?>
	    	<a href="themgiohang.php?tru=<?php echo $cart_item['id']?>"><i class="fas fa-minus"></i></a>
	    		
	    	</td>
	    <td><?php echo number_format($cart_item['giasp'],0,',','.').'VNĐ'; ?></td>
	    <td style="color:seagreen;"><?php echo number_format($thanhtien,0,',','.').'VNĐ'; ?></td>
	    <td><a style="text-decoration: none;color: black;" href="themgiohang.php?xoa=<?php echo $cart_item['id']?>">Xóa</a></td>
  </tr>
  <?php
	}
	?>
		<!-- <tr> -->
			<table>
	    <!-- <td colspan="7"> -->
	    	<p style="margin-left: 650px;margin-top: 20px;font-size: 20px;"> Tổng tiền : <?php echo number_format($tongtien,0,',','.').'VNĐ' ?> </p><br>

	    	<a style="float: right;margin-right: 20px;margin-top: -70px;" href="themgiohang.php?xoatatca=1" class="btn btn-info"> Xóa tất cả</a>
	    	<!-- <div style="clear: both;"></div> -->
	    	<?php
	    		if(isset($_SESSION['dangky'])){
	    			?>
	    			<p style="margin-top: -20px;"><a style="text-decoration: none;font-size:20px;color: black;margin-left: 720px ;" href="thanhtoan.php"class="btn btn-danger"> Đặt hàng </p></a>
	    	<?php
	    		}else{
	    	?>
	    		<p><a href="dangky.php">  Đăng ký đặt hàng </p></a>

	    	<?php		
	    		}
	    	?>
	    	
	    	
	    	
	    </td>

	    </table>
  <!-- </tr> -->
  <?php
  }else{
  ?>
  <tr>
	    <td colspan="8"><p> Hiện tại giỏ hàng trống </p></td>
	    
  </tr>

  <?php
  }
  ?>
 
</table>
<a style="margin-top: -110px;" href="../index1.php" class="btn btn-warning">< Tiếp tục mua hàng</a>
