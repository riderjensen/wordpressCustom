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

<body onresize="resize()">
	<header>
		<div class="head">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo100.png" alt="logo" srcset="<?php echo get_template_directory_uri(); ?>/img/logo100.png 1x, <?php echo get_template_directory_uri(); ?>/img/logo200.png 2x, <?php echo get_template_directory_uri(); ?>/img/logo300.png 3x," />
			<h1>Cabot Cruises</h1>
			<h2>Take A Trip On A Boat</h2>
			<a id="phone" href="tel:999-999-9999">999-999-9999</a>
		</div>
	</header>
	
	<nav class="clearfix">
	<div class="topnav" id="myTopnav">
			<i class="fa fa-bars" aria-hidden="true" onclick="test()"></i>
			<ul class="hidden" id="thisNav">
				<li><a class="notActive" href="http://riderjensen.com/dgm3740/WordPress/">Home</a></li>
				<li><a href="http://riderjensen.com/dgm3740/WordPress/cruises/">Cruises</a></li>
				<li class="dropDown"><a href="#"  style="    background: tomato;
    background: -moz-linear-gradient(top, tomato 0%, #e02200 100%);
    background: -webkit-linear-gradient(top, tomato 0%, #e02200 100%);
    background: linear-gradient(to bottom, tomato 0%, #e02200 100%);">Agents</a>
					<ul class="subNav">
						<li><a href="http://riderjensen.com/dgm3740/WordPress/agent-anne-currie/">Anne Currie</a><a href="http://riderjensen.com/dgm3740/WordPress/agent-brooke-garnett/">Brooke Garnett</a><a href="http://riderjensen.com/dgm3740/WordPress/agent-tom-marchant/">Tom Marchant</a></li>
					</ul>
				</li>
				<li><a href="http://riderjensen.com/dgm3740/WordPress/book-a-cruise/">Book</a></li>
				<li></li>
								<li class="dropDown"><a href="#"  style="    background: tomato;
    background: -moz-linear-gradient(top, tomato 0%, #e02200 100%);
    background: -webkit-linear-gradient(top, tomato 0%, #e02200 100%);
    background: linear-gradient(to bottom, tomato 0%, #e02200 100%);">About</a>
					<ul class="subNav">
						<li><a href="http://riderjensen.com/dgm3740/WordPress/about-us/">About Us</a><a href="http://riderjensen.com/dgm3740/WordPress/gallery/">Gallery</a><a href="http://riderjensen.com/dgm3740/WordPress/location/">Location</a></li>
					</ul>
				</li>
				<li><a href="http://riderjensen.com/dgm3740/WordPress/ournews/">News</a></li>
			</ul>

			<div class="search-container">
				<input type="search" placeholder="Search..">
				<button type="submit"><i class="fa fa-search"></i></button>
			</div>

		</div>
	</nav>
	<main class="clearfix">

