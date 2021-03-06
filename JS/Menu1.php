<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>

ul{
margin:0;
padding:0;
}

li{
display:inline;
list-type:none;
}

a.glidebutton{
display: inline-block;
position: relative;
color:red #4A4A4A; /* default color */
background: #ececec; /* default bg color */
text-decoration: none;
font: bold 14px Arial; /* font settings */
letter-spacing: 2px; /* font settings */
overflow: hidden;
height: 30px; /* height of each button */
text-align: center;
border-radius: 5px; /* border radius */
-moz-transition: all 0.3s ease-in-out; /* Enable CSS transition between property changes */
-webkit-transition: all 0.3s ease-in-out;
-o-transition: all 0.3s ease-in-out;
-ms-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out;
}

a.glidebutton > span:first-child{ /* first span inside button */
position: relative;
display: block;
height: 100%;
padding: 6px; /* padding of button */
-moz-box-sizing: border-box;
box-sizing: border-box;
-moz-transition: all 0.3s ease-in-out; /* Enable CSS transition between property changes */
-webkit-transition: all 0.3s ease-in-out;
-o-transition: all 0.3s ease-in-out;
-ms-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out;
}

a.glidebutton > span:first-child:after{ /* CSS generated content */
content: attr(data-text); /* Duplicate text of span markup */
display: block;
width: 100%;
height: 100%;
-moz-box-sizing: border-box;
box-sizing: border-box;
padding: inherit;
position: absolute;
top:100%;
left:0;
}

a.glidebutton:hover{
color: black; /* color of button on hover */
background:#00C; /* bg color of button on hover */
box-shadow: 0 0 4px green inset;
}

a.glidebutton:hover > span:first-child{
-moz-transform: translateY(-100%);
-webkit-transform: translateY(-100%);
-ms-transform: translateY(-100%);
-o-transform: translateY(-100%);
transform: translateY(-100%);
}
</style>


</head>

<body>
<ul>
<li><a class="glidebutton" href="?page=home"><span data-text="Home">Home</span></a></li>
<li><a class="glidebutton" href="?page=logout"><span data-text="logout">logout</span></a></li>
</ul>

</body>
</html>