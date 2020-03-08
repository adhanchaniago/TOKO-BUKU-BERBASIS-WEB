<?php
error_reporting(0);
session_start();
?>
<div id="leftcontent">


<?php
if ($_POST['kirim'])
{
include "../koneksi.php";
// Function Anti SQL injection

function antiinjection($data){
  $filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter_sql;
}
$kode=antiinjection($_POST['kode']);
$nama=antiinjection($_POST['nama']);
$email=antiinjection($_POST['email']);
$pass=$_POST['pass'];
$kota=$_POST['id_kota'];
$cpass=$_POST['cpass'];
$paswd=$_POST['pass'];
$alamat=antiinjection($_POST['alamat']);
$telp=antiinjection($_POST['telp']);
$terms=$_POST['terms'];
$vtelp="[0-9]";
$polaemail = "^.+@.+..+$";

$error=array();
//validasi nama
	if (empty($nama)){
$error[1]="<script>alert('Mohon isi nama anda');window.location='../media.php?page=reglogin'</script>";}

//validasi email
if (empty($email))
{
$error[2]="<script>alert('Mohon isi email anda');window.location='../media.php?page=reglogin'</script>";
}
//validasi format email
else if(!eregi($polaemail,$email))
{
$error[3]="
<script>alert('Format Email anda salah');window.location='../media.php?page=reglogin'</script>";
}
//validasi pasword
if ((empty($pass)) or (empty($cpass)))
{
$error[4]="
<script>alert('Mohon isi kata sandi anda');window.location='../media.php?page=reglogin'</script>";
}

else if ($pass != $cpass ){
$error[5]="
<script>alert('Kata sandi tidak sama');window.location='../media.php?page=reglogin'</script>";}

//validasi No Telp
if (empty($telp)){
$error[6]="
<script>alert('Mohon isi no telp anda');window.location='../media.php?page=reglogin'</script>";}

//validasi format telp
else if(!eregi($vtelp,$telp))
{
$error[7]="
<script>alert('Format telp salah');window.location='../media.php?page=reglogin'</script>";
}

//validasi alamat
if (empty($alamat)){
$error[8]="
<script>alert('Mohon isi alamat anda');window.location='../media.php?page=reglogin'</script>";}


//validasi KOde Verifikasi
if(($_SESSION['security_code']==$_POST[security_code])&&(!empty($_SESSION['security_code'])))
{
	//masukam script anda jika validasi benar
	echo'';
}
else
{
	//masukam script anda jika validasi salah
$error[9]="
<script>alert('Anda belum mengisikan kode verivikasi');window.location='../media.php?page=reglogin'</script>";
}

//Validasi Terms
if(empty($terms)){
$error[10]="
<script>alert('Anda belum menyetujui untuk mendaftar');window.location='../media.php?page=reglogin'</script>";
}
echo $error[1];
echo $error[2];
echo $error[3];
echo $error[4];
echo $error[5];
echo $error[6];
echo $error[7];
echo $error[8];
echo $error[9];
echo $error[10];



if(empty($error)){
		$lihat=mysql_query("select*from member where email='$email'");
		$ketemu=mysql_num_rows($lihat);
			if ($ketemu == 1){
				echo"
				<script>alert('Email Anda Sudah Terdaftar');window.location='../media.php?page=reglogin'</script>";}

			else{
				mysql_query("insert into member(id_member, password,nama,alamat,id_kota,telp,email) values ('','$paswd','$nama','$alamat','$kota','$telp','$email')");
				echo"<script>alert('Terimakasih anda sudah menjadi member kami');window.location='../media.php?page=isihome';</script>";}
} 
}
?>

	
</div>