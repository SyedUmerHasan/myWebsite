<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

<?php 

function mycode($filepath)
{
	echo '<div class="container scrollbar" id="style-1">
<div class="force-overflow">

<pre class="prettyprint lang-html"><xmp>';
echo file_get_contents($filepath); 
echo '</xmp></pre>

</div>
<a href="../../WebEditor.php?filename=/WebDevelopment/HTML/'.$filepath.'"  target="_blank" class="btn btn-default btn-lg btn-block button button-border button-rounded button-fill fill-from-bottom button-black" ><span>Try this code</span></a>
</div>';

}

?>

	<!-- Stylesheets
	============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="../../css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="../../style.css" type="text/css" />
	<link rel="stylesheet" href="../../css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="../../css/dark.css" type="text/css" />
	<link rel="stylesheet" href="../../css/animate.css" type="text/css" />
	<link rel="stylesheet" href="../../css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="../../css/responsive.css" type="text/css" />
	<link rel="shortcut icon" href="/../../images/codeforgeeks.png" />	




	<!-- Here goes your colors.css
	============================================= -->
	<link rel="stylesheet" href="../../css/colors.css" type="text/css" />
	
	

    <!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Code For Geeks">
	<meta name="author" content="SemiColonWeb" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- Document Title
	============================================= -->
	<title>HTML | Code For Geeks | Hub of Developers | Web Development | Software Development </title>


	<!-- Code Prettifier
	 ============================================ -->
	<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
	<style>
	/*! Color themes for Google Code Prettify | MIT License | github.com/jmblog/color-themes-for-google-code-prettify */
.prettyprint{background:#222;font-family:Menlo,Bitstream Vera Sans Mono,DejaVu Sans Mono,Monaco,Consolas,monospace;border:0!important;}.pln{color:#fff}ol.linenums{margin-top:0;margin-bottom:0;color:#666}li.L0,li.L1,li.L2,li.L3,li.L4,li.L5,li.L6,li.L7,li.L8,li.L9{pa0dding-left:1em;background-color:#000;list-style-type:decimal}@media screen{.str{color:#6f0}.kwd{color:#f60}.com{color:#93c}.typ{color:#458}.lit{color:#458}.pun{color:#fff}.opn{color:#fff}.clo{color:#fff}.tag{color:#fff}.atn{color:#9c9}.atv{color:#6f0}.dec{color:#fff}.var{color:#fff}.fun{color:#fc0}}</style>
</head>

<body class="stretched side-header">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
        <?php include "../navbar_courses.php"; ?>    
        <!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-dark" style="background: #222;">

			<div class="container clearfix">
				<h1>HTML Tutorials</h1>
				<span>The path of becoming Front-End Developer</span>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">WebDevelopment</a></li>
					<li class="active">HTML Tutorials</li>
				</ol>
			</div>

		</section>

		<!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="section notopborder nomargin header-stick">
					<div class="container">

						<div class="heading-block">
							<h2>Why learn HTML?</h2>
							<span>HTML is the basics of the web technologies,</span>
						</div>

						<p>
							HTML is the acronym of Hyper Text Markup Language, It is a Hyper Text language but not a programming language.
							which is used to make web pages visible on internet, Simply every content we see is HTML either it is text, image.
							video, and much more is HTML element.
						</p>
						<p>
							HTML is the fundamental technology behind WebDevelopment. It is used with other Web technologies like CSS and Javascript to make a web page 
							interactive and well designed, using HTML we can build everything from simple web page to complex web page.
						</p>
						<p>
							In this tutorial, we will be teaching you HTML with Code For Geeks Web Editor which will help you alot 
							in learning the basics of HTML, which contains hundreds of code and ability to hit and try the code.
						</p>
						<div class="heading-block">
							<h4>Try Code For Geeks Web Editor</h4>
						</div>
					</div>
				<?php
				mycode("Codes/gettingstarted.php");
				?>
				
				</div>

				<!-- center divider -->
					<!-- <div class="divider divider-short divider-center"><i class="icon-circle"></i></div> -->
				<!-- center divider -->
				

				<!-- Emphasize text -->
					<!-- <div class="section parallax dark notopmargin noborder" style="padding: 80px 0; background-image: url('images/parallax/home/5.jpg');" data-stellar-background-ratio="0.4">
						<div class="container center clearfix">
							<div class="emphasis-title">
								<h2>This is an Emphasis Title</h2>
								<p class="lead topmargin-sm">Create as much unique content as you want with this Template which has powerful &amp; optimized code.</p>
							</div>
						</div>
					</div> -->
				<!-- Emphasize text -->
				
				<div class="container clearfix">

					<!-- Left line Heading -->
						<!-- <div class="title-block">
							<h1>This is <span>heading</span> h1</h1>
							<span>A short sub-text to define the heading</span>
						</div> -->
					<!-- Left line Heading -->
						


					<!-- Double border Heading -->
						<!-- <div class="fancy-title title-double-border">
							<h1>This is a <span>double-border</span> title</h1>
						</div> -->
					<!-- Double border Heading -->

					<!-- Single border Heading -->
						<!-- <div class="fancy-title title-border">
							<h1>This is a <span>single-border</span> title</h1>
						</div> -->
					<!-- Single border Heading -->


					<!-- Right align  Heading -->
						<!-- <div class="fancy-title title-border-color title-right">
							<h1>Right-aligned Title with <span>border-color</span></h1>
						</div> -->
					<!-- Right align  Heading -->

					<!-- Fancy underline Heading -->
						<!-- <div class="fancy-title title-bottom-border">
							<h1>Title with <span>colored</span> bottom-border</h1>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, iure, magni, perferendis veniam laborum esse optio vel praesentium consectetur ea ullam maxime? Eligendi, iste sequi asperiores perspiciatis nostrum nisi laborum.</p> -->
					<!-- Fancy underline Heading -->

					<!-- Center Heading -->
						<!-- <div class="fancy-title title-dotted-border title-center">
							<h1>Centered Title with <span>dotted</span> border</h1>
						</div> -->
					<!-- Center Heading -->
					
					<!-- Changing Heading -->
						<!-- <h2>
							<div class="text-rotater" data-separator="|" data-rotate="bounceIn" data-speed="2500">
								Super <span class="t-rotate color">Simple|Customizable|Flexible|Easy</span> Text Rotator with Style
							</div>
						</h2> -->
					<!-- Changing Heading -->
					
					<!-- Firstletter  Heading -->
						<!-- <h3>Dropcap &amp; Highlighted Text</h3>
						<p><span class="dropcap">L</span>orem ipsum dolor sit amet, <span class="highlight">consectetur adipisicing</span> elit. Harum, suscipit, quas velit nam quos quo ad veritatis placeat eos vitae culpa odit excepturi error maxime quidem perferendis unde iste ipsum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, quidem, quis, quas consequuntur officiis nemo vero neque numquam architecto voluptas natus soluta necessitatibus quos illum omnis debitis laborum. Voluptatum, porro, dolore, totam amet sit sunt ipsa quia deserunt nesciunt perspiciatis voluptate animi suscipit vitae quam cum molestiae doloribus libero quaerat.</p> -->
					<!-- Firstletter  Heading -->

				</div>

			</div>
		</section>
		
		<!-- #content end -->

		<!-- Footer
		============================================= -->
		
        
        <!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="../../js/jquery.js"></script>
	<script type="text/javascript" src="../../js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="../../js/functions.js"></script>

</body>
</html>