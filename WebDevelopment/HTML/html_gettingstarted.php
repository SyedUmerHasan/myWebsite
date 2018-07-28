<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

<?php 

$maincategory = "WebDevelopment";
$subcategory = "HTML";
$currentpage = "HTML Getting Started";
$tagline = "The path of becoming Front-End Developer";
$previouspage = "html_introduction.php";
$nextpage = "#";
$titlepage = "HTML | Code For Geeks | Hub of Developers | Web Development | Software Development ";
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
							<h2>HTML Editors</h2>
							<span>Which HTML editor should we use?</span>
						</div>

						<p>
							HTML can be created and modified using HTML Editors, you can use 
							<a href="/mytemplate/WebEditor/">Code For Geeks Code Editor</a> 
							else you can also use word editors, But we recommend for newbies use <b>Notepad(windows)</b> or <b>TextEdit(Mac)</b> or <b>Gedit(Ubuntu)</b>
						</p>
						<h3>Step 1:</h3>

						<p>
							<div class="title-block">
								<h3>For Windows Users</h3>
								<span>
									<h4>windows 10 and later</h4>
									Open the destop and chick on <b>start screen</b> and type <b>Notepad</b>, then just open it.
									<center>OR</center>
									<h4><b>Start</b> > <b>Programs</b> > <b>Accessories</b> > <b>Notepad</b></h4>
								</span>

							</div>
						</p>

						<p>
							<div class="title-block">
								<h3>For Mac Users</h3>
								<span>
									<h4><b>Finder</b> > <b>Applications</b> > <b>TextEdit</b></h4>
								</span>

							</div>
						</p>
						<p>
							<div class="title-block">
								<h3>For ubuntu Users</h3>
								<span>
									<div>
										Open the terminal and follow these steps: 
									</div>
									<h4>cat filename.html </h4>
									<h4>gedit filename.html</h4>
								</span>
							</div>
						</p>

						<h3>Step 2:</h3>
						<p>Copy paste this code to respective files</p>
<pre class="prettyprint lang-htm"><xmp><!-- HTML DOCTYPE Declaration -->
<!DOCTYPE html>
<html>
<head>
	<title>Page Title</title>
</head>
<body>
	<h1>Congratulations you have just created your first HTML page</h1>
</body>
</html></xmp></pre>

						<h3>Step 3:</h3>
						<div class="title-block">
							<span>
								<b>
									Save this respective file with <code>.html</code> or <code>.htm</code> file extension and set Encoding to be UTF-8
								</b>
							</span>
						</div>

						<h3>Step 4:</h3>
						<div class="title-block">
							<span>
								<b>
									The last step is this to open that HTML using any browser, the result will look like this.
								</b>
							</span>
						</div>
							<div style="border: 4px solid  black; padding :10px;">
								<h1>Congratulations you have just created your first HTML page</h1>
							</div>
						
						<div class="divider divider-short divider-center"><i class="icon-circle"></i></div>

						<h2><a href="/mytemplate/WebEditor/">Code For Geeks Code Editor</a></h2>
						<p>
								We as a community for web developers, we have created a Code Editor for learners, in which you can edit your code and view your result in your browser.
								It is something perfect that can make your code run and easily editable:
<?php
mycode("WebDevelopment","HTML","gettingstarted.php");
?>
						</p>

					</div>
				</div>

					<div class="container">
						<ul class="pager">
							<li class="previous"><a href="<?php echo $previouspage; ?>">← Older</a></li>
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