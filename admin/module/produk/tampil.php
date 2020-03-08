<div align='right'><a href="?page=tambahproduk"><img src="gambar/lr.png" height="30" width="80" /></a></div>
<h2><center><strong>DATA BUKU</strong></center></h2>
<table width="844" height="27" border="1" align="center" cellpadding="5">
<tr bgcolor="#33CCFF">
<td width="78"><div align="center"><strong>Id Buku</strong></div></td>
<td width="161"><div align="center"><strong>Nama Buku</strong></div></td>
<td width="373"><div align="center"><strong>Deskripsi</strong></div></td>
<td width="54"><div align="center"><strong>Harga</strong></div></td>
<td width="53"><div align="center"><strong>Stok</strong></div></td>
<td width="54"><div align="center"><strong>Berat</strong></div></td>
<td width="103"><div align="center"><strong>Gambar</strong></div></td>
<td width="161"><div align="center"><strong>Tanggal</strong></div></td>
<td width="53"><div align="center"><strong>Id Kat</strong></div></td>
<td width="123" colspan="2"><div align="center"><strong>Aksi</strong></div></td>
</tr>
<?php

include "koneksi.php";

$batas=5;
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
while ($data=mysql_fetch_array($sql))
{
	echo "<tr>
	<td width='87'><div align='center'>$data[0]</div></td>
	<td width='151'><div align='left'>$data[1]</div></td>
	<td width='43'><div align='left'>$data[2]</div></td>
	<td width='43'><div align='center'>$data[3]</div></td>
	<td width='3'><div align='center'>$data[4]</div></td>
	<td width='3'><div align='center'>$data[5]</div></td>
	<td width='43'><div align='left'><img src='../gambar/$data[gambar]'width='200' height='100'/><div></td>
	<td width='43'><div align='left'>$data[7]</div></td>
	<td width='3'><div align='center'>$data[8]</div></td>
	<td width='44'><div align='left'><a href='?page=editproduk&id=$data[0]'>UBAH</a></div></td>
	<td width='44'><div align='left'><a href='?page=hapusproduk&id=$data[0]'>HAPUS</a></div></td></tr>";
	}
?>
	
<?php
?>

</table>

<?php
echo"
<br><br><br>Halaman:";
	$tampil2="select*from produk";
	$hasil2=mysql_query($tampil2);
	$jmldata=mysql_num_rows($hasil2);
	$jmlhalaman=ceil($jmldata/$batas);
	
	for($i=1;$i<=$jmlhalaman;$i++)
	if($i !=$halaman)
	{echo"<a href=?page=tampilproduk&halaman=$i>$i</a>|";}
	else{echo"<b>$i</b>|";}
	?>