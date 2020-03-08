<div align='right'><a href="?page=tambahadmin"><img src="gambar/lr.png" height="30" width="80" /></a></div>
<h2><center><strong>DATA ADMIN</strong></center></h2>
<table border="1" align="center" cellspacing="1" cellpadding="5">
<tr bgcolor="#33CCFF">
<td width="50"><div align="center"><strong>No</strong></div></td>
<td width="200"><div align="center"><strong>Id Pengguna</strong></div></td>
<td width="200"><div align="center"><strong>Password</strong></div></td>
<td width="300"><div align="center"><strong>Nama Pengguna</strong></div></td>
<td width="100" colspan="2"><div align="center"><strong>Aksi</strong></div></td>
</tr>

<?php
include"koneksi.php";
$no=1;
$tampil=mysql_query("select*from admin");
while($r=mysql_fetch_array($tampil)){
	?>
	
   <tr>
   <td><center><?php echo $no++?></center></td>
   <td><?php echo $r[0]?></td>
   <td><?php echo $r[1]?></td>
   <td><?php echo $r[2]?></td>
   
   
   <td bordercolor="#FFFFFF" align="center"><center><a href="?page=editadmin&id=<?=$r['0'];?>">UBAH</a></center></td>
  <td bordercolor="#FFFFFF" align="center"><center><a href="?page=hapusadmin&id=<?=$r['0'];?>">HAPUS</a></center></td>
   <tr>
   <?php }?>

 
 
   </table>