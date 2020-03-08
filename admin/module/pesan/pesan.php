<br>
<h2><center><strong>BUKU TAMU</strong></center></h2>
<table border="1" align="center" cellpadding="5">
<tr bgcolor="#33CCFF">
<td width="20"><div align="center"><strong>No</strong></div></td>
<td width="300"><div align="center"><strong>Nama</strong></div></td>
<td width="200"><div align="center"><strong>Email</strong></div></td>
<td width="300"><div align="center"><strong>Pesan</strong></div></td>
<td width="90"><div align="center"><strong>Tanggal</strong></div></td>
<td width="60"><div align="center"><strong>Aksi</strong></div></td>
</tr>
<?php
include"../koneksi.php";
$no=1;
$tampil=mysql_query("select*from bukutamu");
while($r=mysql_fetch_array($tampil))
{
?>
<tr>
<td><center><?php echo $no++?></center></td>
<td><?php echo $r[1]?></td>
<td><?php echo $r[2]?></td>
<td><?php echo $r[3]?></td>
<td><?php echo $r[4]?></td>

<td bordercolor="#33FFFF"><center>
<a href="?page=hapuspesan&id=<?=$r['0'];?>">HAPUS</a></center></td>

</tr>
<?php }?>

</table>