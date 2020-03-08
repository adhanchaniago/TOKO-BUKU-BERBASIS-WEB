<?php 
error_reporting(0);
session_start(); ?>
<!--
 <script type="text/javascript">
function printpage()
{
	window.print() ;
}
</script>

<style>
#kotak{
	background:#F9F;
	width:500px;
	margin:auto;
	text-align:center;
	padding:20px;
	}
	

</style>

<body onLoad="printpage()">
<div id="kotak">
-->
<?php
include "../koneksi.php";
include "kodeotomatis.php";
include "fungsi_rupiah.php";

session_start();
$email=$_SESSION['member'];
$password=$_SESSION['passwd'];  
$login = "SELECT * FROM member WHERE email='$email' AND password='$password'";
$hasil = mysql_query($login);
$datalogin=mysql_fetch_array($hasil);
$id_member=$datalogin['id_member'];

if(mysql_num_rows($hasil) == 0){
			 echo "Email atau Password Anda tidak benar<br />";
			 echo "<a href=javascript:history.go(-1)><b>Ulangi Lagi</b></a>";
}
else{
	
	//membuat kode faktur otomatis yang disimpan ditabel Orders dan detail_order
$kdauto=kdauto("orders","NF");
$sid = session_id();
function isi_keranjang(){
	$isikeranjang = array();
	$sid = session_id();
	$sql = mysql_query("SELECT * FROM orders_temp, produk 
                      WHERE id_session='$sid' and orders_temp.id_produk=produk.id_produk");
	
	while ($r=mysql_fetch_array($sql)) {
		$isikeranjang[] = $r;
	}
	return $isikeranjang;
}


/*
// fungsi untuk mendapatkan isi keranjang belanja
function isi_keranjang(){
	$isikeranjang = array();
		$sql = mysql_query("SELECT * FROM orders_temp WHERE id_session='$sid'");

	while ($r=mysql_fetch_array($sql)) {
		$isikeranjang[] = $r;
	}
	return $isikeranjang;
}
*/
$tgl_skrg = date("Ymd");
$jam_skrg = date("H:i:s");
$sts = "Baru";
	
// simpan data pemesanan 
mysql_query("INSERT INTO orders(id_orders,status, tgl,jam,id_member) VALUES('$kdauto','$sts','$tgl_skrg','$jam_skrg','$id_member')");
 
 // panggil fungsi isi_keranjang dan hitung jumlah produk yang dipesan
$isikeranjang = isi_keranjang();
$jml          = count($isikeranjang);

// simpan data detail pemesanan  
for ($i = 0; $i < $jml; $i++){
  $subtotal =$isikeranjang[$i]['jumlah']* $isikeranjang[$i]['harga'];

  mysql_query("INSERT INTO orders_detail(id_orders, id_produk, jumlah, total_harga) 
               VALUES('$kdauto',{$isikeranjang[$i]['id_produk']}, {$isikeranjang[$i]['jumlah']}, '$subtotal')");
}
  
//	 setelah data pemesanan tersimpan, hapus data pemesanan di tabel pemesanan sementara (orders_temp)
for ($i = 0; $i < $jml; $i++) {
  mysql_query("DELETE FROM orders_temp
	  	         WHERE id_orders_temp = {$isikeranjang[$i]['id_orders_temp']}");
}
 
 
 
 /*
// panggil fungsi isi_keranjang dan hitung jumlah produk yang dipesan
$isikeranjang = isi_keranjang();
$jml          = count($isikeranjang);

// simpan data detail pemesanan 
  $tampil=mysql_query("select*from orders_temp where id_session='$sid'");
while($data=mysql_fetch_array($tampil)){
  mysql_query("INSERT INTO orders_detail(id_orders, id_produk, jumlah, total_harga) 
               VALUES('$kdauto','".$data['id_produk']."','".$data['jumlah']."','$subtotal')");
}
// setelah data pemesanan tersimpan, hapus data pemesanan di tabel pemesanan sementara

  mysql_query("DELETE FROM orders_temp
	  	         WHERE id_session = '$sid'");
}
*/
  echo "<div class='center_title_bar'>Proses Transaksi Selesai</div>";
    	  echo "<div class='member'>
        	<div class='top_prod_box_big'></div>
        <div class='center_prod_box_big'>            
          <div class='details_big_cari'>
              <div>
      Data pemesan beserta ordernya adalah sebagai berikut: <br />
      <table>
      <tr><td>Nama Lengkap   </td><td> : <b>$_POST[nama]</b> </td></tr>
      <tr><td>Alamat Lengkap </td><td> : $_POST[alamat] </td></tr>
      <tr><td>Telepon         </td><td> : $_POST[telp] </td></tr>
      <tr><td>E-mail         </td><td> : $_POST[email] </td></tr></table><hr /><br />
      
      Nomor Order: <b><u>$kdauto</u>    *) No. Order harus dicatat dan diingat!</b><br /><br />  ";

		$daftarproduk=mysql_query("SELECT * FROM orders_detail,produk 
                          WHERE orders_detail.id_produk=produk.id_produk 
                          AND id_orders='$kdauto'");

echo "<table cellpadding=10 width=500>
      <tr bgcolor=salmon align=center><th>No.</th>
	  <th>Nama Produk</th>
	  <th>Qty</th>
	  <th>Berat</th>
	  <th>Harga Satuan</th>
	  <th>Sub Total</th></tr>
        Data order Anda adalah sebagai berikut: <br /><br />";

$no=1;
while ($d=mysql_fetch_array($daftarproduk)){
   $subtotal    = $d['harga'] * $d['jumlah'];


	$subtotalberat=$d[berat]*$d['jumlah'];
	$totalberat = $totalberat + $subtotalberat;
   $total       = $total + $subtotal;
   $subtotal_rp = format_rupiah($subtotal);    
   $total_rp    = format_rupiah($total);    
   $harga       = format_rupiah($d['harga']);

        

   echo "<tr bgcolor=white align=center><td>$no</td>
   <td>$d[nama]</td>
   <td align=center>$d[jumlah]</td>
    <td align=center>$d[berat]</td>
                            <td align=right>Rp. $harga,-</td><td align=right>Rp. $subtotal_rp,-</td></tr>";

   $pesan.="$d[jumlah] $d[nama] -> Rp. $harga -> Subtotal: Rp. $subtotal_rp <br />";
   $no++;
}

$kota=$_POST[nm_kota];

$ongkos=mysql_fetch_array(mysql_query("SELECT ongkir FROM kota WHERE nm_kota='$kota'"));
$ongkoskirim=$ongkos[ongkir];
$grandtotal    = $total + $ongkoskirim * $totalberat; 
$totalongkoskirim = $totalberat*$ongkoskirim; //ini test

$ongkoskirim_rp = format_rupiah($ongkoskirim); 
$ongkoskirim1_rp = format_rupiah($totalongkoskirim); 
$grandtotal_rp  = format_rupiah($grandtotal);  

// update untuk total bayar
mysql_query("UPDATE orders SET total_bayar='$grandtotal' WHERE id_orders='$kdauto'");

echo "<tr><td colspan=5 align=right>Total : Rp. </td><td align=right><b> $total_rp,-</b></td></tr>
      <tr><td colspan=5 align=right>Ongkos Kirim untuk Tujuan Kota Anda: Rp. </td><td align=right><b> $ongkoskirim_rp,- / Kg</b></tr>           
      <tr><td colspan=5 align=right>Total Berat : Rp. </td><td align=right><b> $totalberat Kg</b></tr>           
      <tr><td colspan=5 align=right>Total Ongkos Kirim : Rp. </td><td align=right><b> $ongkoskirim1_rp,-</b></tr>           

      <tr><td colspan=5 align=right>Grand Total : Rp. </td><td align=right><b> $grandtotal_rp,-</b></td></tr>
      </table>";
echo "<hr />   Apabila Anda tidak melakukan pembayaran dalam 1x24 jam, maka transaksi kami anggap batal.<br />      
	              </div>
          </div>    
          </div>
            <div class='bottom_prod_box_big'></div>
          </div>"; 
}
?>
<!--
</div><br>
<body>
</body>
-->