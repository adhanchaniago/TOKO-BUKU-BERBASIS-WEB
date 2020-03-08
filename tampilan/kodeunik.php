<?php
function kdunik($tabel){
	$tgl= date("Y-m-d");
	$y=date("Y");
	$ys=substr($y,2,2);
	$m=date("m");
	$d=date("d");
	$struktur	= mysql_query("SELECT * FROM orders");
	$field		= mysql_field_name($struktur,0);
	$panjang	= mysql_field_len($struktur,0);
 	$qry	= mysql_query("SELECT max(".$field.") FROM orders where tgl_order LIKE '$tgl'");
 	$row	= mysql_fetch_array($qry); 
 	if ($row[0]=="") {
 		$angka=0;
	}
 	else {
 		$angka		= substr($row[0],strlen($ys.$m.$d));
 	}
	$angka++;
    $angka	=strval($angka); 
	$tmp	="";
	 	for($i=1; $i<=($panjang-strlen($ys)-strlen($m)-strlen($d)-strlen($angka)); $i++) {
			
		$tmp=$tmp."0";	
	}
 	return $tmp.$angka;
	}
?>
