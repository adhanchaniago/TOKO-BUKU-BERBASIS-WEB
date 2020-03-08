<?php
error_reporting(0);
if($_POST['login'])
{
include "koneksi.php";
$user=$_POST['userid'];
$pass=$_POST['password'];

$login=mysql_query("select*from admin where userid='$user' AND password='$pass'");
$r=mysql_fetch_array($login);
$ketemu=mysql_num_rows($login);
if((empty($user))or(empty($pass)))
{
	echo"<script>alert('Mohon Isi Nama Pengguna dan Kata Sandi Anda');
	window.location='login.php'</script>";
}
else if($ketemu==1)
{
	$_SESSION["admin"]=$user;
	$_SESSION["passwd"]=$pass;
	echo"<script>alert('Anda Berhasil Masuk');
	window.location='admin.php?page=home'</script>>";}
	else
	{
		echo"<center><br><br><br><br><br><br><b>MASUK GAGAL!</b></br>
		Nama Pengguna atau Kata Sandi Anda tidak benar.<br>
		Atau Akun Anda sedang diblokir.<br><br>";
					echo"<div><a href='index.php'>
	<img src='../gambar/sdh.jpg' height=147 width=176><br><br></a>
	</div>";
	echo"<input type=button class='tombol' value='ULANGI LAGI'
	onclick=location.href='index.php'></a></center>";
	}
}
	?>
