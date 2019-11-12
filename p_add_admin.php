<?php
    session_start();
    require_once("config.php");
    $level=$_POST['level'];
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="insert into admin (level,nama,username,password) values ('$level','$nama','$username','$password')";
    if(mysqli_query($conn, $sql)){
            header("Location: tables.php");
    }else{
    echo "Erorr :" .$sql."".mysqli_error($conn);
    }
?>