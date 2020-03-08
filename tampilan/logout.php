<?php
ob_start();
session_start();

$username=$_SESSION['member'];
session_destroy();
$_SESSION = array();
 echo "<script>alert('Anda Telah Keluar');window.location='../media.php?page=isihome'</script>";
exit();


?>