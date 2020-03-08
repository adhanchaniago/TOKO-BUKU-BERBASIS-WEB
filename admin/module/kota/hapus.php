<?php
include "koneksi.php";
$tidkota=$_GET['id'];
$hapus=mysql_query("delete from kota where id_kota='$tidkota'") or die ("Query Gagal".mysql_error());
if($hapus)
{
echo "<script>alert('Data Terhapus');window.location='?page=tampilkota';</script>";
}
	else
{
echo"Gagal Hapus";
	}
?>
	
	 