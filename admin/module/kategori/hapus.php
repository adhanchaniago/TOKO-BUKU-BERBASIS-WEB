<?php
include "koneksi.php";
$tidkat=$_GET['id'];
$hapus=mysql_query("delete from kategori where id_kat='$tidkat'") or die ("Query Gagal".mysql_error());
if($hapus)
{
echo "<script>alert('Data Terhapus');window.location='?page=tampilkat';</script>";
}
	else
{
echo"Gagal Hapus";
	}
?>
	
	 