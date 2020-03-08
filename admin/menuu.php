<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Zepline Buku</title>
</head>
<style>
#cssmenu {
	width: 100%;
	height: 34px;
	margin: 0;
	padding: 0;
	background: #09F url(gambar/bg-bubplastic.gif) top left repeat-x;
}
#cssmenu ul {
	list-style: none;
	margin: 0;
	padding: 0;
}
#cssmenu ul li {
	float: left;
	margin: 0;
	padding: 0;
	background: transparent url(gambar/bg-bubplastic-button.gif) top left no-repeat;
}

#cssmenu ul li a {
	display: block;
	height: 27px;
	padding-left: 26px;
	float: left;
	text-transform: uppercase;
	font-family: 'Helvetica Neue',helvetica,'microsoft sans serif',arial,sans-serif;
	font-size: 70%;
	color: #FFF;
	text-decoration: none;
}

#cssmenu ul li a span {
	display: block;
	float: left;
	height: 22px;
	padding-top: 5px;
	padding-right: 28px;
	background: transparent url(gambar/bg-bubplastic-button.gif) top right no-repeat;
	cursor: pointer;
}


/* AQUA HOVER */
#cssmenu ul li a:hover,
#cssmenu ul li.active a {
	background: transparent url(gambar/bg-bubplastic-h-aqua.gif) top left no-repeat;
}
#cssmenu ul li a:hover span,
#cssmenu ul li.active a span {
	background: transparent url(gambar/bg-bubplastic-h-aqua.gif) top right no-repeat;
}
a{
text-decoration:none;
	}

</style>
<body>
<div align='right'><a href='logout.php'><img src="gambar/lg.png"width="81" height="30"/></a></div>
<div id='cssmenu'>
  <ul>
   <li><a href='?page=tampilproduk'><span>Data Buku</span></a></li>
   <li><a href='?page=pesan'><span>Buku Tamu</span></a></li>
   <li><a href='?page=orders'><span>Data Order</span></a></li>
   <li><a href='?page=orders_detail'><span>Data Detail</span></a></li>
    <li><a href='?page=member'><span>Data Member</span></a></li>
     <li><a href='?page=tampiladmin'><span>Data Admin</span></a></li>
     <li><a href='?page=tampilkota'><span>Data Ongkir</span></a></li>
     <li><a href='?page=tampilkat'><span>Kategori</span></a></li>
   <!-- <li><a href='logout.php'><span>logout</span></a></li> -->
   
</ul>
</div>
</body>
</html>