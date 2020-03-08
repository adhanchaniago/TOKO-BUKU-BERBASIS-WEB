<?php
include "../koneksi.php";
$tid=$_GET['id'];
$hapus=mysql_query("delete from orders where id_orders='$tid'") or die
("Query Gagal".mysql_error());
if($hapus)
{
	echo "<script> alert('Data Terhapus');
	window.location='?page=orders';</script>";
}
 else
 {echo"Gagal Hapus";
 }
 ?>