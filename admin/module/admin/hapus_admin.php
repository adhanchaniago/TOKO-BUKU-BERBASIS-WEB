<?php
include "koneksi.php";
$tid=$_GET['id'];
$hapus=mysql_query("delete from admin where userid='$tid'") or die ("Query Gagal".mysql_error());
if($hapus)
{
echo "<script>alert('Data Terhapus');window.location='?page=tampiladmin';</script>";
}
	else
{
echo"Gagal Hapus";
	}
?>
	
	 