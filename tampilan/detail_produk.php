<?php
include "koneksi.php";
		$tampil = mysql_query("SELECT*FROM produk where 
	id_produk='$_GET[id]'");
		$r=mysql_fetch_array($tampil);
		echo"
<div align='center'>
<table bgcolor='' width='500' border='1' cellspacing='0'>
<tr bgcolor='#66CCCC'>
<td colspan='2'><direction='right'>
<div align='center'><strong>DETAIL BUKU</strong></div>
</td>
</tr>
<tr><td>Id Buku</td><td>$r[0]</td></tr>
<tr><td>Nama Buku</td><td>$r[1]</td></tr>
<tr><td>Deskripsi</td><td>$r[2]</td></tr>
<tr><td>Harga</td><td>$r[3]</td></tr>
<tr><td>Stok</td><td>$r[4]</td></tr>
<tr><td></td>
<td>
<a id='example1' href='gambar/$r[gambar]'>
<img alt='example1' src='gambar/$r[gambar]' width=200 height=200/></a>

				</td></tr>
				<tr bgcolor='#66CCCC'><td></td><td>
<input type='button' value='Beli' onclick=\"window.location.href='?page=aksi&module=keranjang&act=tambah&id=$r[id_produk]';\">

<input type='button' value='Kembali' onclick=\"window.location.href='?page=produk';\">
</td></tr>
</table>
</div>";
?>

