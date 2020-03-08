<?php
include"koneksi.php";
$txtid=$_GET['id'];
$hapus=mysql_query("DELETE FROM produk WHERE id_produk='$txtid'") or die ("Query Gagal".mysql_error());
if($hapus)
{
	echo"<script>alert('Data Terhapus');
	window.location='?page=tampilproduk';</script>";
}
else
{
	echo"Gagal dihapus";
}
?>