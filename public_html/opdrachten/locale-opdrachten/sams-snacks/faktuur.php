<?php

if(isset($_POST['submit'])){
    $emailsnacks = 'info@sam-snacks.nl';
    $naam = $_POST['voornaam'];
    $tussenvoegsel = $_POST['tussenvoegsel'];
    $achternaam = $_POST['achternaam'];
    $land = $_POST['land'];
    $straat = $_POST['straat'];
    $huisNummer = $_POST['huis-nummer'];
    $stad = $_POST['stad'];
    $postcode = $_POST['postcode'];
    $email = $_POST['email'];
    $telefoon = $_POST['telefoon'];
    $bankNummer = $_POST['bank-nummer'];


    $to = $email;
    $subject = "Sams snack order";
    $txt = "Greatings " . $naam . ' ' . $tussenvoegsel . ' ' . $achternaam . "\n" . 'We received your order. And we are going to ship it to: ' . "\n" . 'Country: ' . $land . "\n" . 'Street/house number: ' . $straat . ', ' . $huisNummer . "\n" . 'ZIP code/City: ' . $postcode . ', ' . $stad . "\n\n" . 'And we received the following information about you: ' . "\n" . 'Email: ' . $email . "\n" . 'Telephone: ' . $telefoon . 
    "\n" . 'Billing number: ' . $bankNummer . "\n\n" . "In the next day, we are going to check if all the information is correct. If everything is correct you will receive another email that your order was placed. If you still have not receved the email about your order in 3 days than you need to send an email to " . $emailsnacks . ".\n" . "Greetings from Sam snacks";
    $headers = "From: info@sam-snacks.nl" . "\r\n" .
    "CC: sam.boesjes@gmail.com";
    
    mail($to,$subject,$txt,$headers);
    }

    ?>  

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Sams Snacks</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">


	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-table.css">
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light ftco-navbar-light-2"
		id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html">Sams Snacks</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="shop.html" id="dropdown04" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">Shop</a>
						<div class="dropdown-menu" aria-labelledby="dropdown04">
							<a class="dropdown-item" href="productdetail-pagina.html">Productdetail pagina</a>
							<a class="dropdown-item" href="shop.html">Shop</a>
							<a class="dropdown-item" href="shop.html">Tao Kae Noi / KitKat</a>
							<a class="dropdown-item" href="shop2.html">Mochi / Puku Puku Tai / Kinoko No Yama</a>
							<a class="dropdown-item" href="shop3.html">Cheetos</a>
						</div>
					</li>
					<li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
					<li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
					<li class="nav-item cta cta-colored active"><a href="cart.html" class="nav-link"><span
								class="icon-shopping_cart active"></span>[2]</a></li>

				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->

	<div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<h1 class="mb-0 bread">My information</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Checkout</a></span> <span>My information</span></p>
				</div>
			</div>
		</div>
	</div>

    <table border="1">
        <tr class="kop">
            <td colspan="4">Your information</td>
        </tr>
        <tr class="blauw">
            <td class="clean">Full name:</td>
            <td><?php echo $naam ?></td>
            <td><?php echo $tussenvoegsel ?></td>
            <td><?php echo $achternaam ?></td>
        </tr>
        <tr class="blauw">
            <td class="clean">streed:</td>
            <td><?php echo $straat . " " .  $huisNummer ?></td>
            <td><?php echo $postcode . ", " . $stad ?></td>
            <td><?php echo $land ?></td>
        </tr>
        <tr class="blauw">
            <td class="clean">Telephone number:</td>
            <td colspan="3"><?php echo $telefoon ?></td>
        </tr>
        <tr class="blauw">
            <td class="clean">Email:</td>
            <td colspan="3"><?php echo $email ?></td>
        </tr>
        <tr class="blauw">
            <td class="clean">Billing number:</td>
            <td colspan="3"><?php echo $bankNummer ?></td>
        </tr>
        <tr class="kop">
            <td id="scores" colspan="4">This was all the information you filed in. Check your mail. The mail can be in your spam!</td>
        </tr>
    </table>

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-3 pb-3">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<h1 class="big">Products</h1>
					<h2 class="mb-4">Related Products</h2>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm col-md-6 col-lg ftco-animate">
					<div class="product">
						<a href="https://www.tjinstoko.eu/nl/tao-kae-noi-seaweed-snack-original-36g.html"
							class="img-prod"><img class="img-fluid" src="images/product-1.jpg" alt="No Photo">
							<span class="status">30%</span>
						</a>
						<div class="text py-3 px-3">
							<h3><a href="https://www.tjinstoko.eu/nl/tao-kae-noi-seaweed-snack-original-36g.html">Seaweed
									Snack Original, 32g</a></h3>
							<div class="d-flex">
								<div class="pricing">
									<p class="price"><span class="mr-2 price-dc">€2,40</span><span
											class="price-sale">€1,68</span></p>
								</div>
								<div class="rating">
									<p class="text-right">
										<span class="ion-ios-star-outline"></span>
										<span class="ion-ios-star-outline"></span>
										<span class="ion-ios-star-outline"></span>
										<span class="ion-ios-star-outline"></span>
										<span class="ion-ios-star-outline"></span>
									</p>
								</div>
							</div>
							<hr>
							<p class="bottom-area d-flex">
								<a href="https://www.tjinstoko.eu/nl/tao-kae-noi-seaweed-snack-original-36g.html"
									class="add-to-cart"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
								<a href="#" class="ml-auto"><span><i class="ion-ios-heart-empty"></i></span></a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm col-md-6 col-lg ftco-animate">
					<div class="product">
						<a href="https://www.tjinstoko.eu/nl/tao-kae-noi-crispy-seaweed-spicy-36g.html"
							class="img-prod"><img class="img-fluid" src="images/product-2.jpg" alt="No Photo"></a>
						<div class="text py-3 px-3">
							<h3><a href="https://www.tjinstoko.eu/nl/tao-kae-noi-crispy-seaweed-spicy-36g.html">Crispy
									Seaweed Spicy, 36g</a></h3>
							<div class="d-flex">
								<div class="pricing">
									<p class="price"><span>€2,25</span></p>
								</div>
								<div class="rating">
									<p class="text-right">
										<span class="ion-ios-star-outline"></span>
										<span class="ion-ios-star-outline"></span>
										<span class="ion-ios-star-outline"></span>
										<span class="ion-ios-star-outline"></span>
										<span class="ion-ios-star-outline"></span>
									</p>
								</div>
							</div>
							<hr>
							<p class="bottom-area d-flex">
								<a href="https://www.tjinstoko.eu/nl/tao-kae-noi-crispy-seaweed-spicy-36g.html"
									class="add-to-cart"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
								<a href="#" class="ml-auto"><span><i class="ion-ios-heart-empty"></i></span></a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm col-md-6 col-lg ftco-animate">
					<div class="product">
						<a href="https://www.tjinstoko.eu/nl/tao-kae-noi-tempura-seaweed-snack-40g.html"
							class="img-prod"><img class="img-fluid" src="images/product-3.jpg" alt="No Photo"></a>
						<div class="text py-3 px-3">
							<h3><a href="https://www.tjinstoko.eu/nl/tao-kae-noi-tempura-seaweed-snack-40g.html">Tempura
									Seaweed, 40g</a></h3>
							<div class="d-flex">
								<div class="pricing">
									<p class="price"><span>€1,75</span></p>
								</div>
								<div class="rating">
									<p class="text-right">
										<span class="ion-ios-star-outline"></span>
										<span class="ion-ios-star-outline"></span>
										<span class="ion-ios-star-outline"></span>
										<span class="ion-ios-star-outline"></span>
										<span class="ion-ios-star-outline"></span>
									</p>
								</div>
							</div>
							<hr>
							<p class="bottom-area d-flex">
								<a href="https://www.tjinstoko.eu/nl/tao-kae-noi-tempura-seaweed-snack-40g.html"
									class="add-to-cart"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
								<a href="#" class="ml-auto"><span><i class="ion-ios-heart-empty"></i></span></a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm col-md-6 col-lg ftco-animate">
					<div class="product">
						<a href="https://www.tjinstoko.eu/nl/tao-kae-noi-spicy-tempura-seaweed-snack-40g.html"
							class="img-prod"><img class="img-fluid" src="images/product-4.jpg" alt="No Photo"></a>
						<div class="text py-3 px-3">
							<h3><a href="https://www.tjinstoko.eu/nl/tao-kae-noi-spicy-tempura-seaweed-snack-40g.html">Tempura
									Seaweed Spicy, 40g</a></h3>
							<div class="d-flex">
								<div class="pricing">
									<p class="price"><span>€1,75</span></p>
								</div>
								<div class="rating">
									<p class="text-right">
										<span class="ion-ios-star-outline"></span>
										<span class="ion-ios-star-outline"></span>
										<span class="ion-ios-star-outline"></span>
										<span class="ion-ios-star-outline"></span>
										<span class="ion-ios-star-outline"></span>
									</p>
								</div>
							</div>
							<hr>
							<p class="bottom-area d-flex">
								<a href="https://www.tjinstoko.eu/nl/tao-kae-noi-spicy-tempura-seaweed-snack-40g.html"
									class="add-to-cart"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
								<a href="#" class="ml-auto"><span><i class="ion-ios-heart-empty"></i></span></a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section-parallax">
		<div class="parallax-img d-flex align-items-center">
			<div class="container">
				<div class="row d-flex justify-content-center py-5">
					<div class="col-md-7 text-center heading-section ftco-animate">
						<h1 class="big">Subscribe</h1>
						<h2>Subcribe to our Newsletter</h2>
						<div class="row d-flex justify-content-center mt-5">
							<div class="col-md-8">
								<form action="#" class="subscribe-form">
									<div class="form-group d-flex">
										<input type="text" class="form-control" placeholder="Enter email address">
										<input type="submit" value="Subscribe" class="submit px-3">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer class="ftco-footer bg-light ftco-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Sams Snacks</h2>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
							<li class="ftco-animate"><a href="https://twitter.com/Ham_Sam22"><span
										class="icon-twitter"></span></a>
							</li>
							<li class="ftco-animate"><a href="https://www.facebook.com/sam.boesjes"><span
										class="icon-facebook"></span></a></li>
							<li class="ftco-animate"><a href="https://www.instagram.com/sam.boesjes/"><span
										class="icon-instagram"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4 ml-md-5">
						<h2 class="ftco-heading-2">Menu</h2>
						<ul class="list-unstyled">
							<li><a href="shop.html" class="py-2 d-block">Shop</a></li>
							<li><a href="about.html" class="py-2 d-block">About</a></li>
							<li><a href="contact.html" class="py-2 d-block">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Help</h2>
						<div class="d-flex">
							<ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
								<li><a href="https://www.tjinstoko.eu/nl/service/shipping-returns/"
										class="py-2 d-block">Shipping Information</a></li>
								<li><a href="https://www.tjinstoko.eu/nl/service/shipping-returns/"
										class="py-2 d-block">Returns &amp; Exchange</a></li>
								<li><a href="https://www.tjinstoko.eu/nl/service/disclaimer/" class="py-2 d-block">Terms
										&amp; Conditions</a></li>
								<li><a href="https://www.tjinstoko.eu/nl/service/privacy-policy/"
										class="py-2 d-block">Privacy Policy</a></li>
							</ul>
							<ul class="list-unstyled">
								<li><a href="https://www.tjinstoko.eu/nl/service/disclaimer/"
										class="py-2 d-block">FAQs</a></li>
								<li><a href="contact.html" class="py-2 d-block">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Have a Questions?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon icon-map-marker"></span><span class="text">Koningin Wilhelminalaan
										7, 3527LA Utrecht</span></li>
								<li><a href="tel://0644290066"><span class="icon icon-phone"></span><span
											class="text">030 280 7077</span></a></li>
								<li><a href="mailto:info@sams-snacks.nl"><span class="icon icon-envelope"></span><span
											class="text">info@sams-snacks.nl</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">

					<p>
						| Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> |
					</p>
				</div>
			</div>
		</div>
	</footer>



	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" /></svg></div>


	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
	</script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>

	<script>
		$(document).ready(function () {

			var quantitiy = 0;
			$('.quantity-right-plus').click(function (e) {

				// Stop acting like a button
				e.preventDefault();
				// Get the field name
				var quantity = parseInt($('#quantity').val());

				// If is not undefined

				$('#quantity').val(quantity + 1);


				// Increment

			});

			$('.quantity-left-minus').click(function (e) {
				// Stop acting like a button
				e.preventDefault();
				// Get the field name
				var quantity = parseInt($('#quantity').val());

				// If is not undefined

				// Increment
				if (quantity > 0) {
					$('#quantity').val(quantity - 1);
				}
			});

		});
	</script>

</body>

</html>

