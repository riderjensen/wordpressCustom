<?php
$title = 'Home';
include '_top.php';
?>
	
		<div class="mySlider lead">
			<picture>
				<source srcset="img/1-1200.jpg" media="(min-width: 29.25rem)">
				<img src="img/1-350.jpg" alt="">
			</picture>

			<picture>
				<source srcset="img/2-1200.jpg" media="(min-width: 29.25rem)">
				<img src="img/2-350.jpg" alt="">
			</picture>
			<picture>
				<source srcset="img/3-1200.jpg" media="(min-width: 29.25rem)">
				<img src="img/3-350.jpg" alt="">
			</picture>
			<picture>
				<source srcset="img/4-1200.jpg" media="(min-width: 29.25rem)">
				<img src="img/4-350.jpg" alt="">
			</picture>
		</div> <!-- End Slide -->

		<h2>Recent Blog Articles</h2>
		<div id="blog-container">
			<div class="teaser">
				<a href="#">
					<img src="img/hotel.jpg" alt="hotel">
					<span>Top 10 Best Hotel Rooms</span>
					<p>Date</p>
				</a>
			</div>

			<div class="teaser">
				<a href="#">
					<img src="img/rest.jpg" alt="restaurant">
					<span>7 Places You Cant Miss Eating At</span>
					<p>Date</p>
				</a>
			</div>

			<div class="teaser">
				<a href="#">
					<img src="img/see.jpg" alt="city center">
					<span>13 Sites You Wont Believe</span>
					<p>Date</p>
				</a>
			</div>

			<div class="teaser">
				<a href="#">
					<img src="img/do.jpg" alt="festival">
					<span>31 Incredible Sites</span>
					<p>Date</p>
				</a>
			</div>
		</div>
		<?php

include '_bottom.php';
?>