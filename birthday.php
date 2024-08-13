<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Foogra - Discover & Book the best restaurants at the best price" />
	<meta name="author" content="Ansonika" />
	<title>
		The Wow Destination
	</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png" />
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png" />
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
		href="img/apple-touch-icon-114x114-precomposed.png" />
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
		href="img/apple-touch-icon-144x144-precomposed.png" />

	<!-- GOOGLE WEB FONT -->
	<link rel="dns-prefetch" href="https://fonts.gstatic.com/" />
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="anonymous" />
	<link rel="preload" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;display=swap"
		as="fetch" crossorigin="anonymous" />
	<script type="text/javascript">
		!(function (e, n, t) {
			"use strict";
			var o =
				"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;display=swap",
				r = "__3perf_googleFonts_c2536";
			function c(e) {
				(n.head || n.body).appendChild(e);
			}
			function a() {
				var e = n.createElement("link");
				(e.href = o), (e.rel = "stylesheet"), c(e);
			}
			function f(e) {
				if (!n.getElementById(r)) {
					var t = n.createElement("style");
					(t.id = r), c(t);
				}
				n.getElementById(r).innerHTML = e;
			}
			e.FontFace && e.FontFace.prototype.hasOwnProperty("display")
				? (t[r] && f(t[r]),
					fetch(o)
						.then(function (e) {
							return e.text();
						})
						.then(function (e) {
							return e.replace(
								/@font-face {/g,
								"@font-face{font-display:swap;"
							);
						})
						.then(function (e) {
							return (t[r] = e);
						})
						.then(f)
						.catch(a))
				: a();
		})(window, document, localStorage);
	</script>

	<!-- BASE CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />

	<!-- SPECIFIC CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
	<!-- or -->
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link href="css/listing.css" rel="stylesheet" />
	<link href="css/detail-page.css" rel="stylesheet" />

	<!-- ALTERNATIVE COLORS CSS -->
	<link href="#" id="colors" rel="stylesheet" />
</head>

<body>
	<header class="header_in clearfix">
		<div class="container">
			<div id="logo">
				<h3>The Wow Destination</h3>
			</div>

			<!-- /top_menu -->
			<a href="#0" class="open_close">
				<i class="icon_menu"></i><span>Menu</span>
			</a>
			<nav class="main-menu">
				<div id="header_menu">
					<a href="#0" class="open_close">
						<i class="icon_close"></i><span>Menu</span>
					</a>
					<a href="index.html"><img src="img/logo.svg" width="140" height="35" alt="" /></a>
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
		<div class="page_header element_to_stick">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 col-lg-7 col-md-7 d-none d-md-block">
						<div class="breadcrumbs">
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="#">Category</a></li>
								<li>Page active</li>
							</ul>
						</div>
						<h1>145 restaurants in Convent Street 2983</h1>
					</div>
				</div>
				<!-- /row -->
			</div>
		</div>
		<!-- /page_header -->

		<div class="filters_full clearfix add_bottom_15">
			<div class="container">
				<div class="switch-field">
					<input type="radio" id="all" name="listing_filter" value="hall" checked data-filter=".hall"
						class="selected" />
					<label for="all">Hall</label>
					<input type="radio" id="popular" name="listing_filter" value="lawn" data-filter=".lawn" />
					<label for="popular">Lawn</label>
					<input type="radio" id="latest" name="listing_filter" value="cafe" data-filter=".cafe" />
					<label for="latest">Cafe</label>
				</div>

				<a href="#collapseFilters" data-bs-toggle="collapse" class="btn_filters"><i
						class="icon_adjust-vert"></i><span>Filters</span></a>
			</div>
		</div>
		<!-- /filters_full -->

		<div class="collapse filters_2" id="collapseFilters">
			<div class="container margin_detail">
				<div class="row">
					<div class="col-md-4">
						<div class="filter_type">
							<h6>Categories</h6>
							<ul>
								<li>
									<label class="container_check">Pizza - Italian <small>12</small>
										<input type="checkbox" />
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_check">Japanese - Sushi <small>24</small>
										<input type="checkbox" />
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_check">Burghers <small>23</small>
										<input type="checkbox" />
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_check">Vegetarian <small>11</small>
										<input type="checkbox" />
										<span class="checkmark"></span>
									</label>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4">
						<div class="filter_type">
							<h6>Rating</h6>
							<ul>
								<li>
									<label class="container_check">Superb 9+ <small>06</small>
										<input type="checkbox" />
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_check">Very Good 8+ <small>12</small>
										<input type="checkbox" />
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_check">Good 7+ <small>17</small>
										<input type="checkbox" />
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_check">Pleasant 6+ <small>43</small>
										<input type="checkbox" />
										<span class="checkmark"></span>
									</label>
								</li>
							</ul>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
		</div>
		<!-- /filters -->

		<div class="container margin_30_40">
			<div class="row">
				<div class="col-lg-8">
					<div class="row isotope-wrapper">
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 isotope-item hall">
							<div class="strip">
								<figure>
									<span class="ribbon off">-30%</span>
									<img src="img/lazy-placeholder.png" data-src="img/Hall/1.jpg" class="img-fluid lazy"
										alt="" />
									<a href="detail-restaurant.html" class="strip_info">
										<small>Hall</small>
										<div class="item_title">
											<h3>Da Alfredo</h3>
											<small>27 Old Gloucester St</small>
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
						<!-- /strip grid -->
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 isotope-item hall">
							<div class="strip">
								<figure>
									<span class="ribbon off">-40%</span>
									<img src="img/lazy-placeholder.png" data-src="img/Hall/2.jpeg"
										class="img-fluid lazy" alt="" />
									<a href="detail-restaurant.html" class="strip_info">
										<small>Hall</small>
										<div class="item_title">
											<h3>Best Burghers</h3>
											<small>27 Old Gloucester St</small>
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
						<!-- /strip grid -->
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 isotope-item hall">
							<div class="strip">
								<figure>
									<img src="img/lazy-placeholder.png" data-src="img/Hall/3.jpg" class="img-fluid lazy"
										alt="" />
									<a href="detail-restaurant.html" class="strip_info">
										<small>Hall</small>
										<div class="item_title">
											<h3>Vego Life</h3>
											<small>27 Old Gloucester St</small>
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
						<!-- /strip grid -->
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 isotope-item lawn">
							<div class="strip">
								<figure>
									<span class="ribbon off">-25%</span>
									<img src="img/lazy-placeholder.png" data-src="img/Hall/4.jpg" class="img-fluid lazy"
										alt="" />
									<a href="detail-restaurant.html" class="strip_info">
										<small>Lawn</small>
										<div class="item_title">
											<h3>Sushi Temple</h3>
											<small>27 Old Gloucester St</small>
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
						<!-- /strip grid -->
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 isotope-item cafe">
							<div class="strip">
								<figure>
									<span class="ribbon off">-30%</span>
									<img src="img/lazy-placeholder.png" data-src="img/Hall/5.jpg" class="img-fluid lazy"
										alt="" />
									<a href="detail-restaurant.html" class="strip_info">
										<small>Cafe</small>
										<div class="item_title">
											<h3>Auto Pizza</h3>
											<small>27 Old Gloucester St</small>
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
						<!-- /strip grid -->
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 isotope-item lawn">
							<div class="strip">
								<figure>
									<img src="img/lazy-placeholder.png" data-src="img/Hall/6.jpg" class="img-fluid lazy"
										alt="" />
									<a href="detail-restaurant.html" class="strip_info">
										<small>Lawn</small>
										<div class="item_title">
											<h3>Lawn</h3>
											<small>27 Old Gloucester St</small>
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
						<!-- /strip grid -->
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 isotope-item lawn">
							<div class="strip">
								<figure>
									<span class="ribbon off">-30%</span>
									<img src="img/lazy-placeholder.png" data-src="img/Hall/7.jpg" class="img-fluid lazy"
										alt="" />
									<a href="detail-restaurant.html" class="strip_info">
										<small>Lawn</small>
										<div class="item_title">
											<h3>Alliance</h3>
											<small>27 Old Gloucester St</small>
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
						<!-- /strip grid -->
					</div>
				</div>
				<div class="col-lg-4" id="sidebar_fixed">
					<div class="box_booking">
						<div class="head">
							<h3>Book your table</h3>
							<div class="offer">Up to -40% off</div>
						</div>
						<!-- /head -->
						<div class="main">
							<input type="text" id="datepicker_field" />
							<div id="DatePicker"></div>
							<div class="dropdown time">
								<a href="#" data-bs-toggle="dropdown">Hour <span id="selected_time"></span></a>
								<div class="dropdown-menu">
									<div class="dropdown-menu-content">
										<h4>Lunch</h4>
										<div class="radio_select add_bottom_15">
											<ul>
												<li>
													<input type="radio" id="time_1" name="time" value="12.00am" />
													<label for="time_1">12.00<em>-40%</em></label>
												</li>
												<li>
													<input type="radio" id="time_2" name="time" value="12.30pm" />
													<label for="time_2">12.30<em>-40%</em></label>
												</li>
												<li>
													<input type="radio" id="time_3" name="time" value="1.00pm" />
													<label for="time_3">1.00<em>-40%</em></label>
												</li>
												<li>
													<input type="radio" id="time_4" name="time" value="1.30pm" />
													<label for="time_4">1.30<em>-40%</em></label>
												</li>
											</ul>
										</div>
										<!-- /time_select -->
										<h4>Dinner</h4>
										<div class="radio_select">
											<ul>
												<li>
													<input type="radio" id="time_5" name="time" value="8.00pm" />
													<label for="time_5">20.00<em>-40%</em></label>
												</li>
												<li>
													<input type="radio" id="time_6" name="time" value="8.30pm" />
													<label for="time_6">20.30<em>-40%</em></label>
												</li>
												<li>
													<input type="radio" id="time_7" name="time" value="9.00pm" />
													<label for="time_7">21.00<em>-40%</em></label>
												</li>
												<li>
													<input type="radio" id="time_8" name="time" value="9.30pm" />
													<label for="time_8">21.30<em>-40%</em></label>
												</li>
											</ul>
										</div>
										<!-- /time_select -->
									</div>
								</div>
							</div>
							<!-- /dropdown -->
							<div class="dropdown people">
								<a href="#" data-bs-toggle="dropdown">People <span id="selected_people"></span></a>
								<div class="dropdown-menu">
									<div class="dropdown-menu-content">
										<h4>How many people?</h4>
										<div class="radio_select">
											<ul>
												<li>
													<input type="radio" id="people_1" name="people" value="1" />
													<label for="people_1">1<em>-40%</em></label>
												</li>
												<li>
													<input type="radio" id="people_2" name="people" value="2" />
													<label for="people_2">2<em>-40%</em></label>
												</li>
												<li>
													<input type="radio" id="people_3" name="people" value="3" />
													<label for="people_3">3<em>-40%</em></label>
												</li>
												<li>
													<input type="radio" id="people_4" name="people" value="4" />
													<label for="people_4">4<em>-40%</em></label>
												</li>
											</ul>
										</div>
										<!-- /people_select -->
									</div>
								</div>
							</div>
							<!-- /dropdown -->
							<a href="booking.html" class="btn_1 full-width mb_5">Reserve Now</a>
							<div class="text-center">
								<small>No money charged on this steps</small>
							</div>
						</div>
					</div>
					<!-- /box_booking -->
					<ul class="share-buttons">
						<li>
							<a class="fb-share" href="#0"><i class="social_facebook"></i> Share</a>
						</li>
						<li>
							<a class="twitter-share" href="#0"><i class="social_twitter"></i> Share</a>
						</li>
						<li>
							<a class="gplus-share" href="#0"><i class="social_googleplus"></i> Share</a>
						</li>
					</ul>
				</div>
			</div>
			<!-- /row -->
			<div class="pagination_fg">
				<a href="#">&laquo;</a>
				<a href="#" class="active">1</a>
				<a href="#">2</a>
				<a href="#">3</a>
				<a href="#">4</a>
				<a href="#">5</a>
				<a href="#">&raquo;</a>
			</div>
		</div>
		<!-- /container -->
	</main>
	<!-- /main -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3 data-bs-target="#collapse_1">Quick Links</h3>
					<div class="collapse dont-collapse-sm links" id="collapse_1">
						<ul>
							<li><a href="submit-rider.html">Become a Rider</a></li>
							<li>
								<a href="submit-restaurant.html">Add your restaurant</a>
							</li>
							<li><a href="help.html">Help</a></li>
							<li><a href="account.html">My account</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="contacts.html">Contacts</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3 data-bs-target="#collapse_2">Categories</h3>
					<div class="collapse dont-collapse-sm links" id="collapse_2">
						<ul>
							<li>
								<a href="grid-listing-filterscol.html">Top Categories</a>
							</li>
							<li>
								<a href="grid-listing-filterscol-full-masonry.html">Best Rated</a>
							</li>
							<li>
								<a href="grid-listing-filterscol-full-width.html">Best Price</a>
							</li>
							<li>
								<a href="grid-listing-filterscol-full-masonry.html">Latest Submissions</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3 data-bs-target="#collapse_3">Contacts</h3>
					<div class="collapse dont-collapse-sm contacts" id="collapse_3">
						<ul>
							<li>
								<i class="icon_house_alt"></i>97845 Baker st. 567<br />Los
								Angeles - US
							</li>
							<li><i class="icon_mobile"></i>+94 423-23-221</li>
							<li>
								<i class="icon_mail_alt"></i><a href="#0">info@domain.com</a>
							</li>
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
										class="form-control" placeholder="Your email" />
									<button type="submit" id="submit-newsletter">
										<i class="arrow_carrot-right"></i>
									</button>
								</div>
							</form>
						</div>
						<div class="follow_us">
							<h5>Follow Us</h5>
							<ul>
								<li>
									<a href="#0"><i class="bi bi-facebook"></i></a>
								</li>
								<li>
									<a href="#0"><i class="bi bi-twitter-x"></i></a>
								</li>
								<li>
									<a href="#0"><i class="bi bi-instagram"></i></a>
								</li>
								<li>
									<a href="#0"><i class="bi bi-tiktok"></i></a>
								</li>
								<li>
									<a href="#0"><i class="bi bi-whatsapp"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /row-->
			<hr />
			<div class="row add_bottom_25">
				<div class="col-lg-6">
					<ul class="footer-selector clearfix">
						<li>
							<div class="styled-select lang-selector">
								<select>
									<option value="English" selected>English</option>
									<option value="French">French</option>
									<option value="Spanish">Spanish</option>
									<option value="Russian">Russian</option>
								</select>
							</div>
						</li>
						<li>
							<div class="styled-select currency-selector">
								<select>
									<option value="US Dollars" selected>US Dollars</option>
									<option value="Euro">Euro</option>
								</select>
							</div>
						</li>
						<li>
							<img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
								data-src="img/cards_all.svg" alt="" width="198" height="30" class="lazy" />
						</li>
					</ul>
				</div>
				<div class="col-lg-6">
					<ul class="additional_links">
						<li><a href="#0">Terms and conditions</a></li>
						<li><a href="#0">Privacy</a></li>
						<li><span>© Foogra</span></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!--/footer-->

	<div id="toTop"></div>
	<!-- Back to top button -->

	<div class="layer"></div>
	<!-- Opacity Mask Menu Mobile -->

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
					<input type="email" class="form-control" name="email" id="email" />
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" id="password" value="" />
					<i class="icon_lock_alt"></i>
				</div>
				<div class="clearfix add_bottom_15">
					<div class="checkboxes float-start">
						<label class="container_check">Remember me
							<input type="checkbox" />
							<span class="checkmark"></span>
						</label>
					</div>
					<div class="float-end">
						<a id="forgot" href="javascript:void(0);">Forgot Password?</a>
					</div>
				</div>
				<div class="text-center">
					<input type="submit" value="Log In" class="btn_1 full-width mb_5" />
					Don’t have an account? <a href="account.html">Sign up</a>
				</div>
				<div id="forgot_pw">
					<div class="form-group">
						<label>Please confirm login email below</label>
						<input type="email" class="form-control" name="email_forgot" id="email_forgot" />
						<i class="icon_mail_alt"></i>
					</div>
					<p>
						You will receive an email containing a link allowing you to reset
						your password to a new preferred one.
					</p>
					<div class="text-center">
						<input type="submit" value="Reset Password" class="btn_1" />
					</div>
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

	<!-- SPECIFIC SCRIPTS -->
	<script src="js/sticky_sidebar.min.js"></script>
	<script src="js/specific_listing.js"></script>
	<script src="js/isotope.min.js"></script>

	<!-- sdhfgsjdf -->
	<!-- SPECIFIC SCRIPTS -->
	<script src="js/specific_detail.js"></script>
	<script src="js/datepicker.min.js"></script>
	<script src="js/datepicker_func_1.js"></script>
	<script>
		$(window).on("load", function () {
			var $container = $(".isotope-wrapper");
			$container.isotope({
				itemSelector: ".isotope-item",
				layoutMode: "masonry",
			});
		});
		$(".switch-field").on("click", "input", "change", function () {
			var selector = $(this).attr("data-filter");
			$(".isotope-wrapper").isotope({ filter: selector });
		});
	</script>

	<!-- Map -->
	<script src="js/main_map_scripts.js"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?&amp;callback=initMap"></script>
	<!-- COLOR SWITCHER  -->
</body>

<!-- Mirrored from www.ansonika.com/foogra/grid-listing-filterscol-full-masonry.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jul 2024 05:26:02 GMT -->

</html>