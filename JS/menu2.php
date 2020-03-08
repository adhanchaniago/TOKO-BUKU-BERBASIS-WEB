<link rel="stylesheet" href="css3splitmenu.css" />

<!--[if lte IE 8]>

<style>

/* Hide split menu from IE8 and below */

div.css3splitmenu {
		margin-right: 5px;
		}

div.css3splitmenu > a:after {
		display: none;
		}

div.css3splitmenu > input {
		display: none;
		}

div.css3splitmenu > ul {
		display: none;
		}

</style>

<![endif]-->

<body>
<div class="css3splitmenu">
<a href="http://www.dynamicdrive.com">Dynamic Drive</a> <input type="checkbox" />

<ul id="t">
<li><a href="http://www.dynamicdrive.com/new.htm">What's New</a></li>
<li><a href="http://www.dynamicdrive.com/revised.htm">Revised</a></li>
<li><a href="http://www.dynamicdrive.com/forums/">DD Forums</a></li>
<li><a href="http://www.dynamicdrive.com/style/">CSS Library</a></li>
<li><a href="http://tools.dynamicdrive.com/imageoptimizer/">Image Optimizer</a></li>
<li><a href="http://tools.dynamicdrive.com/gradient/">Gradient Image Maker</a></li>
<li><a href="http://tools.dynamicdrive.com/favicon/">FavIcon Generator</a></li>
</ul>
</div>  

<div class="css3splitmenu">
<a href="http://www.javascriptkit.com">JavaScript Kit</a> <input type="checkbox" />

<ul>
<li><a href="http://www.javascriptkit.com/cutpastejava.shtml" >Free JavaScripts</a></li>
<li><a href="http://www.javascriptkit.com/">JS Tutorials</a></li>
<li><a href="http://www.javascriptkit.com/jsref/">JS Reference</a></li>
<li><a href="http://www.javascriptkit.com/howto/">Web Design Tutorials</a></li>
</ul>
</div>  

<div class="css3splitmenu nocss3splitmenu">
<a href="http://www.cssdrive.com">CSS Drive</a>
</div>


<!-- Script below should follow all split menus -->

<script type="text/javascript">

( function(){ // local scope

	if (!document.querySelectorAll || !document.addEventListener)
		return
	var uls = document.querySelectorAll('div.css3splitmenu > ul'),
			docbody = document.documentElement || document.body,
			checkboxes = document.querySelectorAll('div.css3splitmenu > input[type="checkbox"]'),
			zindexvalue = 100

	for (var i=0; i<uls.length; i++){
		( function(x){ // closure to capture each i value
			checkboxes[i].addEventListener('click', function(e){
				uls[x].style.zIndex = ++zindexvalue
				for (var y=0; y<uls.length; y++){ // loop through checkboxes other than current and uncheck them (since Chrome doesn't respond to onblur event on checkboxes)
					if (y != x)
						checkboxes[y].checked = false
				}
				e.cancelBubble = true
			})
			checkboxes[i].addEventListener('blur', function(e){
				setTimeout(function(){checkboxes[x].checked = false}, 100) // delay before menu closes, for Opera's sake (otherwise links are un-navigatable)
				e.cancelBubble = true
			})
		}) (i)
	}

	docbody.addEventListener('click', function(e){
		for (var i=0; i<uls.length; i++){
			checkboxes[i].checked = false
		}
	})

})();


</script>
