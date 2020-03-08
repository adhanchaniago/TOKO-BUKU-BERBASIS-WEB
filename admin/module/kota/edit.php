<?php
include"koneksi.php";
if($_POST['update'])
{
	$simpan=mysql_query("update kota set
	id_kota='$_POST[tidkota]',
	nm_kota='$_POST[tnmkota]',
	ongkir='$_POST[tongkir]'
	where id_kota='$_GET[id]'")
	or die ("Gagal Query ubah:".mysql_error());
	if($simpan){
		echo"<script>alert('data telah tersimpan');
		window.location='?page=tampilkota';</script>";
	}
	else
	{
		echo"gagal";
}
}
$tampil=mysql_query("select*from kota where id_kota='$_GET[id]'");
$t=mysql_fetch_array($tampil);
?>

<form name="form1" method="post" action="" enctype="multipart/form-data">
  <h2>UBAH</h2>
  <table width="271" border="1">
    <tr>
      <td width="92">Id Kota</td>
      <td width="163">
      <input type="text" name="tidkota" value="<?php echo $t['id_kota']?>"></td>
    </tr>
    <tr>
      <td>Nama Kota</td>
      <td>
      <input type="text" name="tnmkota" value="<?php echo $t['nm_kota']?>"></td>
    </tr>
    <tr>
      <td>Ongkir</td>
      <td>
      <input type="text" name="tongkir" value="<?php echo $t['ongkir']?>"></td>
    </tr>
    <tr>
      <td colspan="2"><center><input type="submit" name="update" value="simpan">
      <input type="submit" name="batal" value="batal"></center></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
