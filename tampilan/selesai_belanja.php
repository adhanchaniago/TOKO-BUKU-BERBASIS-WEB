<?php 
session_start();
if(isset($_SESSION[member])){
?>
<?php
$id=$_SESSION[member];
include"koneksi.php";
$qry=mysql_query("select*from member where email ='$id'");
$r=mysql_fetch_array($qry);
?>

<fieldset><h3>Masukan Data Diri Anda</h3>
<span style="font-family:"Times New Roman", Times, serif">Isi data diri ini akan diproses sebagai data ORDER isi data dengan benar</span>
<form method=POST action="tampilan/simpan_transaksi.php" target="_blank">
      <table border=0>
      <tr><td><input type="hidden" name="id_member" value="<?php echo $r[id_member]; ?>" ></td></tr>
      <tr><td>Nama</td><td> : <input type="text" name="nama" value="<?php echo $r[nama]; ?>" size=30 placeholder="Nama Jelas"></td></tr>
        <tr><td>Alamat</td><td> : <textarea name="alamat" placeholder="Alamat/Tujuan Kirim"><?php echo $r[alamat]; ?></textarea></td></tr>
          <tr><td>No.Telpon/HP</td><td> : <input type="text" value="<?php echo $r[telp]; ?>" name="telp" placeholder="No.Tlp/Hp Penerima"></td></tr>
      <tr><td>Email</td><td> : <input type="text" value="<?php echo $r[email]; ?>" name="email" placeholder="Email Pembeli"></td></tr>
      <tr><td>Kota</td><td> :  <select name="nm_kota" class="form-control">      	
              <?php          
                         $tampil=mysql_query("SELECT * FROM kota ORDER BY nm_kota ASC");
                             while($t=mysql_fetch_array($tampil)){
                              echo "<option value=$t[nm_kota]>$t[nm_kota]</option>";}
							  ?>
                      </select>
                        </td></tr>

      <tr><td colspan=2><input type="submit" value="Proses"></td></tr>
	  </table></form>
      </fieldset>


<?php
}
else{
	include"tampilan/reglogin.php";
}
?>
