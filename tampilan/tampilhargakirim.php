<?php	
if($_POST[kota]=='Jakarta')
{
$tkota="Jakarta";
$tharga=$_POST[perkilo]*9000;

}
else if($_POST[kota]=='Surabaya')
{
$tkota="Surabaya";
$tharga=$_POST[perkilo]*15000;
}
else if($_POST[kota]=='Bekasi')
{
$tkota="Bekasi";
$tharga=$_POST[perkilo]*7000;
}
else if($_POST[kota]=='Bogor')
{
$tkota="Bogor";
$tharga=$_POST[perkilo]*8000;
}
else if($_POST[kota]=='Bandung')
{
$tkota="Bandung";
$tharga=$_POST[perkilo]*12000;
}
else
{

$tkota=="mohon input kota tujuan";
$tharga="anda belum memasukan nilai perkilo";

}
echo "

<h2>DAFTAR HARGA PENGIRIMAN</h2>
<PRE>

<H3>KOTA : $tkota 

Harga :$tharga /$_POST[perkilo] kilo
</H3>
</pre>
";

?>