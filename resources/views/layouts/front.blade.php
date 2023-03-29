<!doctype html>
<html lang="zxx">
    <head>
		<!--=== Required Meta Tags ======-->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--=== CSS Link ===-->
		<link rel="stylesheet" href="{{ asset('front/assets/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('front/assets/css/owl.theme.default.min.css') }}">
		<link rel="stylesheet" href="{{ asset('front/assets/css/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('front/assets/css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('front/assets/css/icofont.min.css') }}">
		<link rel="stylesheet" href="{{ asset('front/assets/css/animate.min.css') }}">
		<link rel="stylesheet" href="{{ asset('front/assets/css/magnific-popup.min.css') }}">
		<link rel="stylesheet" href="{{ asset('front/assets/css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('front/assets/css/responsive.css') }}">

		<!--=== Favicon ===-->
		<link rel="icon" type="image/png" href="{{ asset('front/assets/images/favicon.png') }}">
		<!--=== Title ===-->
		<title>Froidis - Solutions Pour Le froid Industriel</title>
    </head>

    <body>


		<!--=== Start Header Section ===-->
		<header class="header-section">


			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<a class="navbar-brand" href="{{asset("/")}}">
						<img src="{{asset('front/assets/images/logo.png')}}" alt="Logo">
					</a>

					<div class="for-mobile-options">
						<div class="menu-right-options d-flex align-items-center">
						{{--	<a href="cart.html" class="cart-option">
								<i class="icofont-cart"></i>
								<span>3</span>
							</a>--}}
							<a style="cursor: pointer" class="main-btn">
								<span>
									Contact Now
									<i class="icofont-arrow-right"></i>
								</span>
							</a>
						</div>
					</div>

					<a href="javascript:void(0);" class="mobile-menu">
						<div class="mobile-menu-btn">
							<div class="mobile-menu-bar"></div>
						</div>
					</a>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav m-auto">
							<li class="nav-item">
								<a href="{{ asset('/') }}" class="nav-link">Accueil</a>
							</li>

							<li class="nav-item">
								<a style="cursor: pointer" class="nav-link">Présentation</a>
							</li>

							<li class="nav-item">
								<a style="cursor: pointer" class="nav-link dropdown-toggles">Produits</a>

								<ul class="sub-menu">
									<li class="nav-item">
										<a style="cursor: pointer" class="nav-link">About</a>
									</li>

									<li class="nav-item">
										<a style="cursor: pointer" class="nav-link dropdown-toggles">Projects</a>

										<ul class="sub-menu-sub">
											<li class="nav-item">
												<a style="cursor: pointer" class="nav-link">Projects Page</a>
											</li>

											<li class="nav-item">
												<a style="cursor: pointer" class="nav-link">Project Details Page</a>
											</li>
										</ul>
									</li>
								</ul>
							</li>

							<li class="nav-item">
								<a style="cursor: pointer" class="nav-link dropdown-toggles">Services</a>

								<ul class="sub-menu">
									<li class="nav-item">
										<a style="cursor: pointer" class="nav-link">Services Page</a>
									</li>

									<li class="nav-item">
										<a style="cursor: pointer" class="nav-link">Services Details Page</a>
									</li>
								</ul>
							</li>
                            <li class="nav-item">
								<a style="cursor: pointer" class="nav-link">Qualité</a>
							</li>
							<li class="nav-item">
								<a style="cursor: pointer" class="nav-link">Contact</a>
							</li>
						</ul>

						<div class="menu-right-options">
                            @auth
                            <a style="cursor: pointer" class="main-btn">
								<span>
									Dashboard
									<i class="icofont-arrow-right"></i>
								</span>
							</a>
                            @else
                            <a href="{{asset('/register-pro')}}" class="main-btn">
								<span>
									Inscrivez-vous
									<i class="icofont-arrow-right"></i>
								</span>
							</a>
                            @endauth

						</div>
					</div>
				</div>
			</nav>
		</header>
		<!--=== End Header Section ===-->

		<!--=== Start Menu Slide Bar ===-->
		<aside class="menu-slide-bar">
			<div class="close-mobile-menu">
				<div class="mobile-logo">
					<a href="index.html" class="mobile-logo">
						<img src="assets/images/logo.png" alt="Logo">
					</a>
				</div>

				<a href="javascript:void(0);" class="close-btn">
					<i class="icofont-close-line"></i>
				</a>
			</div>

			<nav class="side-mobile-menu">
				<ul id="mobile-menu-active">
					<li class="nav-item has-children">
						<a href="#" class="nav-link dropdown-toggles active">Home</a>

						<ul class="sub-menu">
							<li class="nav-item">
								<a href="index.html" class="nav-link active">Home One</a>
							</li>

							<li class="nav-item">
								<a href="index-2.html" class="nav-link">Home Two</a>
							</li>

							<li class="nav-item">
								<a href="index-3.html" class="nav-link">Home Three</a>
							</li>
						</ul>
					</li>

					<li class="nav-item">
						<a href="about.html" class="nav-link">About</a>
					</li>

					<li class="nav-item has-children">
						<a href="#" class="nav-link dropdown-toggles">Company</a>

						<ul class="sub-menu">
							<li class="nav-item">
								<a href="about.html" class="nav-link">About</a>
							</li>

							<li class="nav-item has-children">
								<a href="#" class="nav-link dropdown-toggles">Projects</a>

								<ul class="sub-menu">
									<li class="nav-item">
										<a href="projects.html" class="nav-link">Projects Page</a>
									</li>

									<li class="nav-item">
										<a href="project-details.html" class="nav-link">Project Details Page</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>

					<li class="nav-item has-children">
						<a href="#" class="nav-link dropdown-toggles">Services</a>

						<ul class="sub-menu">
							<li class="nav-item">
								<a href="services.html" class="nav-link">Services Page</a>
							</li>

							<li class="nav-item">
								<a href="services-details.html" class="nav-link">Services Details Page</a>
							</li>
						</ul>
					</li>

					<li class="nav-item has-children">
						<a href="#" class="nav-link dropdown-toggles">Pages</a>

						<ul class="sub-menu">
							<li class="nav-item">
								<a href="about.html" class="nav-link">About</a>
							</li>

							<li class="nav-item has-children">
								<a href="#" class="nav-link dropdown-toggles">Team</a>

								<ul class="sub-menu">
									<li class="nav-item">
										<a href="team.html" class="nav-link">Team Page</a>
									</li>

									<li class="nav-item">
										<a href="team-details.html" class="nav-link">Team Details Page</a>
									</li>
								</ul>
							</li>

							<li class="nav-item has-children">
								<a href="#" class="nav-link dropdown-toggles">Shop</a>

								<ul class="sub-menu">
									<li class="nav-item">
										<a href="products.html" class="nav-link">Products Page</a>
									</li>

									<li class="nav-item">
										<a href="cart.html" class="nav-link">Cart Page</a>
									</li>

									<li class="nav-item">
										<a href="checkout.html" class="nav-link">Checkout Page</a>
									</li>

									<li class="nav-item">
										<a href="product-details.html" class="nav-link">Product Details Page</a>
									</li>

									<li class="nav-item">
										<a href="wishlist.html" class="nav-link">Wishlist Page</a>
									</li>

									<li class="nav-item">
										<a href="payment.html" class="nav-link">Payment Page</a>
									</li>
								</ul>
							</li>

							<li class="nav-item has-children">
								<a href="#" class="nav-link dropdown-toggles">Sign In / Sign Up</a>

								<ul class="sub-menu">
									<li class="nav-item">
										<a href="sign-in.html" class="nav-link">Sign In Page</a>
									</li>

									<li class="nav-item">
										<a href="sign-up.html" class="nav-link">Sign Up Page</a>
									</li>
								</ul>
							</li>

							<li class="nav-item">
								<a href="faq.html" class="nav-link">FAQ Page</a>
							</li>

							<li class="nav-item">
								<a href="testimonials.html" class="nav-link">Testimonials Page</a>
							</li>

							<li class="nav-item">
								<a href="terms-conditions.html" class="nav-link">Terms Conditions Page</a>
							</li>

							<li class="nav-item">
								<a href="privacy-policy.html" class="nav-link">Privacy Policy Page</a>
							</li>

							<li class="nav-item">
								<a href="coming-soon.html" class="nav-link">Coming Soon Page</a>
							</li>

							<li class="nav-item">
								<a href="404.html" class="nav-link">404 Page</a>
							</li>
						</ul>
					</li>

					<li class="nav-item has-children">
						<a href="#" class="nav-link dropdown-toggles">Blog Page</a>

						<ul class="sub-menu">
							<li class="nav-item">
								<a href="blog.html" class="nav-link">Blog Grid Page</a>
							</li>

							<li class="nav-item">
								<a href="blog-details.html" class="nav-link">Blog Details Page</a>
							</li>
						</ul>
					</li>

					<li class="nav-item">
						<a href="contact.html" class="nav-link">Contact Page</a>
					</li>
				</ul>
			</nav>
		</aside>
		<div class="body-overlay"></div>
		<!--=== End Menu Slide Bar ===-->
        @yield('content')
        <!--=== Start Footer Section ===-->
		<section class="footer-section pt-100 pb-70">
			<div class="container">
				<div class="back-to-top text-center">
					<i class="icofont-simple-up"></i>
				</div>
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="main-footer-item wow fadeInUp delay-0-2s">
							<a href="index.html" class="footer-logo">
								<img src="{{asset('front/assets/images/froidis-white.png')}}" alt="Image">
							</a>
							<p>Leader Algérien du Froid commercial et industriel depuis 1995</p>

							<ul class="footer-social-content">
								<li>
									<a style="cursor: pointer" target="_blank">
										<i class="icofont-facebook"></i>
									</a>
								</li>
								<li>
									<a style="cursor: pointer" target="_blank">
										<i class="icofont-youtube-play"></i>
									</a>
								</li>
								<li>
									<a style="cursor: pointer" target="_blank">
										<i class="icofont-linkedin"></i>
									</a>
								</li>

							</ul>
						</div>
					</div>




					<div class="col-md-4">
						<div class="main-footer-item wow fadeInUp delay-0-8s">
							<h3>TLEMCEN: Siège Social et Show Room</h3>

							<ul class="contact-info" >

								<li>
									<i style="color:#ffff" class="icofont-location-pin"></i>
									<span> Groupement propriété 51, Portion13 local 01 et 01A Berdaa, Hennaya</span>
								</li>
								<li>
									<i  style="color:#ffff" class="icofont-phone"></i>
									<a style="cursor: pointer">+213 (0)560 047 047</a>
								</li>
							</ul>
						</div>
					</div>


					<div class="col-md-4">
						<div class="main-footer-item wow fadeInUp delay-0-8s">
							<h3>ALGER: Bureau et Show Room</h3>

							<ul class="contact-info" >

								<li>
									<i  style="color:#ffff" class="icofont-location-pin"></i>
									<span>  Haouch Kot Lot N°54 Bis El Hamiz Dar El Beida ( Face du C.E.M El Wouroud)</span>
								</li>
								<li>
									<i  style="color:#ffff" class="icofont-phone"></i>
									<a style="cursor: pointer">Tél. : +213 (0)560 047 047</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--=== End Footer Section ===-->

		<!--=== Start Copy Right Section ===-->
		<div class="copy-right-section">
			<div class="container">
				<p>Copyright © 2023  Froidis. All Rights Reserved.</p>
			</div>
		</div>
		<!--=== End Copy Right Section ===-->

        <!--=== JS Link ===-->
        <script src="{{ asset('front/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('front/assets/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('front/assets/js/mobile-menu.js') }}"></script>
		<script src="{{ asset('front/assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('front/assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('front/assets/js/magnific-popup.min.js') }}"></script>
        <script src="{{ asset('front/assets/js/counterup.min.js') }}"></script>
        <script src="{{ asset('front/assets/js/waypoints.min.js') }}"></script>
        <script src="{{ asset('front/assets/js/countdown.min.js') }}"></script>
		<script src="{{ asset('front/assets/js/main.js') }}"></script>
    </body>
</html>
