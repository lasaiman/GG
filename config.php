<?php

$db_host="127.0.0.1";
$db_user="root";
$db_pass="";
$db_name = "kepegawaian";

$conn= new mysqli($db_host,$db_user,$db_pass,$db_name);


if ($conn->connect_errno > 0) {
    die('Koneksi Gagal!');
}
?>