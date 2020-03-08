<?php
include "../koneksi.php";
$tid=$_GET['id'];
$hapus=mysql_query("delete from bukutamu where ID_buku='$tid'") or die
("Query Gagal".mysql_error());
if($hapus)
{
	echo "<script> alert('Data Terhapus');
	window.location='?page=pesan';</script>";
}
 else
 {echo"Gagal Hapus";
 }
 ?>




