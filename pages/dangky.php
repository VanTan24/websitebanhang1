
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,400i|Noto+Sans:400,400i,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
<?php
	session_start();
	include('../admin/config/config.php');
	if(isset($_POST['dangky'])){
		$tenkhachhang = $_POST['hovaten'];
		$email = $_POST['email'];
		$dienthoai = $_POST['dienthoai'];
		$matkhau = $_POST['matkhau'];
		$diachi = $_POST['diachi'];
		$sql_dangky = mysqli_query($mysqli, "INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
		if($sql_dangky){
			echo '<p style="color:green"> Bạn đã đăng ký thành công </p>';
			$_SESSION['dangky'] = $tenkhachhang;
				
			$_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
			
			header('Location:giohang.php');
		}

	}
?>

<style type="text/css">
	*{
    margin:0;
    padding:0;
    border:none;
    font-family: 'Open Sans', sans-serif;
}
body {
    overflow: hidden;
     background: linear-gradient(to left, #fc00ff, #00dbde);


}
.to {
    display: grid;
    grid-template-columns: repeat(12,1fr);
    grid-template-rows: minmax(100px,auto);
}
 
.form {
    border: 1px solid #80808000;
    grid-column: 6/9;
    grid-row: 5;
    height: 590px;
    width: 292px;
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    border-radius: 15px;
    box-shadow: 0px 0px 14px 2px grey;
    background-color: white;
    margin-top: -50px;
}
h2 {
    margin-top: 50px;
    margin-bottom: 70px;
}
i.fab.fa-app-store-ios {
    display: block;
    margin-bottom: 40px;
    font-size: 20px;
}
 
label {
    margin-left: -136px;
    display: block;
    font-weight: lighter;
 
}
input{
    display: block;
    border-bottom: 2px solid #00BCD4;
    margin-top: 6px;
    margin-bottom: 10px;
    outline-style: none;
}
input[type="text"] {
    padding: 2px;
    width: 70%;
}
 
input#submit {
    padding: 7px;
    width: 50%;
    border-radius: 10px;
    border: none;
    position: absolute;
    bottom: 10px;
    cursor: pointer;
    background: linear-gradient(to right, #fc00ff, #00dbde);
}
input#submit:hover{
 
    background: linear-gradient(to right, #fc466b, #3f5efb); 
}
 
</style>
<form action="" method="POST">

	 <div class="to">
            <div class="form">
                <h2>Đăng ký thành viên</h2>
                
         <label style="margin-left: -130px;">Họ và tên</label>
	
		<input type="text" name="hovaten">
	
	
	
		<label style="margin-left:-160px;">Email</label>
		<input type="text"  name="email">
	

	
		<label style="margin-left:-125px;">Điện thoại</label>
		<td><input type="text"  name="dienthoai">
	

	
		<label style="margin-left:-150px;">Địa chỉ</label>
		<td><input type="text"  name="diachi">
	

	
		<label style="margin-left:-130px;">Mật khẩu</label>
		<input type="text"  name="matkhau">


	

	
		<input id="submit" type="submit"  name="dangky" value="Đăng ký">
	
</div>
</div>
</form>