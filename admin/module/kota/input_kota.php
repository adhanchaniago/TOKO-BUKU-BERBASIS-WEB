<div class="jdl"><? echo"Tambah Kota";?></div>
<?php
include"koneksi.php";
$error=array();
if($_POST['simpan']){
	
if((empty($_POST[idkota]))or(empty($_POST[nmkota]))or(empty($_POST[ongkir]))){
	$error[0]="<script>alert('Data Belum Lengkap');
	window.location='?page=tampilkota';</script>";
	echo"$error[0]<br>";
}
if((empty($error)))
{
	$simpan=mysql_query("INSERT INTO kota(id_kota,nm_kota,ongkir)VALUES('$_POST[idkota]','$_POST[nmkota]','$_POST[ongkir]')");
}
if($simpan)
{
	echo"<script>alert('Data Tersimpan');
	window.location='?page=tampilkota';</script>";
}
else
{echo "Gagal simpan";
}
}
?>
<form id="form1" name="form1" method="post" action="">
  <table width="304" border="1">
    <tr>
      <td width="100">Id Kota</td>
      <td width="188">
      <input type="text" name="idkota" /></td>
    </tr>
    <tr>
      <td>Nama Kota</td>
      <td>
      <input type="text" name="nmkota" /></td>
    </tr>
    <tr>
      <td>Ongkir</td>
      <td>
      <input type="text" name="ongkir" /></td>
    </tr>
    <tr>
      <td colspan="2"><center> <input type="submit" name="simpan"value="Simpan" />
      <input type="reset" name="batal" value="Batal" /></center></td>
    </tr>
  </table>
</form>
