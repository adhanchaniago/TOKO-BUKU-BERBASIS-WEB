<?php
error_reporting(0);
include"../koneksi.php";
?>
<?php 
session_start();
if(isset($_SESSION[member])){
?>
<?php
$id=$_SESSION[member];
include"../koneksi.php";
$qry=mysql_query("select*from member where email ='$id'");
$r=mysql_fetch_array($qry);
?>
<script src="../JS/jquery-1.11.3.js"></script>
<script src="../JS/jquery.validate.js"></script>
<script src="../JS/jquery.validate.min.js"></script>


<h2>Buku Tamu</h2>
</hr>
<?php
session_start();
//$error=array();
//session_register('security_code');
if(isset($_POST['simpan']))
{
	if(($_SESSION['security_code']==$_POST['security_code'])&&(!empty($_SESSION['security_code'])))
	{
		echo"";
	}
	
	else
	{
		$error[3]='<font color="#00FFFF">Kode yang anda masukkan salah</font>';
		$error[c]='<font color=#666666>*</font>';
	}
	
	if(empty($error))
	{
				$tgl=date('y-m-d');
		$simpan=mysql_query("INSERT INTO bukutamu(nama,email,komentar,tanggal) VALUES('$_POST[nama]','$_POST[email]','$_POST[komentar]','$tgl')");
	echo"<script>alert('Terima kasih, pesan anda sudah kami terima..');</script>";
	}
	else
	{
		echo"<script>alert('Komentar anda gagal dikirim..');</script>";
	}

}
}
?>

<form id="formkomentar" method="post" class="testFrom" action=""
enctype="multipart/form-data">

<p><strong>Nama :</strong></strong>
   	<input class="validate[custom[valname]]text-input" name="nama" size="12" maxlength="40" value="<?php echo $r[nama]; ?>" style="width:250px;" type="text" required/>
  <br/>
  </p>
  
  <strong> Email :</strong>
  <input class="validate[custom[valeemail]] text-input" name="email" size="12" maxlength="40" value="<?php echo $r[email]; ?>" style="width:250px;" type="text" required/>
  <br/>
  </p>
  
  <strong>Komentar </strong>(max.225 karakter) <strong>:</strong><br />
  <textarea name="komentar" cols="30" rows="5" maxlength="225" style="width:350px;color:#F6C" required></textarea>
  </p>
</p>
<p>
  <?php echo"<img src='captcha.php'/>";?>
</p>

<p>
<input id="security_code" name="security_code" type="text" size="6" maxlength="6" required/>
<?php echo"$error[c]";
 echo"$error[3]"; ?>
 </p>
 
 <p>
 <input type="submit" name="simpan" value="Kirim Pesan" class="button"/>
 </p>
 </form>
 </p>
 

