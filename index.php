<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Zachary Karpinski</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<script src="lib/jquery-1.4.2.js" type="text/javascript"></script>
<script src="lib/js-func.js" type="text/javascript"></script>
<script src="lib/jquery.jcarousel.js" type="text/javascript"></script>
</head>
<body>
<div id="bg">
<div id="main">
<?php
include_once("include/header.php");
?>
		<div id="slider">
			<a id="slider-prev">&nbsp;</a>
			<div class="slider-content">
				<ul>
				    <li><img src="images/header2.jpg" alt="" /></li>
				    <li><img src="images/header.jpg" alt="" /></li>
				    <li><img src="images/header3.jpg" alt="" /></li>
				    <li><img src="images/header4.jpg" alt="" /></li> 
				</ul>
			</div>		
			<a id="slider-next">&nbsp;</a>
			<div class="slider-pagination">
				<ul>
				    <li><a href="#">1</a></li>
				    <li><a href="#">2</a></li>
				    <li><a href="#">3</a></li>
				    <li><a href="#">4</a></li>
				</ul>
			</div>			
		</div>
</div>
<div id="content_bg">
	<div class="marg_top2">
				
				<div class="col2 pad_left1">
					<div class="pad">
						
						<h2>Website currently under-construction</h2>
						<strong>Feel free to browse the blog and portfolio pages.</strong><br />	
					</div>
				</div>
	</div>
</div>
<?php
include_once("include/footer.php");
?>
</div>
</body>
</html>
