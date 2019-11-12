<?php
session_start();
require_once("config.php");
$id=$_GET['id_kyn'];
$sql="delete from karyawan where id_kyn=$id";
if(mysqli_query($conn,$sql)){
?><script>
document.location.href="index.php";
</script>
<?php
}else{
echo "gagal hapus data" .$sql."".mysqli_error($conn);
}
?>