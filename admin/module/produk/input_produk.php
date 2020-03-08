<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$vfoto=$_FILES['tgambar']['name'];
$tfoto=$_FILES['tgambar']['tmp_name'];
$dir="../gambar/";
$upload=$dir.$vfoto;
move_uploaded_file($tfoto,$upload);
if($_POST['simpan'])
{
	if((empty($_POST[tid]))or (empty($_POST[tnama])) or (empty($_POST[tket]))or (empty($_POST[tharga]))or (empty($_POST[tstok]))or (empty($_POST[tberat]))or (empty($_POST[tidkat])))
{
	echo"<script>alert('data yang anda input belum lengkap');
	window.location='?page=tampilproduk';</script>";
}

else
{
	include"koneksi.php";
	$tgl=date('y-m-d');
	$simpan=mysql_query("insert into produk (id_produk,nama,keterangan,harga,stok,berat,gambar,tgl,id_kat) values
	('$_POST[tid]',
	'$_POST[tnama]',
	'$_POST[tket]',
	'$_POST[tharga]',
	'$_POST[tstok]',
	'$_POST[tberat]',
	'$vfoto',
	'$tgl',
	'$_POST[tidkat]')");
	if($simpan){
		echo"<script>alert('Data Telah Tersimpan');
		window.location='?page=tampilproduk';</script>";
	}
	else
	{
		echo"gagal";
	}
}
}
?>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="349" border="0">
    <tr>
      <td width="78">Id Buku</td>
      <td width="15">:</td>
      <td width="234">
      <input type="text" name="tid" id="textfield" /></td>
    </tr>
    <tr>
      <td>Nama Buku</td>
      <td>:</td>
      <td>
      <input type="text" name="tnama" id="textfield2" /></td>
    </tr>
    <tr>
      <td>Deskripsi</td>
      <td>:</td>
      <td>
      <textarea name="tket" id="textarea" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>Harga</td>
      <td>:</td>
      <td><input type="text" name="tharga" id="textfield4" /></td>
    </tr>
    <tr>
      <td>Stok</td>
      <td>:</td>
      <td><input type="text" name="tstok" id="textfield5" /></td>
    </tr>
    <tr>
      <td>Berat</td>
      <td>:</td>
      <td><input type="text" name="tberat" id="textfield3" /></td>
    </tr>
    <tr>
      <td>Id Kat</td>
      <td>:</td>
      <td><input type="text" name="tidkat" id="textfield6" /></td>
    </tr>
    <tr>
      <td>Gambar</td>
      <td>:</td>
      <td>
      <input type="file" name="tgambar" id="fileField" /></td>
    </tr>
<!--    <tr><td>Kategori</td><td> :</td>
    <td> <select name="nama_kat" class="form-control">
                        
      <?php
	  	$data = mysql_query ("SELECT*FROM kategori");
                          $s=mysql_fetch_array($data);
                              echo "<option value=$s[nama_kat]>$s[nama_kat]</option>";
                       
						?>
                        </select>
                        </td></tr> -->
 
    <tr>
      <td colspan="3"><input type="submit" name="simpan" id="simpan" value="Simpan" />
      <input type="reset" name="Batal" id="Batafil" value="Batal" /></td>
    </tr>
  </table>
</form>
</body>
</html>