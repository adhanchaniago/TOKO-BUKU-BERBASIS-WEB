<?php
include "../koneksi.php";
$tid=$_GET['id'];
$hapus=mysql_query("delete from member where id_member='$tid'") or die
("Query Gagal".mysql_error());
if($hapus)
{
	echo "<script>alert('Data Terhapus');
	window.location='?page=member';</script>";
}
 else
 {echo"Gagal Hapus";
 }
 ?>




