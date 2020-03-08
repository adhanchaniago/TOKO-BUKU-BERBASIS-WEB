<div class="jdl"><? echo"Tambah Admin";?></div>
<?php
include"koneksi.php";
$error=array();
if($_POST['simpan']){
	
if((empty($_POST[user]))or(empty($_POST[pass]))or(empty($_POST[uname]))){
	$error[0]="<script>alert('Data Belum Lengkap');
	window.location='?page=tampiladmin';</script>";
	echo"$error[0]<br>";
}
if((empty($error)))
{
	$simpan=mysql_query("INSERT INTO admin(userid,password,username)VALUES('$_POST[user]','$_POST[pass]','$_POST[uname]')");
}
if($simpan)
{
	echo"<script>alert('Data Tersimpan');
	window.location='?page=tampiladmin';</script>";
}
else
{echo "Gagal simpan";
}
}
?>
<form id="form1" name="form1" method="post" action="">
  <table width="304" border="1">
    <tr>
      <td width="100">User Id</td>
      <td width="188">
      <input type="text" name="user" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td>
      <input type="text" name="pass" /></td>
    </tr>
    <tr>
      <td>User Name</td>
      <td>
      <input type="text" name="uname" /></td>
    </tr>
    <tr>
      <td colspan="2"><center> <input type="submit" name="simpan"value="Simpan" />
      <input type="reset" name="batal" value="Batal" /></center></td>
    </tr>
  </table>
</form>
