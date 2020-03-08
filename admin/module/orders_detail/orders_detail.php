<br>
<h2><center><strong>DATA ORDER DETAIL</strong></center></h2>
<table border="1"  align="center" cellpadding="5">
<tr bgcolor="#33CCFF">
<td width="100"><div align="center"><strong>No</strong></div></td>
<td width="100"><div align="center"><strong>Id Orders</strong></div></td>
<td width="100"><div align="center"><strong>Id Buku</strong></div></td>
<td width="50"><div align="center"><strong>Jumlah</strong></div></td>
<td width="100"><div align="center"><strong>Total Harga</strong></div></td>
<td width="80"><div align="center"><strong>Aksi</strong></div></td>
</tr>
<?php
include"../koneksi.php";
$no=1;
//$tampil=mysql_query("SELECT orders_detail.*, product.id_produk FROM orders_detail, product WHERE orders_detail.id_produk = product.id_produk ORDER BY orders_detail.id_orders ");
$tampil=mysql_query("SELECT*FROM orders_detail ");
while($r=mysql_fetch_array($tampil))
{
?>
<tr>
<td><center><?php echo $no++;?></center></td>
<td><?php echo $r['0'];?></td>
<td><center><?php echo $r['1'];?></center></td>
<td><center><?php echo $r['2'];?></center></td>
<td><center><?php echo $r['3'];?></center></td>
<td bordercolor="#33FFFF"><center>
<a href="?page=hapusordersdetail&id=<?=$r['0'];?>">HAPUS</a></center></td>
</tr>
<?php }?>
	
</table>