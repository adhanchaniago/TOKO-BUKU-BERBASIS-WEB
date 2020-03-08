<style>
.produk
{
	margin:10px;
	text-align:center;
	width:150px;
	height:260px;
	float:left;
}
</style>
</br>
<?php
include "koneksi.php";

$batas=6;
$halaman=$_GET['halaman'];

if(empty($halaman))
{
	$posisi=0;
	$halaman=1;
}
else
{
	$posisi=($halaman-1)*$batas;
}

$sql=mysql_query("select*from produk order by id_produk desc LIMIT $posisi,$batas");
while ($r=mysql_fetch_array($sql))
{
$harga=number_format($r[harga],0,",",".");
$isi=$r['keterangan'];
echo"
<div class='produk'>
<b>$r[nama]</b></br></br>

<img src='gambar/$r[gambar]' width='150px' height='150px' border='0'/>
<b>Rp.$harga</b>
<br>
<input type=button value='Beli' onclick=\"window.location.href='?page=aksi&module=keranjang&act=tambah&id=$r[0]';\">
<input type='button' value='Detail' onclick=\"window.location.href='?page=detail&id=$r[id_produk]';\">
</div>
";
}
?>
<div class="cleaner"></div>
<?php
echo"
<br><br><br>Halaman:";
	$tampil2="select*from produk";
	$hasil2=mysql_query($tampil2);
	$jmldata=mysql_num_rows($hasil2);
	$jmlhalaman=ceil($jmldata/$batas);
	
	for($i=1;$i<=$jmlhalaman;$i++)
	if($i !=$halaman)
	{echo"<a href=?page=produk&halaman=$i>$i</a>|";}
	else{echo"<b>$i</b>|";}
	?>
	