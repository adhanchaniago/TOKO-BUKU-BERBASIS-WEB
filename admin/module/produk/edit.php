<?php
$vfoto=$_FILES['tgambar']['name'];
$tfoto=$_FILES['tgambar']['tmp_name'];
$dir="../gambar/";
$upload=$dir.$vfoto;
move_uploaded_file($tfoto,$upload);

include"koneksi.php";
if($_POST['update'])
{
	$tgl=date('y-m-d');
	$simpan=mysql_query("update produk set
	nama='$_POST[tnama]',
	keterangan='$_POST[tket]',
	harga='$_POST[tharga]',
	stok='$_POST[tstok]',
	berat='$_POST[tberat]',
	id_kat='$_POST[tidkat]',
	gambar='$vfoto'
	where id_produk='$_GET[id]'")
	or die("Gagal Query ubah:".mysql_error());
	if($simpan){
		echo"<script>alert('Data Telah Tersimpan');
		window.location='?page=tampilproduk';</script>";
	}
	else
	{
		echo"gagal";
	}
}
$tampil=mysql_query("select*from produk where id_produk='$_GET[id]'");
$t=mysql_fetch_array($tampil);
?>

<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="349" border="0">
    <tr>
      <td>Nama Buku</td>
      <td>:</td>
      <td>
      <input type="text" name="tnama" value="<?php echo $t['nama']?>" id="textfield2" /></td>
    </tr>
    <tr>
      <td>Deskripsi</td>
      <td>:</td>
      <td>
      <textarea name="tket"  id="textarea" cols="45" rows="5"><?php echo $t['keterangan']?></textarea></td>
    </tr>
    <tr>
      <td>Harga</td>
      <td>:</td>
      <td><input type="text" name="tharga" value="<?php echo $t['harga']?>" id="textfield4" /></td>
    </tr>
    <tr>
      <td>Stok</td>
      <td>:</td>
      <td><input type="text" name="tstok" value="<?php echo $t['stok']?>" id="textfield5" /></td>
    </tr>
        <tr>
      <td>Berat</td>
      <td>:</td>
      <td><input type="text" name="tberat" value="<?php echo $t['berat']?>" id="textfield3" /></td>
    </tr>
    <tr>
      <td>Id Kat</td>
      <td>:</td>
      <td><input type="text" name="tidkat" value="<?php echo $t['id_kat']?>" id="textfield6" /></td>
    </tr>
    <tr>
      <td>Gambar</td>
      <td>:</td>
      <td>
      <input type="file" name="tgambar" value="<?php echo $t['gambar']?>" id="fileField" /></td>
    </tr>
    <tr>
      <td colspan="3"><input type="submit" name="update"  value="Simpan" />
      <input type="reset" name="Batal"  value="Batal" /></td>
    </tr>
  </table>
</form>
