<?php
//error_reporting(0);
include "../koneksi.php";
$user=$_POST['id_member'];
$pass=$_POST['paswd'];

$login=mysql_query("SELECT*FROM member where email='$user' AND password='$pass'");
$r=mysql_fetch_array($login);
$ketemu=mysql_num_rows($login);
if ((empty($user)) or (empty($pass)))
{
echo "<script>alert('Mohon Isi Email Dan Kata sandi Anda');window.location='../media.php?page=isihome'</script>";
} 
else if($ketemu==1)
{
session_start();
//session_register("index");
//session_register("member");
//session_register("passwd");
$_SESSION['index']="index";
$_SESSION['member']= $user;
$_SESSION['passwd']= $pass;
echo "<script>alert('Anda Berhasil Masuk'); window.location='../media.php?page=isihome'</script>";}

else
{
 echo "<center><br><br><br><br><br><br><b>GAGAL MASUK! </b><br> 
        Email atau Password Anda tidak benar.<br>
        Atau Akun Anda sedang diblokir.<br><br>";
		echo "<div> <a href='index.php'><img src='../gambar/sdh.jpg'  height=147 width=176><br><br></a>
             </div>";
  echo "<input type=button class='tombol' value='ULANGI LAGI' onclick=location.href='../media.php?page=isihome'></a></center>";
}
?>
