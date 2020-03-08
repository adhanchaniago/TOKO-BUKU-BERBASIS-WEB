<br>
<h2><center><strong>MANAJEMEN ORDER</strong></center></h2>
<table border="1" cellpadding="5" align="center">
<tr bgcolor="#33CCFF">
<!-- <td width="20">Id orders</td>
<td width="300">Nama</td>
<td width="150">Kota</td>
<td width="150">Alamat</td>
<td width="300">Telp</td>
<td width="90">Status</td>
<td width="60">Tanggal</td>
<td width="60">Jam</td>
<td width="60">Email</td>
<td width="60">Total</td>
<td width="60">Aksi</td> -->
<td width="20"><div align="center"><strong>No	</strong></div></td>
<td width="20"><div align="center"><strong>Id Orders</strong></div></td>
<td width="90"><div align="center"><strong>Status</strong></div></td>
<td width="90"><div align="center"><strong>Nama</strong></div></td>
<td width="60"><div align="center"><strong>Tanggal</strong></div></td>
<td width="60"><div align="center"><strong>Jam</strong></div></td>
<td width="60"><div align="center"><strong>Total</strong></div></td>
<td width="60"><div align="center"><strong>Aksi</strong></div></td>

</tr>
<?php
include"../koneksi.php";
$no =1;
$tampil =mysql_query ("SELECT orders.*, member.nama FROM orders, member WHERE orders.id_member = member.id_member ORDER BY orders.id_orders ");
//$tampil=mysql_query("select*from orders");
while($r=mysql_fetch_array($tampil))
{
?>
<tr>
<td><center><?php echo $no++?></center></td>
<td><?php echo $r['id_orders']?></td>
<td><?php echo $r['status']?></td>
<td><?php echo $r['nama']?></td>
<td><?php echo $r['tgl']?></td>
<td><?php echo $r['jam']?></td>
<td><?php echo $r['total_bayar']?></td>
<td bordercolor="#33FFFF">
<a href="?page=editorders&id=<?=$r['0'];?>">UBAH</a>&nbsp;|&nbsp;<a href="?page=hapusorders&id=<?=$r['0'];?>">HAPUS</a></td>
</tr>
<?php }?>

</table>