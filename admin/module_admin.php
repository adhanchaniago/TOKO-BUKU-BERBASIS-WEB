<?php
error_reporting(0);
$page=$_GET['page'];
if ($page=="tampilproduk")
{
	include "module/produk/tampil.php";
}

if ($page=="tambahproduk")
{
	include "module/produk/input_produk.php";

}

if ($page=="hapusproduk")
{
	include "module/produk/hapus.php";

}

if ($page=="editproduk")
{
	include "module/produk/edit.php";
}
if ($page=="tampiladmin")
{
	include "module/admin/tampil.php";

}
if ($page=="tambahadmin")
{
	include "module/admin/input.php";

}
if ($page=="editadmin")
{
	include "module/admin/edit_admin.php";
}
if ($page=="hapusadmin")
{
	include "module/admin/hapus_admin.php";
}
if ($page=="home")
{
	include "module/admin/home.php";
}

if ($page=="pesan")
{
	include "module/pesan/pesan.php";
}
if ($page=="hapuspesan")
{
	include "module/pesan/hapus_pesan.php";
}
if ($page=="member")
{
	include "module/member/member.php";
}
if ($page=="hapusmember")
{
	include "module/member/hapus_member.php";
}
if ($page=="orders")
{
	include "module/orders/orders.php";
}
if ($page=="hapusorders")
{
	include "module/orders/hapus_orders.php";
}
if ($page=="editorders")
{
	include "module/orders/edit_order.php";
}
if ($page=="orders_detail")
{
	include "module/orders_detail/orders_detail.php";
}
if ($page=="lihatorder")
{
	include "module/mod_order/order.php";
}
if ($page=="hapusordersdetail")
{
	include "module/orders_detail/hapus_ordersdetail.php";
}
if ($page=="tampilkota")
{
	include "module/kota/tampil.php";
}
if ($page=="editkota")
{
	include "module/kota/edit.php";
}
if ($page=="hapuskota")
{
	include "module/kota/hapus.php";
}
if ($page=="tambahkota")
{
	include "module/kota/input_kota.php";
}
if ($page=="tampilkat")
{
	include "module/kategori/tampil.php";
}
if ($page=="editkat")
{
	include "module/kategori/edit.php";
}
if ($page=="hapuskat")
{
	include "module/kategori/hapus.php";
}
if ($page=="tambahkat")
{
	include "module/kategori/input_kategori.php";
}
?>