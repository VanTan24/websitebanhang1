<div class="chitietsanpham">
	<?php
	 if(isset($_GET['quanly'])){
	 	$tam = $_GET['quanly'];

	}else{
		$tam = '';
	}
	if($tam=='sanpham'){
	 	include("pages/chitietsanpham.php");
	}elseif($tam=='thanhtoan'){
	 	include("pages/thanhtoan.php");
	
	
		
	
	}
	?>
	
</div>
