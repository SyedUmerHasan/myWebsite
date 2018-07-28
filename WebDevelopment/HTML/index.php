<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

<?php 

$maincategory = "WebDevelopment";
$subcategory = "HTML";
$currentpage = "HTML Tutorials";
$tagline = "The path of becoming Front-End Developer";
$previouspage = "";
$nextpage = "html_introduction.php";
$titlepage = "HTML Tutorials | Code For Geeks | Hub of Developers | Web Development | Software Development ";
$author = "Code For Geeks";
$pagedescription = "Description of my page";
    /**
     * Enter Description of the page
     */

function mycode($category,$subcategory,$filename)
{
	echo '<div class="heading-block">
			<h4>Try Code For Geeks Web Editor</h4>
		</div>
		<pre class="prettyprint lang-html"><xmp>'.file_get_contents("Codes/".$filename).'</xmp></pre>
	<a href="../../WebEditor.php?filename='.$category.'/'.$subcategory.'/Codes/'.$filename.'"  target="_blank" class="btn btn-default btn-lg btn-block button button-border button-rounded button-fill fill-from-bottom button-black" ><span>Try this code</span></a>';
}
?>
<style>
code {
	padding: 0px;
	font-size: 90%;
	color: #c7254e;
	background-color: #f9f2f4;
	border-radius: 0px;
}
xmp {
    padding-left: 0px;
}
</style>

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




	<!-- Here goes your colors.css
	============================================= -->
	<link rel="stylesheet" href="../../css/colors.css" type="text/css" />
	
	<link rel="stylesheet" href="../../css/custom.css" type="text/css" />
	
	

    <!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta charset="utf-8">
    <meta name="description" content="<?php $pagedescription; ?>">
    <meta name="robots" content="index, follow">
	<meta name="author" content="<?php $author; ?>">
	<link rel="shortcut icon" href="../../images/codeforgeeks.png" />	
    <!-- Document Title
	============================================= -->
	<title><?php echo $titlepage; ?></title>


	<!-- Code Prettifier
	 ============================================ -->
	<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
	<style>
	/*! Color themes for Google Code Prettify | MIT License | github.com/jmblog/color-themes-for-google-code-prettify */
.prettyprint{background:#222;font-family:Menlo,Bitstream Vera Sans Mono,DejaVu Sans Mono,Monaco,Consolas,monospace;border:0!important;}.pln{color:#fff}ol.linenums{margin-top:0;margin-bottom:0;color:#666}li.L0,li.L1,li.L2,li.L3,li.L4,li.L5,li.L6,li.L7,li.L8,li.L9{pa0dding-left:1em;background-color:#000;list-style-type:decimal}@media screen{.str{color:#FD971F}.kwd{color:#66D9EF}.com{color:#93c}.typ{color:#458}.lit{color:#458}.pun{color:#fff}.opn{color:#fff}.clo{color:#fff}.tag{color:#F92672}.atn{color:#A6E22E}.atv{color:#FD971F}.dec{color:#fff}.var{color:#fff}.fun{color:#fc0}}	
</style>
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
				<h1><?php echo $currentpage; ?></h1>
				<span><?php echo $tagline; ?></span>
				<ol class="breadcrumb">
					<li><a href="../../index.php">Home</a></li>
					<li><a href="../../<?php echo $maincategory; ?>.php"><?php echo $maincategory; ?></a></li>
					<li class="active"><?php echo $currentpage; ?></li>
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
						<?php
						mycode("WebDevelopment","HTML","gettingstarted.php");
						?>
						<div class="divider divider-short divider-center"><i class="icon-circle"></i></div>

						<div class="heading-block">
							<h2>Is it hard to  learn HTML?</h2>
							<span>No, certainly not. You dont need to be a programmer to write HTML codes</span>
						</div>
							<span>HTML is the basic of creating web pages and many books teaches HTML and CSS. to make it easier we have done some different from traditional template.
							and we put our <em><a href="/mytemplate/WebEditor/"  target="_blank"  >Code For Geeks Web Editor</a></em> and to implement using our web that will make some difference and easily implementable.
							The truth is, learning html is not a hard process, Infact it is easy to write HTML codes, you certainly dont have to be a programmer or a developer to write codes.</span>
							<div class="table-responsive">
							<table class="table table-bordered table-striped">
							  <colgroup>
								<col class="col-xs-2">
								<col class="col-xs-7">
							  </colgroup>
							  <thead>
								<tr>
								  <th>HTML tags</th>
								  <th>Description</th>
								</tr>
							  </thead>
							  <tbody>
								<tr>
								  <td>
									<code><xmp><!DOCTYPE html></xmp></code>
								  </td>
								  <td>Defines this document to be HTML5</td>
								</tr>
								<tr>
								  <td>
									<code><xmp><html></xmp></code>
								  </td>
								  <td>Is the root element of the HTML page</td>
								</tr>
								<tr>
								  <td>
									<code><xmp><head></xmp></code>
								  </td>
								  <td>Contains meta tag and scripts tag and other information about the document</td>
								</tr>
								<tr>
								  <td>
									<code><xmp><body></xmp></code>
								  </td>
								  <td>Contains the visible page content of the document</td>
								</tr>
								<tr>
								  <td>
									<code><xmp><title></xmp></code>
								  </td>
								  <td>Contains the title of the page</td>
								</tr>
							  </tbody>
							</table>
						  </div>						

							
								<div class="col-md-6">
									<img src="../../images/HTML/tags_attribute.jpg" alt="HTML Tags and attributes" width="100%">
								</div>
								<div class="col-md-6">
									<img src="../../images/HTML/tags_attribute.jpg" alt="HTML Tags and attributes" width="100%">
								</div>

								<a href="http://www.codeforgeeks.com/WebEditor/" data-lightbox="iframe">Your Website in a Lightbox</a>
							<a href="link-to-lightbox-image.jpg" data-lightbox="image"><img src="../../images/HTML/tags_attribute.jpg" alt="Lightbox Image"></a>
							<a href="#" class="btn btn-info" data-notify-type="info" data-notify-position="top-full-width" data-notify-msg="<i class=icon-info-sign></i> Welcome to Canvas Demo!" onclick="SEMICOLON.widget.notifications(this); return false;">Show Info</a>
					</div>
				</div>

					<div class="container">
						<ul class="pager">
							<li class="previous"><a href="<?php echo $previouspage; ?>" class="disabled">← Older</a></li>
							<li class="next"><a href="<?php echo $nextpage; ?>">Newer →</a></li>
						</ul>
					</div>
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