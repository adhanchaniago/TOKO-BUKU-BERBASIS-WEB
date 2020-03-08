<style>
.produk
{
	margin-right:10px;
	text-align:center;
	width:160px;
	height:260px;
	float:left;
}
.produk img
{
	}


.gallerycontainer{
position: relative;
/*Add a height attribute and set to largest image's height to prevent overlaying*/
}

.thumbnail img{
border: 1px solid white;
margin: 0 5px 5px 0;
}

.thumbnail:hover{
background-color: transparent;
}

.thumbnail:hover img{
border: 1px solid blue;
}

.thumbnail span{ /*CSS for enlarged image*/
position: absolute;
background-color: lightyellow;
padding: 5px;
left: -1000px;
border: 1px dashed gray;
visibility: hidden;
color: black;
text-decoration: none;
}

.thumbnail span img{ /*CSS for enlarged image*/
border-width: 0;
padding: 2px;
}

.thumbnail:hover span{ /*CSS for enlarged image*/
visibility: visible;
top: 0;
left: 230px; /*position where enlarged image should offset horizontally */
z-index: 50;
}


</style>

<?php
include "koneksi.php";
$tampil=mysql_query("select*from produk where id_kat='$_GET[id]'");
while($r=mysql_fetch_array($tampil))
{
   $harga     = number_format($r[harga],0,",",".");
	$isi	   =$r['keterangan'];

	   echo "
	<div class='produk'>
    <b>$r[nama]</b> <br/><br/>
   
<div class='gallerycontainer'>
 <a class='thumbnail' href='#thumb'>
 <img src='gambar/$r[gambar]' width='150px' height='150px' border='0' /><span><img src='gambar/$r[gambar]'/>
 <br/>$r[keterangan]</span></a>
<br>	       
		  <b>Rp. $harga</b><br>
		  
<input type=button value='Beli' onclick=\"window.location.href='?page=aksi&module=keranjang&act=tambah&id=$r[0]';\">
<input type='button' value='Detail' onclick=\"window.location.href='?page=detail&id=$r[id_produk]';\"></div>	 
	</div>
         ";
}
?> 