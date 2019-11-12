<?php
session_start();
require_once("config.php");
$id=$_GET['username'];
$sql="delete from admin where username='$id'";
echo "id".$id;
// echo $id;
if(mysqli_query($conn,$sql)){
?><script>
document.location.href="tables.php";
</script>
<?php
}else{
echo "gagal hapus data" .$sql."".mysqli_error($conn);
}
?>