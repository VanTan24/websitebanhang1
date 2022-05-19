<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/styleadmin.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
	<title></title>
	<style type="text/css">
		body{
			 background: url(../Image/background-powerpoint-chuyen-nghiep-1.jpeg);
			/* background-color: gold;*/
			  background-size: cover;
			  
			  margin: 0;
			  padding: 0;

		}
	</style>
</head>
<body>
	<h3 class="title_admin">welcome to admin</h3>
	
	<?php
			include("config/config.php"); 
			include("modules/header.php");
			include("modules/menu.php");
			include("modules/main.php");
			include("modules/footer.php");
	?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>


 		<script type="text/javascript">
 			$(document).ready(function() {
 				thongke();
 				var char = new Morris.Line({
 			
 	
 		element: 'myfirstchart',
		  
		  xkey: 'date',
		 
		  ykeys: ['order','sales','quantity'],
		  
		  labels: ['Đơn hàng','Doanh thu','Số lượng bán ra']
	});
 		$('.select-date').change(function(){
 			var thoigian = $(this).val();
 			if (thoigian=='7ngay'){
 				var text = '7 ngày qua';
 			}else if (thoigian=='28ngay'){
 				var text = '28 ngày qua';
 			}else if (thoigian=='90ngay'){
 				var text = '90 ngày qua';
 			}else{ 
 				var text = '365 ngày qua';
 		}
 	
 		$.ajax({
 			url:"modules/thongke.php",
 			method:"POST",
 			dataType:"JSON",
 			data:{thoigian:thoigian},
 			success:function(data)
 			{
 				char.setData(data);
 				$('#text-date').text(text);
 			}
 		});
 	})


 		function thongke(){
 			var text = '365 ngày qua';
 			$('#text-date').text(text);
 			$.ajax({
 				url:"modules/thongke.php",
 				method:"POST",
 				dataType:"JSON",
 				
 				success:function(data)
 					{
 						char.setData(data);
 						$('#text-date').text(text);
 					}
 				});
 			}
 	});
 	
 		</script>



</body>
</html>