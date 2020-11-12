<?php
    require_once('config/connect.php');
    $name = $password = $pwd = '';

    $name = $_POST['user'];
    $pwd = $_POST['password'];
    $password = MD5($pwd);
    $sql = "SELECT * FROM user WHERE Name='$name' AND Password='$password'";

    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $id= $row["ID"];
            $name= $row['Name'];
            session_start();
            $_SESSION['id']=$id;
            $_SESSION['name']=$name;
        }    
        header("Location: home.php");
    }
    else{
        echo "Invalid ";
    }
?>