<?php
include"koneksi.php";
if($_POST['update'])
{
	$simpan=mysql_query("update kategori set
	id_kat='$_POST[tidkat]',
	nama_kat='$_POST[tnmkat]'
	where id_kat='$_GET[id]'")
	or die ("Gagal Query ubah:".mysql_error());
	if($simpan){
		echo"<script>alert('data telah tersimpan');
		window.location='?page=tampilkat';</script>";
	}
	else
	{
		echo"gagal";
}
}
$tampil=mysql_query("select*from kategori where id_kat='$_GET[id]'");
$t=mysql_fetch_array($tampil);
?>

<form name="form1" method="post" action="" enctype="multipart/form-data">
  <h2>UBAH</h2>
  <table width="271" border="1">
    <tr>
      <td width="92">Id Kategori</td>
      <td width="163">
      <input type="text" name="tidkat" value="<?php echo $t['id_kat']?>"></td>
    </tr>
    <tr>
      <td>Nama Kategori</td>
      <td>
      <input type="text" name="tnmkat" value="<?php echo $t['nama_kat']?>"></td>
    </tr>
    <tr>
      <td colspan="2"><center><input type="submit" name="update" value="simpan">
      <input type="submit" name="batal" value="batal"></center></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
