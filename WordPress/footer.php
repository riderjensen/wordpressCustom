		<div id="social">
			<div class="soc"><i class="fa fa-facebook-official" aria-hidden="true"></i></div>
			<div class="soc"><i class="fa fa-instagram" aria-hidden="true"></i></div>
			<div class="soc"><i class="fa fa-youtube" aria-hidden="true"></i></div>
			<div class="soc"><i class="fa fa-twitter" aria-hidden="true"></i></div>
			<div class="soc"><i class="fa fa-pinterest-p" aria-hidden="true"></i></div>

		</div>

	</main>
	<footer>
		<p>&copy; Rider Jensen Creations 2018 | <a href="http://www.riderjensen.com" target="_blank">riderejensen.com</a> |
			<a href="#">Login</a></p>
	</footer>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	    crossorigin="anonymous"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>
	<script>
		$(document).ready(function () {
			$('.mySlider').slick({
				autoplay: true,
				dots: true,
				arrows: false,
				cssEase: 'ease-out',
				speed: 2000,
				autoplaySpeed: 10000
			});
		});
	</script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "TravelAgency",
			"name": "Cabot Cruises",
			"description": "Cabot Cruises is a travel agency providing the best cruise deals on our online travel website.",
			"openingHours": "Mo-Fr 09:00-16:00",
			"telephone": "+19999999999",
			"faxNumber": "+19999999999",
			"address": {
				"@type": "PostalAddress",
				"streetAddress": "1600 Pennsylvania Ave NW",
				"addressLocality": "Washington",
				"addressRegion": "D.C."
			},
			"image": "http://riderjensen.com/dgm3740/template/img/logo100.png",
			"priceRange": "$500 to $4000"
		}
	</script>
</body>

</html>