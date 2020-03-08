<?php
include"koneksi.php";
if($_POST['update'])
{
	$simpan=mysql_query("update admin set
	userid='$_POST[tid]',
	password='$_POST[tpassword]',
	username='$_POST[tnama]'
	where userid='$_GET[id]'")
	or die ("Gagal Query ubah:".mysql_error());
	if($simpan){
		echo"<script>alert('berita telah tersimpan');
		window.location='?page=tampiladmin';</script>";
	}
	else
	{
		echo"gagal";
}
}
$tampil=mysql_query("select*from admin where userid='$_GET[id]'");
$t=mysql_fetch_array($tampil);
?>

<form name="form1" method="post" action="" enctype="multipart/form-data">
  <h2>UBAH</h2>
  <table width="271" border="1">
    <tr>
      <td width="92">User Id</td>
      <td width="163">
      <input type="text" name="tid" value="<?php echo $t['userid']?>"></td>
    </tr>
    <tr>
      <td>Password</td>
      <td>
      <input type="text" name="tpassword" value="<?php echo $t['password']?>"></td>
    </tr>
    <tr>
      <td>User Name</td>
      <td>
      <input type="text" name="tnama" value="<?php echo $t['username']?>"></td>
    </tr>
    <tr>
      <td colspan="2"><center><input type="submit" name="update" value="simpan">
      <input type="submit" name="batal" value="batal"></center></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
