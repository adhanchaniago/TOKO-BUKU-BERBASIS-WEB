<br>
<h2><center><strong>MANAJEMEN MEMBER</strong></center></h2>
<table border="1" align="center" cellpadding="5">
<tr bgcolor="#33CCFF">
<td width="20"><div align="center"><strong>Id Member</strong></div></td>
<td width="300"><div align="center"><strong>Kata Sandi</strong></div></td>
<td width="200"><div align="center"><strong>Nama</strong></div></td>
<td width="300"><div align="center"><strong>Alamat</strong></div></td>
<td width="90"><div align="center"><strong>Telepon</strong></div></td>
<td width="60"><div align="center"><strong>Email</strong></div></td>
<td width="60"><div align="center"><strong>Aksi</strong></div></td>
</tr>
<?php
include"../koneksi.php";
$no=1;
$tampil=mysql_query("select*from member");
while($r=mysql_fetch_array($tampil))
{
?>
<tr>
<td><center><?php echo $no++?></center></td>
<td><?php echo $r[1]?></td>
<td><?php echo $r[2]?></td>
<td><?php echo $r[3]?></td>
<td><?php echo $r[4]?></td>
<td><?php echo $r[5]?></td>

<td bordercolor="#33FFFF"><center>
<a href="?page=hapusmember&id=<?=$r['0'];?>">HAPUS</a></center></td>
</tr>
<?php }?>

</table>