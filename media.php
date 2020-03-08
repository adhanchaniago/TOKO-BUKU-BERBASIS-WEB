<?php
 session_start();
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Zepline Buku</title>
</head>

<body>
<link rel="stylesheet" href="USER.css" type="text/css" />
<div id="page_container">
<div id="header">
</div>
<div class="clean"> <?php include "menuu.php"; ?> </div>
<div class="clean">
</div>
<div id="leftsidebar">
<div class="judul">Masuk</div>
<div class="isi"> <?php include "tampilan/LOGINMMB.php"; ?></div>
<div class="judul">Kalender</div>
<div class="isi"> <?php include 'kalender.php';?></div>
<div class="judul">Kategori</div>
<div class="isi"> <?php include "tampilan/tamp_kat.php"; ?></div>
</div>
<div id="rightsidebar"> 
<div class="judul">Harga Kirim</div>
<div class="isi"> <?php include "tampilan/hargakirim.php"; ?></div>
<div class="judul">Cek Resi</div>
<div class="isi"> <?php include "tampilan/cekresipos.php"; ?></div>  
<div class="judul">Rekening Bank</div>
<div class="isi"> <?php include "tampilan/rekbank.php"; ?></div> 
</div>
<div id="content"> <?php include "module.php"; ?> </div>
<div class="clean">
</div>
<div id="footer"><center>
</center></div></br>
</div>
</body>
</html>