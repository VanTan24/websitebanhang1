<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" type="text/css" href="style.css">
<body>
	
		<div class="bang">
			<!-- <div class="bang1">
				<img src="Image/background.png">
			</div> -->
			<?php
				$sql_danhmuc= "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
				$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
			?>
			<div class="bang2">
					<ul class="list_menu">
						
						<?php
						while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
						?>
			<li><a href="index1.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc']?>" 
				style="text-decoration: none;color: black;">
			<?php echo $row_danhmuc['tendanhmuc']?> </a></li>
						<?php
						}
						?>
						
					</ul>
			</div>

			

			<div class="maincontent">
				<?php
$sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc='$_GET[id]' ORDER BY stt DESC";
					$query_pro = mysqli_query($mysqli,$sql_pro);
				
			//get tên danh mục
$sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc='$_GET[id]' LIMIT 1";
					$query_cate = mysqli_query($mysqli,$sql_cate);
					$row_title = mysqli_fetch_array($query_cate);

				?>
				<h4></h4>
				<div class="all_product">
				<ul class="product_list">
					
					
					<?php
					while($row_pro = mysqli_fetch_array($query_pro)){	
					?>
					<li>
						<a href="index1.php?quanly=sanpham&id=<?php echo $row_pro['stt']?>">
						<img src="admin/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh']?>"></a>
						<P class="title_product"> <?php echo $row_pro['tensp']?></P>
						<p class="price_product">Giá : <?php echo number_format($row_pro['giasp'],0,',','.').'VNĐ'?></p>
						
						
						
					</li>
					<?php
					}
					?>
				</ul>
			</div>
		</div>


			</div>


	
			



	</body>
