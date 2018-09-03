
		<div id="contactFoot">
			<div id="contact">
				<h2>Contact Us</h2>
				<p>Cabot Cruises</p>
				<a href="https://www.google.com/maps/dir/''/white+house+address/data=!4m5!4m4!1m0!1m2!1m1!1s0x89b7b7bcdecbb1df:0x715969d86d0b76bf?sa=X&ved=2ahUKEwiduOiKppjdAhXIc98KHU9mDFUQ9RcwIXoECAYQEQ">
					<p>1600 Pennsylvania Ave NW</p>
					<p>Washington, DC 20500</p>
				</a>
				<h2>Phone</h2>
				<a id="phone" href="tel:999-999-9999">999-999-9999</a>
				<h2>Hours of Operation</h2>
				<p>Monday-Friday 9am-4pm</p>
			</div>
			<div id="newsLetter">
				<h2>Newsletter</h2>
				<p>Subscribe to our email list and stay up-to-date with our hottest offers and latest specials.</p>
				<form>
					<input type="text" required placeholder="Email" name="email">
					<input type="submit" value="submit" name="submit">
				</form>
			</div>
			<div id="why">
				<h2>Why Cabot Cruises</h2>
				<p>Cabot Cruises is a travel agency providing the best cruise deals on our online travel website. We can help you
					with all inclusive vacaMons including discounted cruises.</p>
			</div>

		</div>

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
			<a href="#">Login</a>
			Login </p>
	</footer>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	    crossorigin="anonymous"></script>
	<script src="slick/slick.min.js"></script>
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
	<script src="js/main.js"></script>
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