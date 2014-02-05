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
	<!-- Slider -->
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
	<!-- End Slider -->
</div>       
<div id="content_bg">
    <div id="column_box">
      <div id="bg_left"></div>
      <div id="column1">
        <h2>Languages Known</h2>
							<img src="images/pound.png" alt="" title="" style="float: left; padding-right: 20px;"/>
							<p>Proficient in C, C++, Python, Visual Basic, HTML, and XML.<br />
							Experience with MATLab, LaTeX, and Objective C.</p>
      </div>
      <div id="column2">
        <h2>Software Experience</h2>
							<img src="images/tux.png" alt="" title="" style="float: left; padding-right: 20px;"/>
							<p>Microsoft Office, Windows, Linux, OS X, Git, SVN, Mainframe, Dreamweaver, Photoshop, Visual Studio and tools listed below.</p>
      </div>
      <div id="column3">
       <h2>Education</h2>
							<img src="images/uk.png" alt="" title="" style="float: left; padding-right: 20px;"/>
							<p>BS Computer Engineering at University of Kentucky '14.<br /> <br />
							Transfered from SUNY Cortland after two years '11.
							
							</p>
      </div>
      <div class="clear"></div>
    </div>
	
	<div class="marg_top2">
				
				<div class="col2 pad_left1">
					<div class="pad">
						
						<h2>Projects</h2>
						<ul class="list1 cols">
								<li><a href="projects/tools">Tools and Small Applications</a></li>
						</ul>	
						<br />
						<h2>Activities</h2>
						<br />
						<h2>Courses</h2>
						<strong>University of Kentucky</strong>
						<ul class="list1 cols">
								<li>Software Engineering</li>
								<li>C++ Programming</li>
								<li>Python Programming</li>
								<li>Discrete Mathematics</li>	
						</ul>	
						<strong>SUNY Cortland</strong>
						<ul class="list1 cols">
								<li>C Programming</li>
								<li>Calculus III</li>
								<li>Physics III</li>	
						</ul>	
						<strong>Online Courses</strong>
						<ul class="list1 cols">
								<li><a href="https://www.coursera.org/saas/class/?new_user">Software Engineering for Sortware as a Service</a></li>
								<li><a href="http://www.cs101-class.org/">Computer Science</a></li>
							</ul>				
					</div>
				</div>
				<div class="col1">
					<div class="box2">
						<div class="pad">
							<h2>Tools used</h2>
							<div class="pad_bot2">
								<div class="pics"><img src="images/fedora.png" alt="" class="left marg_right1" /></div>
								<div class="color1"><strong>Fedora 16</strong><br />
								Used as main operating system
								</div>
							</div>
							<div class="pad_bot2">
								<div class="pics"><img src="images/gimp.png" alt="" class="left marg_right1" /></div>
								<div class="color1"><strong>Gimp</strong><br />
								Recently switched from photoshop to Gimp.
								</div>
							</div>
							<div class="pad_bot2">
								<div class="pics"><img src="images/qtcreator.png" alt="" class="left marg_right1" /></div>
								<div class="color1"><strong>Qt Creator</strong><br />
								Used for Qt based C++ applications.
								</div>
							</div>
							<div class="pad_bot2">
								<div class="pics"><img src="images/vim.png" alt="" class="left marg_right1" /></div>
								<div class="color1"><strong>Vim</strong><br />
								My preferred text and source code editor.
								</div>
							</div>
							<div class="pad_bot2">
								<div class="pics"><img src="images/bluefish.png" alt="" class="left marg_right1" /></div>
								<div class="color1"><strong>Bluefish</strong><br />
								IDE for Web Design. Assists with aspects Vim cannot.
								</div>
							</div>
							<div class="pad_bot2">
								<div class="pics"><img src="images/firefox.jpg" alt="" class="left marg_right1" /></div>
								<div class="color1"><strong>Firefox</strong><br />
								Best browser for Unix and lightweight with option to be bloated.
								</div>
							</div>
							<div class="pad_bot2">
								<div class="pics"><img src="images/eclipse.png" alt="" class="left marg_right1" /></div>
								<div class="color1"><strong>Eclipse</strong><br />
								IDE for Android dev and debugging of all languages.
								</div>
							</div>
					  </div>
					</div>
				</div>
			</div><div class="clearall"></div>
   </div><div class="clearall"></div>
    </div>
<?php
include_once("include/footer.php");
?>
</div>
</body>
</html>
