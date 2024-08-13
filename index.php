<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Foogra - Discover & Book the best restaurants at the best price">
	<meta name="author" content="Ansonika">
	<title>The Wow Destination</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://md-aqil.github.io/images/swiper.min.css">

	<!-- GOOGLE WEB FONT -->
	<link rel="dns-prefetch" href="https://fonts.gstatic.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="anonymous">
	<link rel="preload" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;display=swap"
		as="fetch" crossorigin="anonymous">
	<script type="text/javascript">
		!function (e, n, t) { "use strict"; var o = "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;display=swap", r = "__3perf_googleFonts_c2536"; function c(e) { (n.head || n.body).appendChild(e) } function a() { var e = n.createElement("link"); e.href = o, e.rel = "stylesheet", c(e) } function f(e) { if (!n.getElementById(r)) { var t = n.createElement("style"); t.id = r, c(t) } n.getElementById(r).innerHTML = e } e.FontFace && e.FontFace.prototype.hasOwnProperty("display") ? (t[r] && f(t[r]), fetch(o).then(function (e) { return e.text() }).then(function (e) { return e.replace(/@font-face {/g, "@font-face{font-display:swap;") }).then(function (e) { return t[r] = e }).then(f).catch(a)) : a() }(window, document, localStorage);
	</script>

	<link rel="preload" as="image" href="img/home_section_1.jpg">

	<!-- BASE CSS -->
	<link rel="preload" href="css/bootstrap.min.css" as="style">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
	<!-- or -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="preload" href="css/style.css" as="style">
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link href="css/style.css" rel="stylesheet">

	<!-- SPECIFIC CSS -->
	<link href="css/home.css" rel="stylesheet">

	<!-- ALTERNATIVE COLORS CSS -->
	<link href="#" id="colors" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>

	<header class="header clearfix element_to_stick">
		<div class="container">
			<div id="logo">
				<a href="index.html">
					<img class="logo-png" src="img/logo/logo.png" alt="" style="
	height: 22px;
	margin-top: 7px;
">
				</a>
			</div>
			<!-- /top_menu -->
			<a href="#0" class="open_close">
				<i class="icon_menu" style="
	color: black;
"></i><span>Menu</span>
			</a>
			<nav class="main-menu">
				<div id="header_menu">
					<a href="#0" class="open_close">
						<i class="icon_close"></i><span>Menu</span>
					</a>
					<a href="index.html"><img src="img/logo/White the wow.png" height="25" alt=""></a>
				</div>
				<ul>
					<li class="submenu">
						<a href="#0" class="show-submenu">Home</a>
					</li>
					<li class="submenu">
						<a href="#0" class="show-submenu">Gallery</a>
					</li>
					<li class="submenu">
						<a href="#0" class="show-submenu">Cart</a>
					</li>
					<li class="submenu">
						<a href="#0" class="show-submenu">Login</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- /header -->

	<main>
		<div class="hero_single version_2">
			<div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-9 col-lg-10 col-md-8">
							<h1>Discover &amp; Book</h1>
							<p>The best restaurants at the best price</p>
							<form method="post" action="grid-listing-filterscol.html">
								<div class="row g-0 custom-search-input">
									<div class="col-lg-3">
										<div class="form-group">
											<input class="form-control" type="text" placeholder="Search Now">
											<i class="icon_search"></i>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="form-group">
											<input class="form-control no_border_r" type="text" placeholder="Address">
											<i class="icon_pin_alt"></i>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<input id="date-input" class="form-control" type="text" placeholder="Date">
											<i class="icon_calendar"></i>
										</div>
									</div>
									<div class="col-lg-2">
										<input type="submit" value="Search">
									</div>
								</div>
								<!-- /row -->
							</form>
						</div>
					</div>
					<!-- /row -->
				</div>
			</div>
		</div>
		<!-- /hero_single -->

		<div class="bg_gray">
			<div class="container margin_60_40">
				<div class="main_title center">
					<span><em></em></span>
					<h2>Popular Categories</h2>
					<!-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p> -->
				</div>
				<!-- /main_title -->
				<div class="owl-carousel owl-theme categories_carousel">
					<div class="item">
						<a href="birthday.php">
							<!-- <span>98</span> -->
							<i class="fa-solid fa-cake-candles" style="
	margin-bottom: 35px;
"></i>
							<h3>Birthday</h3>
							<!-- <small>Avg price $40</small> -->
						</a>
					</div>
					<div class="item">
						<a href="#0">
							<!-- <span>87</span> -->
							<i class='bx bxs-party' style="
	margin-bottom: 35px;
"></i>
							<h3>Anniversary</h3>
							<!-- <small>Avg price $50</small> -->
						</a>
					</div>
					<div class="item">
						<a href="#0">
							<!-- <span>96</span> -->
							<i class='bx bx-male-female' style="
	margin-bottom: 35px;
"></i>
							<h3>Wedding</h3>
							<!-- <small>Avg price $55</small> -->
						</a>
					</div>
					<div class="item">
						<a href="#0">
							<!-- <span>78</span> -->
							<i class="fa-solid fa-ring" style="
	margin-bottom: 35px;
"></i>
							<h3>Engagement</h3>
							<!-- <small>Avg price $40</small> -->
						</a>
					</div>
					<div class="item">
						<a href="#0">
							<!-- <span>65</span> -->
							<i class="fa-solid fa-martini-glass-citrus" style="
	margin-bottom: 35px;
"></i>
							<h3>Date Night</h3>
							<!-- <small>Avg price $60</small> -->
						</a>
					</div>
					<div class="item">
						<a href="#0">
							<!-- <span>65</span> -->
							<i class="fa-solid fa-baby" style="
	margin-bottom: 35px;
"></i>
							<h3>Baby Shower</h3>
							<!-- <small>Avg price $40</small> -->
						</a>
					</div>
					<div class="item">
						<a href="#0">
							<!-- <span>65</span> -->
							<i class="fa-brands fa-slack" style="margin-bottom: 34px;"></i>
							<h3>Custome Events</h3>
							<!-- <small>Avg price $35</small> -->
						</a>
					</div>
				</div>
				<!-- /carousel -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_gray -->
		<div class="bg_gray">
			<div class="container margin_60_40">
				<div class="main_title center">
					<span><em></em></span>
					<h2>How it Works? </h2>
					<p>Watch It Now
					</p>
				</div>

				<div class="row">
					<div class="col-lg-4 col-md-6">
						<a class="box_topic" href="#0">
							<span><img style="height: 90px; width: 90px; margin-bottom: 14px;" src="img/icon/search.png"
									alt=""></span>
							<h3>Browse Venues</h3>
							<p>Check out the best suited Venues, compare photos, special offers and function packages.
							</p>
						</a>
					</div>
					<div class="col-lg-4 col-md-6">
						<a class="box_topic" href="#0">
							<img style="height: 90px; width: 90px; margin-bottom: 14px;" src="img/icon/rupee.webp"
								alt="">
							<h3>Request Quotes</h3>
							<p>Get custom quotes of your short-listed Venues at the click of GET FREE QUOTES button.
							</p>
						</a>
					</div>
					<div class="col-lg-4 col-md-6">
						<a class="box_topic" href="#0">
							<img style="height: 90px; width: 90px; margin-bottom: 14px;" src="img/icon/calender.png"
								alt="">
							<h3>Book a Venue</h3>
							<p>Select and Book the perfect venue in no time at all. Time is money, save both.
							</p>
						</a>
					</div>
				</div>
			</div>
			<!-- /container -->
		</div>
		<div class="container margin_60_40">
			<div class="main_title">
				<span><em></em></span>
				<h2>Popular Hotels</h2>
				<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
				<a href="#0">View All</a>
			</div>

			<div class="owl-carousel owl-theme carousel_4">
				<div class="item">
					<div class="strip">
						<figure>
							<span class="ribbon off">-30%</span>
							<img src="img/lazy-placeholder.png" data-src="img/detail_gallery/detail_1.jpg"
								class="owl-lazy" alt="">
							<a href="detail-restaurant.html" class="strip_info">
								<small>AC</small>
								<div class="item_title">
									<h3>Flagship Sai Seva Lodging</h3>
									<small>Near Muktidham Mandar, Bytco Point</small>
								</div>
							</a>
						</figure>
						<ul>
							<li><span class="loc_open">₹ 870</span></li>
							<li>
								<button class="add_to_cart">Add to Cart</button>
							</li>
						</ul>
					</div>
				</div>
				<div class="item">
					<div class="strip">
						<figure>
							<span class="ribbon off">-30%</span>
							<img src="img/lazy-placeholder.png"
								data-src="https://images.oyoroomscdn.com/uploads/hotel_image/227215/large/ylpfdfgclnka.jpg"
								class="owl-lazy" alt="">
							<a href="detail-restaurant.html" class="strip_info">
								<small>AC</small>
								<div class="item_title">
									<h3>Flagship Sai Seva Lodging</h3>
									<small>Near Muktidham Mandar, Bytco Point</small>
								</div>
							</a>
						</figure>
						<ul>
							<li><span class="loc_open">₹ 870</span></li>
							<li>
								<button class="add_to_cart">Add to Cart</button>
							</li>
						</ul>
					</div>
				</div>
				<div class="item">
					<div class="strip">
						<figure>
							<span class="ribbon off">-30%</span>
							<img src="img/lazy-placeholder.png"
								data-src="https://images.oyoroomscdn.com/uploads/hotel_image/108633/large/a0993eb13ef180d5.jpg"
								class="owl-lazy" alt="">
							<a href="detail-restaurant.html" class="strip_info">
								<small>AC</small>
								<div class="item_title">
									<h3>Flagship Sai Seva Lodging</h3>
									<small>Near Muktidham Mandar, Bytco Point</small>
								</div>
							</a>
						</figure>
						<ul>
							<li><span class="loc_open">₹ 870</span></li>
							<li>
								<button class="add_to_cart">Add to Cart</button>
							</li>
						</ul>
					</div>
				</div>
				<div class="item">
					<div class="strip">
						<figure>
							<span class="ribbon off">-30%</span>
							<img src="img/lazy-placeholder.png"
								data-src="https://images.oyoroomscdn.com/uploads/hotel_image/53945/large/nwtwtctgwpww.jpg"
								class="owl-lazy" alt="">
							<a href="detail-restaurant.html" class="strip_info">
								<small>AC</small>
								<div class="item_title">
									<h3>Flagship Sai Seva Lodging</h3>
									<small>Near Muktidham Mandar, Bytco Point</small>
								</div>
							</a>
						</figure>
						<ul>
							<li><span class="loc_open">₹ 870</span></li>
							<li>
								<button class="add_to_cart">Add to Cart</button>
							</li>
						</ul>
					</div>
				</div>
				<div class="item">
					<div class="strip">
						<figure>
							<span class="ribbon off">-30%</span>
							<img src="img/lazy-placeholder.png"
								data-src="https://images.oyoroomscdn.com/uploads/hotel_image/17699/large/80ce165d93b0b2bf.jpg"
								class="owl-lazy" alt="">
							<a href="detail-restaurant.html" class="strip_info">
								<small>AC</small>
								<div class="item_title">
									<h3>Flagship Sai Seva Lodging</h3>
									<small>Near Muktidham Mandar, Bytco Point</small>
								</div>
							</a>
						</figure>
						<ul>
							<li><span class="loc_open">₹ 870</span></li>
							<li>
								<button class="add_to_cart">Add to Cart</button>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<!-- Add Testimonials -->
			<!-- Testimonials Section -->
			<div class="main_title">
				<span><em></em></span>
				<h2>Client Testimonials</h2>
				<p>See what our clients have to say about us.</p>
			</div>

			<div class="owl-carousel owl-theme testimonial_carousel">
				<div class="item">
					<div class="testimonial">
						<figure>
							<img src="img/avatar1.jpg" alt="Client 1" class="testimonial_img testi-img"
								style="height: 100px;width: 100px;transform: translateX(120px);">
						</figure>
						<div class="testimonial_content">
							<p>"The hotel was fantastic! The service was top-notch and the location was perfect."</p>
							<strong>- Client Name</strong>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="testimonial">
						<figure>
							<img src="img/avatar1.jpg" alt="Client 2" class="testimonial_img"
								style="height: 100px;width: 100px;transform: translateX(120px);">
						</figure>
						<div class="testimonial_content">
							<p>"A wonderful experience! I highly recommend this hotel to everyone."</p>
							<strong>- Client Name</strong>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="testimonial">
						<figure>
							<img src="img/avatar1.jpg" alt="Client 3" class="testimonial_img"
								style="height: 100px;width: 100px;transform: translateX(120px);">
						</figure>
						<div class="testimonial_content">
							<p>"Exceptional service and great ambiance. Will definitely visit again."</p>
							<strong>- Client Name</strong>
						</div>
					</div>
				</div>
	</main>
	<!-- /main -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3 data-bs-target="#collapse_1">Company Logo</h3>
					<img src="" alt="">
				</div>
				<div class="col-lg-3 col-md-6">
					<h3 data-bs-target="#collapse_2">Pages</h3>
					<div class="collapse dont-collapse-sm links" id="collapse_2">
						<ul>
							<li><a href="grid-listing-filterscol.html">Policy</a></li>
							<li><a href="grid-listing-filterscol-full-masonry.html">Terms and Condition</a></li>
							<li><a href="grid-listing-filterscol-full-width.html">Privacy policy</a></li>
							<li><a href="grid-listing-filterscol-full-masonry.html">Cantact us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3 data-bs-target="#collapse_3">Contacts</h3>
					<div class="collapse dont-collapse-sm contacts" id="collapse_3">
						<ul>
							<li><i class="icon_house_alt"></i>97845 Baker st. 567<br>Los Angeles - US</li>
							<li><i class="icon_mobile"></i>+94 423-23-221</li>
							<li><i class="icon_mail_alt"></i><a href="#0">info@domain.com</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3 data-bs-target="#collapse_4">Keep in touch</h3>
					<div class="collapse dont-collapse-sm" id="collapse_4">
						<div id="newsletter">
							<div id="message-newsletter"></div>
							<form method="post" action="https://www.ansonika.com/foogra/assets/newsletter.php"
								name="newsletter_form" id="newsletter_form">
								<div class="form-group">
									<input type="email" name="email_newsletter" id="email_newsletter"
										class="form-control" placeholder="Your email">
									<button type="submit" id="submit-newsletter"><i
											class="arrow_carrot-right"></i></button>
								</div>
							</form>
						</div>
						<div class="follow_us">
							<h5>Follow Us</h5>
							<ul>
								<li><a href="#0"><i class="bi bi-facebook"></i></a></li>
								<li><a href="#0"><i class="bi bi-twitter-x"></i></a></li>
								<li><a href="#0"><i class="bi bi-instagram"></i></a></li>
								<li><a href="#0"><i class="bi bi-tiktok"></i></a></li>
								<li><a href="#0"><i class="bi bi-whatsapp"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /row-->
			<hr>
			<div class="footer">
				<div class="copyright">
					<p class="text-white">Design By Think Digital</p>
				</div>
			</div>
	</footer>
	<!--/footer-->

	<div id="toTop"></div><!-- Back to top button -->

	<div class="layer"></div><!-- Opacity Mask Menu Mobile -->

	<!-- Sign In Modal -->
	<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
		<div class="modal_header">
			<h3>Sign In</h3>
		</div>
		<form>
			<div class="sign-in-wrapper">
				<a href="#0" class="social_bt facebook">Login with Facebook</a>
				<a href="#0" class="social_bt google">Login with Google</a>
				<div class="divider"><span>Or</span></div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" id="email">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" id="password" value="">
					<i class="icon_lock_alt"></i>
				</div>
				<div class="clearfix add_bottom_15">
					<div class="checkboxes float-start">
						<label class="container_check">Remember me
							<input type="checkbox">
							<span class="checkmark"></span>
						</label>
					</div>
					<div class="float-end"><a id="forgot" href="#0">Forgot Password?</a></div>
				</div>
				<div class="text-center">
					<input type="submit" value="Log In" class="btn_1 full-width mb_5">
					Don’t have an account? <a href="account.html">Sign up</a>
				</div>
				<div id="forgot_pw">
					<div class="form-group">
						<label>Please confirm login email below</label>
						<input type="email" class="form-control" name="email_forgot" id="email_forgot">
						<i class="icon_mail_alt"></i>
					</div>
					<p>You will receive an email containing a link allowing you to reset your password to a new
						preferred one.</p>
					<div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
				</div>
			</div>
		</form>
		<!--form -->
	</div>
	<!-- /Sign In Modal -->

	<!-- COMMON SCRIPTS -->
	<script src="js/common_scripts.min.js"></script>
	<script src="js/common_func.js"></script>
	<script src="assets/validate.js"></script>

</body>
<script>


	document.addEventListener('DOMContentLoaded', function () {
		flatpickr('#date-input', {
			enableTime: false,
			dateFormat: "Y-m-d",
		});
	});

	$('.testimonial_carousel').owlCarousel({
		loop: true,
		margin: 30,
		nav: true,
		dots: true,
		autoplay: true,
		autoplayTimeout: 5000,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 2
			},
			1000: {
				items: 3
			}
		}
	});

</script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<!-- Mirrored from www.ansonika.com/foogra/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jul 2024 05:25:36 GMT -->

</html>
