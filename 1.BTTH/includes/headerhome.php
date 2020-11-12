<?php
$host ='localhost';
$user='root';
$pass='';
$db_name='project';
$port='3306';

$conn=new mysqli($host,$user,$pass,$db_name,$port);
if(!$conn)
{
    die('CSDL khong ket noi : ');
}
 //session_start();
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"></script>

<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="img/logo.jpg"></a> 
        <button class="navbar-toggler"type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link btn-outline-primary" href="home.php">Trang chủ</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link btn-outline-primary" href="viewDiendan.php">Diễn đàn</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link btn-outline-primary" href="#">Giới thiệu</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link btn-outline-primary" href="dangnhap.php">Đăng Xuất</a>
                </li>
            </ul>
        </div>
    </div>
</nav>