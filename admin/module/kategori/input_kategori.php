<div class="jdl"><? echo"Tambah Kota";?></div>
<?php
include"koneksi.php";
$error=array();
if($_POST['simpan']){
	
if((empty($_POST[idkat]))or(empty($_POST[nmkat]))){
	$error[0]="<script>alert('Data Belum Lengkap');
	window.location='?page=tampilkat';</script>";
	echo"$error[0]<br>";
}
if((empty($error)))
{
	$simpan=mysql_query("INSERT INTO kategori(id_kat,nama_kat)VALUES('$_POST[idkat]','$_POST[nmkat]')");
}
if($simpan)
{
	echo"<script>alert('Data Tersimpan');
	window.location='?page=tampilkat';</script>";
}
else
{echo "Gagal simpan";
}
}
?>
<form id="form1" name="form1" method="post" action="">
  <table width="304" border="1">
    <tr>
      <td width="100">Id Kategori</td>
      <td width="188">
      <input type="text" name="idkat" /></td>
    </tr>
    <tr>
      <td>Nama Kategori</td>
      <td>
      <input type="text" name="nmkat" /></td>
    </tr>
    <tr>
      <td colspan="2"><center> <input type="submit" name="simpan"value="Simpan" />
      <input type="reset" name="batal" value="Batal" /></center></td>
    </tr>
  </table>
</form>
