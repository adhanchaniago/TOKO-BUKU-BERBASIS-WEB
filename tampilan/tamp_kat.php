<?php
include"koneksi.php";
?>
 <?php     
$sql=mysql_query("SELECT*FROM kategori");
while($r=mysql_fetch_array($sql))
{
 echo"  <a href='?page=product_kat&id=$r[id_kat]'><strong><h4>$r[1]</h4></strong></a>
";
}
/* 
while($r=mysql_fetch_array($sql))
{
 echo"  <a href='?page=product_kat&id=$r[id_kat]'><strong><h4>$r[1]</h4></strong></a>
";
}
*/
?>