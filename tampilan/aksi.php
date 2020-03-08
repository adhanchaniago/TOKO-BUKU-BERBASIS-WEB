<?php
session_start();
include "koneksi.php";
//include "library.php";

$tgl_sekarang = date("Ymd");
$jam_sekarang = date("H:i:s");

$page=$_GET[module];
$act=$_GET[act];

if ($page=='keranjang' AND $act=='tambah'){

	$sid = session_id();
	$sql2 = mysql_query("SELECT stok FROM produk 
			WHERE id_produk='$_GET[id]'");
	$r=mysql_fetch_array($sql2);
  
  if ($r[stok] == 0){
      echo "<script>alert('stok habis');window.location='?page=produk'</script>";
  }
  else{
	// check if the product is already
	// in cart table for this session
	$sql = mysql_query("SELECT id_produk FROM orders_temp
			WHERE id_produk='$_GET[id]' AND id_session='$sid'");
	$ketemu=mysql_num_rows($sql);
	
	if ($ketemu==0)
	{
		// put the product in cart table
		mysql_query("INSERT INTO orders_temp (id_produk, id_session, jumlah ,tgl_order_temp, jam_order_temp)
				VALUES ('$_GET[id]', '$sid', 1, '$tgl_sekarang', '$jam_sekarang')");
	}
	 else 
	 {
	
		// update product quantity in cart table
		mysql_query("UPDATE orders_temp 
		        SET jumlah = jumlah + 1
				WHERE id_session ='$sid' AND id_produk='$_GET[id]'");		
	}	
	deleteAbandonedCart();
 echo "<script>window.location='?page=keranjang'</script>";
    }				
}

elseif ($page=='keranjang' AND $act=='hapus'){
	mysql_query("DELETE FROM orders_temp WHERE id_orders_temp='$_GET[id]'");
	echo "<script>window.location='?page=keranjang'</script>";
}

elseif ($page=='keranjang' AND $act=='update'){
  $id       = $_POST[id];
  $jml_data = count($id);
  $jumlah   = $_POST[jml]; // quantity
  for ($i=1; $i<=$jml_data; $i++){
    mysql_query("UPDATE orders_temp SET jumlah = '".$jumlah[$i]."'
                                      WHERE id_orders_temp = '".$id[$i]."'");
}
echo "<script>window.location='?page=keranjang'</script>";				
}

function deleteAbandonedCart(){
	$kemarin = date('Y-m-d', mktime(0,0,0, date('m'), date('d') - 1, date('Y'))); // mktime menyatakan kejadian waktu
	mysql_query("DELETE FROM orders_temp 
	        WHERE tgl_order_temp < '$kemarin'");
}
?>