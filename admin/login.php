<?php
    session_start();
    include('config/config.php');
    if(isset($_POST['dangnhap'])){
        $taikhoan = $_POST['username'];
        $matkhau = md5($_POST['password']);
        $sql = "SELECT * FROM tbl_admin WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count>0){
            $_SESSION['dangnhap'] = $taikhoan;
            header("Location:index.php");
        }else{
            echo '<script>alert("Tài khoản hoặc mật khẩu của bạn không đúng.")</script>';
            header("Location:login.php");
        }
    }
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng nhập Admin</title>
    <style type="text/css">
        body{
            margin: 0;
            padding: 0;
            background: url(../Image/background-3d-4k_085529380.jpg);
            background-size: cover;
            font-family: sans-serif;

        }
        .login-box{
            width: 320px;
            height: 420px;
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            top: 50%;
            position: absolute;
            transform: translate(180%,-50%);
            box-sizing: border-box;
            padding: 70px 30px;

        }
        .avatar{
            width: 100px;
            height: 100px;
            border-radius: 50%;
            position: absolute;
            top: -50px;
            left: calc(50% - 50px);
        }
        h1{
            margin: 0;
            padding: 0 0 20px;
            text-align: center;
            font-size: 22px;
        }
        .login-box p{
            margin: 0;
            padding: 0;
            font-weight: bold;
        }
        .login-box input{
            width: 100%;
            margin-bottom: 20px;
        }
        .login-box input[type="text"], input[type="password"]{
            border: none;
            border-bottom: 1px solid darkred;
            background: transparent;
            outline: none;
            height: 40px;
            color: #fff;
            font-size: 16px;
        }
        .login-box input[type="submit"]{
            border: none;
            outline: none;
            height: 40px;
            background: #39dc79;
            color: #fff;
            font-size: 18px;
            border-radius: 20px;
        }
         .login-box input[type="submit"]:hover{
            cursor: pointer;
            background: #39dc79;
            color: #000;
         }
         .login-box a{
            text-decoration: none;
            font-size: 14px;
            color: #fff;
         }
         .login-box a:hover{
            color: #39dc79;
         }
    </style>
</head>
<body>
        <div class="login-box">
            <form action="" autocomplete="off" method="POST">
                <img src="../Image/logo.png" class="avatar">
                    <h1> Đăng nhập Admin </h1>
                        <form>
                            <p> Tài khoản </p>
                            <input type="text"  name="username" placeholder="Enter Username">
                            <p> Mật khẩu </p>
                            <input type="password"  name="password" placeholder="Enter Password">
                            <input type="submit" name="dangnhap" value="Đăng nhập">
                            <a href="#">Quên mật khẩu</a>
                        </form>
            </form>
        </div>


   
</body>
</html>
