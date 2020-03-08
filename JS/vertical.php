<style type="text/css">

.arrowgreen{
	width: auto; /*width of menu*/
	border-style: solid solid none solid;
	border-color: #94AA74;
	border-size: 1px;
	border-width: 1px;
}

.arrowgreen ul{
	list-style-type: none;
	margin: 0;
	padding: 0;
}
	
.arrowgreen li a{
	font: bold 12px Verdana, Arial, Helvetica, sans-serif;
	display: block;
	background: transparent url(JS/arrowblue.gif) 100% 0;
  height: 24px; /*Set to height of bg image- padding within link (ie: 32px - 4px - 4px)*/
	padding: 4px 0 4px 10px;
	line-height: 24px; /*Set line-height of bg image- padding within link (ie: 32px - 4px - 4px)*/
	text-decoration: none;
}	
	
.arrowgreen li a:link, .arrowgreen li a:visited {
	color: #fff;
}

.arrowgreen li a:hover{
	color:#FF0;
	background-position: 100% -32px;
}

	
.arrowgreen li a.selected{
	color: #26370A;
	background-position: 100% -64px;
}

</style>

<body>
<div class="arrowgreen">
	<ul>
		<li><a href="?page=tentang" title="PROFIL">PROFIL</a></li>
		<li><a href="?page=gambar" title="GALERI">GALERI</a></li>
		<li><a href="?page=fasilitas"title="FASILITAS">FASILITAS</a></li>
		<li><a href="?page=ekskul" title="EKSTRAKULIKULER">EKSTRAKULIKULER</a></li>
		<li><a href="?page=identitas" title="DATA GURU">IDENTITAS</a></li>
		</ul>
</div>
</body>