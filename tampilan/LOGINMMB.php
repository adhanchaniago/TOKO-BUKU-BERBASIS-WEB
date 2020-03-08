<?php 
error_reporting(0);
session_start();
if(isset($_SESSION['member'])){
?>
<center>Klik "keluar" apabila anda sudah selesai</center>
<br></br>
<center><a href="tampilan/logout.php"><input name="kirim" type="button" value="Keluar" class="tombol"/></a></center>
<br></br>
<?php
}
else
{
?>
<form action="tampilan/ceklogin_member.php" method="post">
<b>Email</b> <br />
 <input name="id_member" type="text" size="20" maxlength="50" /><br /><br />						
<b>Kata Sandi </b><br />
<input name="paswd" type="password" size="20" maxlength="15" />				
<input name="kirim" type="submit" value="Masuk" class="tombol"/><br />
<div align="right"><a href="?page=reglogin"><b><font color="#0000CC" face="calibri">Daftar Member</font></b></a></div>

</pre>
</form>

<?php
}
?>