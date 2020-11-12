<?php
    require_once('config/connect.php');
    $name = $_POST['user'];
    $pwd = $_POST['password'];
    $password = MD5($pwd);

    $sql = "INSERT INTO user (Name, Password)  VALUES ('$name','$password') ";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("Location:dangnhap.php");
    }
    else{
        echo "Error :".$sql;
    }
?>