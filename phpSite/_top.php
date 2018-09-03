<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>CABOT CRUISES: <?php echo $title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="slick/slick.css">
	<link rel="stylesheet" href="slick/slick-theme.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Alegreya:400,800" rel="stylesheet">
</head>

<body onresize="resize()">
	<header>
		<div class="head">
			<img src="img/logo100.png" alt="logo" srcset="img/logo100.png 1x, img/logo200.png 2x, img/logo300.png 3x," />
			<h1>Cabot Cruises</h1>
			<h2>Take A Trip On A Boat</h2>
			<a id="phone" href="tel:999-999-9999">999-999-9999</a>
		</div>
	</header>
	<nav class="clearfix">
		<div class="topnav" id="myTopnav">
			<i class="fa fa-bars" aria-hidden="true" onclick="test()"></i>
			<ul class="" id="thisNav">
				<li><a class="active" href="index.php">Home</a></li>
				<li><a href="cruise.php">Cruises</a></li>
				<li><a href="#">Agents</a>
					<ul class="subNav">
						<li><a href="agent1.php">Anne Currie</a><a href="agent2.php">Brooke Garnett</a><a href="agent3.php">Tom Marchant	</a></li>
					</ul>
				</li>
				<li><a href="book.php">Book</a></li>
			</ul>

			<div class="search-container">
				<input type="search" placeholder="Search..">
				<button type="submit"><i class="fa fa-search"></i></button>
			</div>

		</div>
	</nav>
	<main class="clearfix">