
<?php
session_start();
require_once("config.php");
if(!isset($_SESSION["user"])){
    $nilai=0;
    header("Location: login.php");
    exit;
}
$tampil=$_GET['tgl'];
$jumlah= count($tampil);
echo "tampil: ".$tampil[3]."jumlah: ".$jumlah;
$bulan=$_GET['bln'];
$tahun=$_GET['thn'];
$id_kyn=$_GET['id_kyn'];
$jml=$jumlah;
for ($x=1; $x <=$jml ; $x++) { 
    // $tgl[$x]=$_GET['tgl'.$x];
    $ket=$tampil[$x];
    $sql="insert into absen (id_kyn,tgl,ket) values ('$id_kyn','".$tahun.'-'.$bulan.'-'.$x."','$ket')";
    mysqli_query($conn, $sql);
}header("Location: index.php");


