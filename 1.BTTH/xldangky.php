<?php
    session_start();
    require_once('config/connect.php');
    if( isset($_POST['submit']) && $_POST['username'] != '' &&  $_POST['password'] != '' && $_POST['repassword'] != '');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    

    if( $password != $repassword){
        $_SESSION["thongbao"] = "Password nhập lại không đúng";
        header("location:dangnhap.php");
        die();
    }
    $sql = "SELECT * FROM user WHERE username='$username'";
    $old = mysqli_query($conn,$sql);
    $password = MD5($password);
    if(mysqli_num_rows($old) > 0){
        $_SESSION["thongbao"] ="Username đã tồn tại";
        header("location:dangnhap.php");
    }else{
        
        header("location:dangnhap.php");
    }
    $sql = "INSERT INTO user ( username , password) VALUES ('$username','$password')";
    mysqli_query($conn,$sql);
    $_SESSION["thongbao"] ="Vui long nhap day du thong tin";
    header("location:dangnhap.php");
    
?>