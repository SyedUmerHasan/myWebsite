<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

<?php 

$maincategory = "WebDevelopment";
$subcategory = "HTML";
$currentpage = "HTML Introduction";
$tagline = "The path of becoming Front-End Developer";
$previouspage = "index.php";
$nextpage = "html_gettingstarted.php";
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
						<ul class="pager">
							<li class="previous"><a href="<?php echo $previouspage; ?>">← Older</a></li>
							<li class="next"><a href="<?php echo $nextpage; ?>">Newer →</a></li>
						</ul>
					</div>

					<div class="container">

						<div class="heading-block ">
							<h2>Introduction to HTML and XHTML</h2>
							<span>HTML is the basics of all web technologies,</span>
                        </div>
                        <p>Markup languages are present everywhere in this computing world either it could be XML, HTML or any other language. But you might have not realize it,
                                word documents are consisted of Markup language indicating the structure of the document. similarly in browsers uses Hypertext Markup Language (HTML) 
                                and word editors uses Extensible Markup Language(XML)
                        </p>
                        <div class="fancy-title title-border">
                            <h2>First look of <span>HTML</span> &amp; <span>XHTML</span></h2>
                        </div>
                        <p>
                           <b>HTML</b> &amp; <b>XHTML</b> are one of those languages in which web pages are written. <b>HTML</b> is <span>SGML</span> based language. While XHTML is XML based. They are quite similar while
                           the main difference between these two is that <b>XHTML</b> syntax is strict as compared to HTML and doesnt allow user to write tags in capital, name attribute in XHTML is not valid, only id is allowed, and
                           nested tags and element prohibition are major strict syntax rules that makes XHTML difficult. Below is the doctype declaration of <a>HTML</a> and <a>XHTML</a>. which is used to declare the document type of the Web Document.
                       </p>
<pre class="prettyprint lang-htm"><xmp><!-- XHTML DOCTYPE Declaration -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<!-- HTML DOCTYPE Declaration -->
<!DOCTYPE html></xmp></pre>

                       <div class="heading-block ">
                            <h3>XHTML</h3>
                            <span>Strict version of HTML that is a child of XML version</span>
                        </div>
                       
                        <p>
                            Since as it was metioned that XHTML is strict in so many ways like tags of XHTML are not Case Sensitive and if tags are not closed then it will be invalid XHTML syntax.
                            similarly attributes in XHTML and their minimization is very strict. 
                        </p>
<pre class="prettyprint lang-htm"><xmp>
            Tag Capitalization

<!-- This is invalid in XHTML -->
<A Href="/xhtml/xhtml_tutorial.html">XHTML Tutorial</A>

<!-- Correct XHTML way of writing this is as follows -->
<a href="/xhtml/xhtml_tutorial.html">XHTML Tutorial</a>

            Closing Tags

<!-- This is invalid in XHTML -->
<p>This paragraph is not written according to XHTML syntax.

<!-- This is also invalid in XHTML -->
<img src="/images/xhtml.gif" >

<!-- This is valid in XHTML -->
<p>This paragraph is not written according to XHTML syntax.</p>

<!-- This is also valid now -->
<img src="/images/xhtml.gif" />

            Attributes Quotes

<!-- This is invalid in XHTML -->
<img src="/images/xhtml.gif" width=250 height=50 />

<!-- Correct XHTML way of writing this is as follows -->
<img src="/images/xhtml.gif" width="250" height="50" />

            Attribute Minimization

<!-- This is invalid in XHTML -->
<option selected>

<!-- Correct XHTML way of writing this is as follows -->
<option selected="selected">
</xmp></pre>


                        <!-- <div class="panel panel-default">

							<div class="panel-heading fancy-title">
                                    <h1>First look of <span>HTML</span></h1>
                                    <h5>HTML is the standard mark up language for creating Web Pages</h5>
                                </div>
							<div class="panel-body">
                                 <p></p>
							</div>

							<ul class="list-group">
								<li class="list-group-item">Cras justo odio</li>
								<li class="list-group-item">Dapibus ac facilisis in</li>
								<li class="list-group-item">Morbi leo risus</li>
								<li class="list-group-item">Porta ac consectetur ac</li>
								<li class="list-group-item">Vestibulum at eros</li>
							</ul>
                        </div> -->
                        <div class="heading-block ">
                            <h3>HTML</h3>
                            <span>Application of Standard Generalized Markup Language (SGML). </span>
                        </div>
                        <p>
                            HTML is the most widely used Markup language that is used to design web pages. HTML elements are essention building block of the web page and these HTML elements are represented by tags.
                            HTML tags tells us about whether it is heading, paragraph, table and so on. Moreover, Browser does not display HTML tags, it just use html tags to render it in the web page.
                        </p>
<pre class="prettyprint lang-htm"><xmp><!-- HTML DOCTYPE Declaration -->
<!DOCTYPE html></xmp></pre>

                        
                       <div class="fancy-title title-border">
                            <h2>Page Structures</h2>
                        </div>
						<p>
							HTML page structure is something like this, there would be a main HTML tag which have a head and a body tag inside it, while head tag contains the description of the web page
							while body tag contains the content of the web page 
						</p>

                        <img src="../../images/html/html_layout.jpg" width="800px" style="margin-left:auto;" alt="">
                        <div class="title-block">
                            <b>
								<span>NOTE: The content of whole page is to be written in <a>body</a> tag</span>
							</b>
                        </div>


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