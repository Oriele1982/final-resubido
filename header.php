<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php get_template_part('_includes/iOS', 'icons') ?> 
	
		
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900" rel="stylesheet"> 
	<!-- Main Styles -->
	<link rel="stylesheet" href="index.html">
	<link rel="stylesheet" href="about.html">
	<link rel="stylesheet" href="curriculum.html">
	<link rel="stylesheet" href="portfolio.html">
	<link rel="stylesheet" href="blog.html">
	<link rel="stylesheet" href="contact.html">
	<link rel="stylesheet" href="assets/css/responsive.css">
	
<?php wp_head() ?>	
</head>
<body>
	<header class="header_main">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container__color container-fluid ">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">O. N. O.</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      
		      
		      <ul class="menu_pages nav navbar-nav navbar-right">
		      	<li><a class="menu_item" href="index.html">Index</a></li>
		        <li><a class="menu_item" href="about.html">About me</a></li>
		        <li><a class="menu_item" href="curriculum.html">Currículum</a></li>
		        <li><a class="menu_item" href="portfolio.html">Portfolio</a></li>     
		        <li><a class="menu_item" href="blog.html">Blog</a></li>
		        <li><a class="menu_item" href="contact.html">Contact</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</header>