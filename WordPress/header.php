<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>CABOT CRUISES <?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<?php remove_filter( 'the_content', 'wpautop' ); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css">
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Alegreya:400,800" rel="stylesheet">
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
	<header>
		<div class="head">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo100.png" alt="logo" srcset="<?php echo get_template_directory_uri(); ?>/img/logo100.png 1x, <?php echo get_template_directory_uri(); ?>/img/logo200.png 2x, <?php echo get_template_directory_uri(); ?>/img/logo300.png 3x," />
			<h1>Cabot Cruises</h1>
			<h2>Take A Trip On A Boat</h2>
			<a id="phone" href="tel:999-999-9999">999-999-9999</a>
		</div>
	</header>
	



<nav class="clearfix">
        <button id="hamburgerBtn"></button>
		<ul id="primaryNav">
			<li><a href="http://riderjensen.com/dgm3740/WordPress/">Home</a></li>
			<li class="parent"><a href="#id">Agents</a>
				<ul>
					<li><a href="http://riderjensen.com/dgm3740/WordPress/agent-anne-currie/">Anne Currie</a></li>
					<li><a href="http://riderjensen.com/dgm3740/WordPress/agent-brooke-garnett/">Brooke Garnett</a></li>
					<li><a href="http://riderjensen.com/dgm3740/WordPress/agent-tom-marchant/">Tom Marchant</a></li>
				</ul>
			</li>
			<li><a href="http://riderjensen.com/dgm3740/WordPress/cruises/">Cruises</a>
			<li class="parent"><a href="#id">About</a>
            <ul>
					<li><a href="http://riderjensen.com/dgm3740/WordPress/about-us/">About Us</a></li>
					<li><a href="http://riderjensen.com/dgm3740/WordPress/gallery/">Gallery</a></li>
					<li><a href="http://riderjensen.com/dgm3740/WordPress/location/">Location</a></li>
				</ul></li>
			<li><a href="http://riderjensen.com/dgm3740/WordPress/book-a-cruise/">Book</a></li>
			<li><a href="http://riderjensen.com/dgm3740/WordPress/ournews/">News</a></li>
			<div class="search-container">
				<input type="search" placeholder="Search..">
				<button type="submit"><i class="fa fa-search"></i></button>
			</div>
		</ul>
		
        </nav>
	<main class="clearfix">

