<?php
$page=$_GET['page'];
if ($page=="produk")
{
	include "tampilan/produk.php";
}

if ($page=="detail")
{
	include "tampilan/detail_produk.php";
}
if ($page=="carapemesanan")
{
	include "tampilan/cara_pemesanan.php";
}
if ($page=="isihome")
{
	include "tampilan/isi_home.php";
}
if ($page=="pesanpengunjung")
{
	include "tampilan/pesan.php";
}
if ($page=="kontakkami")
{
	include "tampilan/kontak_kami.php";
}
if ($page=="keranjang")
{
	include "tampilan/keranjang_belanja.php";
}
if ($page=="aksi")
{
	include "tampilan/aksi.php";
}
if ($page=="contact")
{
	include "tampilan/contact.php";
}
if ($page=="reglogin")
{
	include "tampilan/reglogin.php";
}
if ($page=="selesai")
{
	include "tampilan/selesai_belanja.php";
}
if ($page=="product_kat")
{
	include "tampilan/perkategori.php";
}
if ($page=="carapembayaran")
{
	include "tampilan/cara_pembayaran.php";
}

if ($page=="hargakirim")
{
	include "tampilan/hargakirim.php";
}
if ($page=="tampilhargakirim")
{
	include "tampilan/tampilhargakirim.php";
}


?>
