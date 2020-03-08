<?php

include"../koneksi.php";
if($_POST[simpan])
{
	
$simpan=mysql_query("update orders set status='$_POST[status]'
where id_orders='$_GET[id]'")
or die("Gagal Query ubah:".mysql_error());

if($simpan)
{
echo "<script>alert('data telah tersimpan');
window.location='?page=orders';</script>";
}
else
{
echo "<script>alert('data gagal tersimpan');
window.location='?page=orders';</script>";
	
}
}
?>

<form action="" method="post">

<input name="status" type="radio" value="proses" /> PROSES

<input name="status" type="radio" value="oke" /> OKE
&nbsp;&nbsp;
<input name="simpan" type="submit" value="UBAH">

</form>