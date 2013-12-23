<?php
require 'functions/big_query.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $title=website('title'); ?></title>
<meta name="description" content="website description" />
<meta name="keywords" content="website keywords, website keywords" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/webclinic_homenew.css" />
<!-- modernizr enables HTML5 elements and feature detects -->
<script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
<script type="text/javascript" src="js/jscolor.js"></script>
<script type="text/javascript" src="js/jquery-1.5.js"></script>
<script type="text/javascript" src="js/drpersonalsite.js"></script>
</head>
<body>
<div id="main">
<header>
<div id="logo">
<div id="logo_text"><!-- class="logo_colour", allows you to change the colour of the text -->
<h1><a href="index.php"><span class="logo_colour"><?php echo $title=website('name'); ?></span></a></h1>
<h2><?php echo $title=website('tagline'); ?></h2>
</div>
</div>
<nav>
<div id="menu_container">
<ul class="sf-menu" id="nav">
	<li><a href="index.php">Home</a></li>
	<li><a href="pro.php">profile</a></li>
	<li><a href="article.php">Article</a></li>
	<li><a href="ask.php">Ask</a></li>
	<li><a href="gallery.php">Gallery</a></li>
	<li><a href="services.php">Services</a></li>
        <li><a href="packages.php">Packages</a></li>
        <li><a href="explore.php">Explore</a></li>
	<li><a href="feedback.php">Give Feedback</a></li>
	<li><a href="apo.php">Appointments</a></li>
	<li><a href="contact.php">Contact Us</a></li>
</ul>
<div class="cls"></div>
</div>

</nav> 
</header>