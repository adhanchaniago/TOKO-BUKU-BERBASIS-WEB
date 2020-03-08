<?php
error_reporting(0);
session_start();
include "koneksi.php";
//include "fungsi_rupiah.php";

	$sid = session_id();
	$sql = mysql_query("SELECT * FROM orders_temp,produk 
			                WHERE id_session='$sid' AND orders_temp.id_produk=produk.id_produk");
    $ketemu=mysql_num_rows($sql);
    if($ketemu < 1){
    echo "<script>window.alert('Keranjang Belanjanya Masih Kosong');
        window.location='media.php?page=isihome'</script>";
    }
 
     echo "<form method=post action=?page=aksi&module=keranjang&act=update>
            
			<table style='font-size:16px; font-style:oblique;'border=1 width='520' cellspacing='0' cellpadding='5'>
            <tr bgcolor='#0CF'><th>No</th><th>Nama Buku</th><th>Jumlah</th><th>Harga Satuan</th><th>Sub Total</th><th>Hapus</th></tr>";  
  
  $no=1;
  while($r=mysql_fetch_array($sql)){
    $subtotal    = $r[harga] * $r[jumlah];
    $total       = $total + $subtotal;  
    $subtotal_rp = ($subtotal); //format_rupiah
    $total_rp    = number_format($total,0,",","."); //format_rupiah
    $harga       = number_format($r[harga],0,",",".");  //format_rupiah
    
    echo "<tr bgcolor=''><td>$no</td><input type=hidden name=id[$no] value=$r[id_orders_temp]>
              <td>$r[nama]</td>
              <td><select name='jml[$no]' value=$r[jumlah] onChange='this.form.submit()'>";
			  for ($j=1;$j <= $r[stok];$j++)
			  {
                  if($j == $r[jumlah])
				  {
                   echo "<option selected>$j</option>";
                  }else
				  {					 
                   echo "<option>$j</option>";
                  }
              }
			  echo "</select></td>";
            echo  "<td>Rp. $harga</td>
              <td>Rp. $subtotal_rp</td>
              <td align=center ><a href='?page=aksi&module=keranjang&act=hapus&id=$r[id_orders_temp]'>HAPUS</td>
          </tr>
		  ";
    $no++; 
    
  } 
  echo "
  <tr><td colspan=6></td><tr>
<tr><td colspan=6>
<h2 style='text-align:right; color:#333;'><b>TOTAL : Rp.$total_rp</b></h1>
</td></tr>
<tr><td colspan=6>
<div align='left'>  &nbsp;&nbsp;<a href=?page=produk>BELI LAGI</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href=?page=selesai>SELESAI</a> </div>
</td></tr>
</table></form>
";
?>
