<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">

a.nowandthen{
position:relative;
display: block;
overflow:hidden;
cursor: pointer;
width: 650px; /* set width of image container */
height: 434px; /* set height of image container */
}

a.nowandthen img{
position:absolute;
left:0;
top:0;
width: 100%;
height: 100%;
-moz-transition: all 0.5s ease; /* enable transition */
-webkit-transition: all 0.5s ease;
-o-transition: all 0.5s ease;
-ms-transition: all 0.5s ease;
transition: all 0.5s ease;
z-index: 2;
clip: rect(0,650px,434px,0); /* clip values should be rect(0,image_width,image_height,0) */
}


a.nowandthen img:nth-of-type(2){ /* hide "after" image beneath "before" so it's initially out of view */
z-index: 1;
}


a.nowandthen:hover img:nth-of-type(1){ /* clip "before" image to reveal "after" */
clip: rect(0,0,434px,0); /* clip values should be rect(0,0,image_height,0) */
opacity: 0;
}

a.nowandthen.alt{
width: 300px; /* set width of image container */
height: 354px; /* set height of image container */
}

a.nowandthen.alt img{
clip: rect(0,300px,354px,0); /* clip values should be rect(0,image_width,image_height,0) */
}

a.nowandthen.alt:hover img:nth-of-type(1){
clip: rect(0,0,354px,0); /* clip values should be rect(0,0,image_height,0) */
}

</style>

</head>

<body>
<a class="nowandthen">
	<img src="../image/christian-background-loops.jpg" alt="">
	<img src="../image/header1.jpg">
</a>

<a class="nowandthen alt">
	<img src="../image/image1.jpg" alt="">
	<img src="../image/mandiri.jpg" alt="">
</a>

</body>
</html>