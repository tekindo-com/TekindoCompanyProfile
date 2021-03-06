<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Poppins:300,400,400i,600,700|Open+Sans:300,400,600,700,800,900" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('material/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('material/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('material/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('material/css/swiper.css')}}" type="text/css" />

	<!-- Business Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{ asset('material/demos/business/css/fonts.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('material/demos/business/business.css')}}" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="{{ asset('material/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('material/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('material/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('material/one-page/css/et-line.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('material/css/responsive.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- Theme Color
	============================================= -->
	<link rel="stylesheet" href="{{ asset('material/demos/business/css/colors.css')}}" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>Tekindo</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header dark full-header" data-sticky-class="not-dark" data-responsive-class="not-dark" data-sticky-offset="full">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.html" class="standard-logo" data-dark-logo="{{ asset('material/tmg/logotekindo.png')}}"><img src="{{ asset('material/tmg/logotekindo.png')}}" alt="Canvas Logo"></a>
						<a href="index.html" class="retina-logo" data-dark-logo="{{ asset('material/tmg/logotekindo@2x.png')}}"><img src="{{ asset('material/tmg/logotekindo@2x.png')}}" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="not-dark">

						<ul>
							<li class="active"><a href="#"><div>Home</div></a></li>
							<li><a href="#"><div>Services</div></a>
								<ul>
									<li><a href="#"><div>Web Development</div></a></li>
									<li><a href="#"><div>Mobile Development</div></a></li>
									<li><a href="#"><div>SEO</div></a></li>
								</ul>
							</li>
							<li><a href="#portfolio-container"><div>Portfolio</div></a></li>
							<li><a href="#"><div>Blog</div></a></li>
							<li><a href="#"><div>About Us</div></a></li>
						</ul>

						<!-- Top Search
						============================================= -->
						<div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="search.html" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
							</form>
						</div><!-- #top-search end -->

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element slider-parallax swiper_wrapper full-screen clearfix" data-loop="true">

			<div class="slider-parallax-inner">
				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide dark" style="background-image: url('{{ asset('material/tmg/slider/1.jpg')}}'); background-size: cover">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 class="font-primary nott">Creative Work.</h2>
									<p class="t600 font-primary d-none d-sm-block">Quickly communicate bleeding-edge best practices.</p>
									<a href="#" class="button button-rounded button-large nott ls0 font-primary">Get Started</a>
								</div>
							</div>
						</div>
						<div class="swiper-slide dark" style="background-image: url('{{ asset('material/tmg/slider/2.jpg')}}'); background-size: cover">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 class="font-primary">Amazing Prospects.</h2>
									<p class="t600 font-primary d-none d-sm-block">Seamlessly engineer effective synergy after e-business experiences.</p>
									<a href="#" class="button button-rounded button-large nott ls0 font-primary">Get Started</a>
								</div>
							</div>
						</div>
						<div class="swiper-slide dark" style="background-image: url('{{ asset('material/tmg/slider/3.jpg')}}'); background-size: cover">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 class="font-primary">Flexible Works.</h2>
									<p class="t600 font-primary d-none d-sm-block">Completely incubate worldwide users before imperatives.</p>
									<a href="#" class="button button-rounded button-large nott ls0 font-primary">Get Started</a>
								</div>
							</div>
						</div>
					</div>
					<!-- Slider Arrows
					============================================= -->
					<div class="slider-arrow-left" class="nobg"><i class="icon-line-arrow-left"></i></div>
					<div class="slider-arrow-right" class="nobg"><i class="icon-line-arrow-right"></i></div>
				</div>

				<!-- Slider Mouse Icon
				============================================= -->
				<a href="#" data-scrollto="#content" data-offset="0" class="dark one-page-arrow"><img class="infinite animated fadeInDown" src="{{ asset('material/demos/business/images/mouse.svg')}}" alt="" ></a>
			</div>

		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap nobottompadding" style="z-index: 1;">

				<div class="container topmargin clearfix">

					<!-- Welcome to Tekindo
					============================================= -->
					<div class="heading-block center noborder" data-heading="T">
						<h3>Welcome to Tekindo</h3>
					</div>
					<div class="row clearfix">
						<div class="center col-lg-8 offset-lg-2 bottommargin">
							<h3 class="text-rotater font-secondary" data-separator="," data-rotate="fadeInRight" data-speed="3500">TEKINDO (CV. TEKNOLOGI KREATIF INDONESIA) is a creative content development startup based technology. Dedicated to create world-class interactive experiences.</h3>
							{{-- <h3 class="text-rotater font-secondary" data-separator="," data-rotate="fadeInRight" data-speed="3500">Canvas is a Powerful, Responsive &amp; Raw Multi-Purpose Multi-Page &amp; One-Page HTML5 Template. Build whatever you like with this Template. Be it <span class="t-rotate color">Business,Corporate,Medical,Travel,Construction,Real Estate,Media Agency,Portfolio,Restaurant,Magazine,Wedding,Christmas,Blog,App Showcase</span><br> just everything is possible with Canvas.</h3> --}}
						</div>

						<div class="clear"></div>

						<!-- Features colomns
						============================================= -->
						<div class="row clearfix">
							<div class="col-lg-4 bottommargin-sm">
								<div class="feature-box media-box fbox-bg">
									<div class="fbox-media">
										<a href="#"><img class="image_fade" src="{{ asset('material/demos/business/images/featured/1.jpg')}}" alt="Featured Box Image"></a>
									</div>
									<div class="fbox-desc">
										<h3 class="nott ls0 t600">Retina Ready Display<span class="subtitle font-secondary t300 ls0">Globally parallel task premium infomediaries</span></h3>
										<a href="#" class="button-link noborder color">Read More</a>
									</div>
								</div>
							</div>

							<div class="col-lg-4 bottommargin-sm">
								<div class="feature-box media-box fbox-bg">
									<div class="fbox-media">
										<a href="#"><img class="image_fade" src="{{ asset('material/demos/business/images/featured/2.jpg')}}" alt="Featured Box Image"></a>
									</div>
									<div class="fbox-desc">
										<h3 class="nott ls0 t600">Ultra Responsive Design<span class="subtitle font-secondary t300 ls0">Energistically visualize market-driven.</span></h3>
										<a href="#" class="button-link noborder color">Read More</a>
									</div>
								</div>
							</div>

							<div class="col-lg-4 bottommargin-sm">
								<div class="feature-box media-box fbox-bg">
									<div class="fbox-media">
										<a href="#"><img class="image_fade" src="{{ asset('material/demos/business/images/featured/3.jpg')}}" alt="Featured Box Image"></a>
									</div>
									<div class="fbox-desc">
										<h3 class="nott ls0 t600">1000+ HTML Pages Included<span class="subtitle font-secondary t300 ls0">Enthusiastically iterate enabled portals after.</span></h3>
										<a href="#" class="button-link noborder color">Read More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Services
				============================================= -->
				<div class="section nobg clearfix">
					<div class="container clearfix">
						<div class="heading-block bottommargin-lg center noborder" data-heading="T">
							<h3 class="nott ls0">Services</h3>
						</div>
					</div>

					<!-- How We Work - Carousel
					============================================= -->
					<div id="oc-features" class="owl-carousel owl-carousel-full image-carousel carousel-widget">
						<div class="oc-item">
							<div class="row cleafix">
								<div class="col-xl-8">
									<img src="{{ asset('material/demos/business/images/carousel/1.jpg')}}" alt="">
								</div>
								<div class="col-xl-4" style="padding: 20px 0 0 20px;">
									<h3>Web Development</h3>
									<p>We create good websites for our customers. With a new desain, we deliver information with a new way. Good choice for your site!</p>
									{{-- <a href="#" class="button-link">Read More</a> --}}
								</div>
							</div>
						</div>
						<div class="oc-item">
							<div class="row cleafix">
								<div class="col-xl-8">
									<img src="{{ asset('material/demos/business/images/carousel/2.jpg')}}" alt="">
								</div>
								<div class="col-xl-4" style="padding: 20px 0 0 20px;">
									<h3>Mobile Development</h3>
									<p>Track your world anytime you want! mobile apps is here. </p>
									{{-- <a href="#" class="button-link">Read More</a> --}}
								</div>
							</div>
						</div>
						<div class="oc-item">
							<div class="row cleafix">
								<div class="col-xl-8">
									<img src="{{ asset('material/demos/business/images/carousel/3.jpg')}}" alt="">
								</div>
								<div class="col-xl-4" style="padding: 20px 0 0 20px;">
									<h3>SEO</h3>
									<p>Dolor mollitia dignissimos, assumenda consequuntur consectetur! Laborum reiciendis, error explicabo consectetur adipisci, accusamus possimus et similique nisi obcaecati ex doloremque ea odio.</p>
									{{-- <a href="#" class="button-link">Read More</a> --}}
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- About Us
				============================================= -->
				<div class="section nopadding notopmargin nobg clearfix" style="border-top: 1px solid #EEE; border-bottom: 1px solid #EEE;">
					<div class="row common-height clearfix">
						<div class="col-lg-6 center col-padding" style="background: url('{{ asset('material/demos/business/images/sections/1.jpg')}}') center center no-repeat; background-size: cover;">
							<div>&nbsp;</div>
						</div>

						<div class="col-lg-6 col-padding">
							<div>
								<div style="position: relative;">
									<div class="heading-block noborder" data-heading="T">
										<h3 class="nott ls0">About Us</h3>
									</div>
								</div>

								<!-- About Us Featured Boxes
								============================================= -->
								<div class="row clearfix">
									<div class="col-lg-10 col-md-8 bottommargin">
										<div class="feature-box fbox-plain">
											<div class="fbox-icon">
												<a href="#"><i class="icon-et-globe"></i></a>
											</div>
											<h3>Ready Worldwide</h3>
											<p>We are preparing to be the one of the best software house company in the world.</p>
										</div>
									</div>
									<div class="col-lg-10 col-md-8 bottommargin">
										<div class="feature-box fbox-plain">
											<div class="fbox-icon">
												<a href="#"><i class="icon-et-gears"></i></a>
											</div>
											<h3>Fully Technically</h3>
											<p>Created by experienced developer across the world. Help you to bring new digital era.</p>
										</div>
									</div>
									<div class="col-lg-10 col-md-8">
										<div class="feature-box fbox-plain">
											<div class="fbox-icon">
												<a href="#"><i class="icon-et-document"></i></a>
											</div>
											<h3>Great Documentation</h3>
											<p>Make it easier to rebuild your project, or improvement your project quickly.</p>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

				<!-- Our Works
				============================================= -->
				<div id="portfolio-container" class="section nobg nobottommargin clearfix">
					<div class="container clearfix">
						<div class="heading-block center noborder" data-heading="T">
							<h3 class="nott ls0">Portfolio</h3>
						</div>

						<!-- Portfolio Filter
						============================================= -->
						<ul class="portfolio-filter style-2 center clearfix" data-container="#portfolio">

							<li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
							<li><a href="#" data-filter=".pf-own">Own Project</a></li>
							<li><a href="#" data-filter=".pf-client">Client Project</a></li>
							<li><a href="#" data-filter=".pf-graphic">Graphic Design</a></li>
							<li><a href="#" data-filter=".pf-photo">Photography</a></li>
							<li><a href="#" data-filter=".pf-video">Video</a></li>

						</ul><!-- #portfolio-filter end -->
					</div>

					<!-- Portfolio Items
					============================================= -->
					<div id="portfolio" class="portfolio grid-container portfolio-nomargin clearfix">

						<article class="portfolio-item pf-own pf-graphic">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{ asset('material/tmg/portfolio/5.jpg')}}" alt="Open Imagination">
								</a>
								<div class="portfolio-overlay">
									<div class="portfolio-desc">
										<h3><a href="#">Light Path</a></h3>
										<span><a href="#">Own Project</a>, <a href="#">Graphic Design</a></span>
									</div>
								</div>
							</div>
						</article>

						<article class="portfolio-item pf-own">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{ asset('material/tmg/portfolio/2.jpg')}}" alt="Open Imagination">
								</a>
								<div class="portfolio-overlay">
									<div class="portfolio-desc">
										<h3><a href="#">Snatch Steal</a></h3>
										<span><a href="#">Own Project</a></span>
									</div>
								</div>
							</div>
						</article>

						<article class="portfolio-item pf-client">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{ asset('material/tmg/portfolio/16.jpg')}}" alt="Open Imagination">
								</a>
								<div class="portfolio-overlay">
									<div class="portfolio-desc">
										<h3><a href="#">Bermain dan Belajar Buah-Sayur</a></h3>
										<span><a href="#">Client</a></span>
									</div>
								</div>
							</div>
						</article>

						<article class="portfolio-item pf-own pf-graphic">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{ asset('material/tmg/portfolio/24.jpg')}}" alt="Open Imagination">
								</a>
								{{-- <div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
									<div class="flexslider">
										<div class="slider-wrap">
											<div class="slide"><a href="#"><img src="{{ asset('material/tmg/portfolio/4.jpg')}}" alt="Open Imagination"></a></div>
											<div class="slide"><a href="#"><img src="{{ asset('material/tmg/portfolio/5.jpg')}}" alt="Open Imagination"></a></div>
										</div>
									</div>
								</div> --}}
								<div class="portfolio-overlay">
								{{-- <div class="portfolio-overlay" data-lightbox="gallery"> --}}
									<div class="portfolio-desc">
										<h3><a href="#">Street Watcher Poster</a></h3>
										<span><a href="#">Own Project</a>, <a href="#">Graphic Designer</a></span>
									</div>
								</div>
							</div>
						</article>

						<article class="portfolio-item pf-own pf-video">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{ asset('material/tmg/portfolio/39.jpg')}}" alt="Open Imagination">
								</a>
								<div class="portfolio-overlay" data-lightbox="gallery">
									<div class="portfolio-desc">
										<h3><a href="#">To-Do Diet</a></h3>
										<span><a href="#">Own Project</a>, <a href="#">Video</a></span>
									</div>
								</div>
							</div>
						</article>

						<article class="portfolio-item pf-photo">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{ asset('material/tmg/portfolio/29.jpg')}}" alt="Open Imagination">
								</a>
								<div class="portfolio-overlay">
									<div class="portfolio-desc">
										<h3><a href="#">Abandoned Ship</a></h3>
										<span><a href="#">Photography</a></span>
									</div>
								</div>
							</div>
						</article>

						<article class="portfolio-item pf-own">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{ asset('material/tmg/portfolio/26.jpg')}}" alt="Open Imagination">
								</a>
								<div class="portfolio-overlay">
									<div class="portfolio-desc">
										<h3><a href="#">To-Do Diet App</a></h3>
										<span><a href="#">Own Project</a></span>
									</div>
								</div>
							</div>
						</article>

						<article class="portfolio-item pf-client">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{ asset('material/tmg/portfolio/12.jpg')}}" alt="Open Imagination">
								</a>
								<div class="portfolio-overlay">
									<div class="portfolio-desc">
										<h3><a href="#">Kiddo Puzzle Game</a></h3>
										<span><a href="#">Client Project</a></span>
									</div>
								</div>
							</div>
						</article>

					</div><!-- #portfolio end -->
				</div>

				<!-- Video Sections
				============================================= -->
				{{-- <div class="section nobg notopmargin clearfix">
					<div class="container clearfix">

						<div class="col_one_third">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon">
									<a href="#"><img src="{{ asset('material/demos/business/images/icons/24help.svg')}}" alt=""></a>
								</div>
								<h3 class="nott t600 ls0">Responsive Layout</h3>
								<p>Powerful Layout with Responsive functionality that can be adapted to any screen size.</p>
							</div>
						</div>

						<div class="col_one_third">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon">
									<a href="#"><img src="{{ asset('material/demos/business/images/icons/barcode.svg')}}" alt=""></a>
								</div>
								<h3 class="nott t600 ls0">Retina Ready Graphics</h3>
								<p>Looks beautiful &amp; ultra-sharp on Retina Displays with Retina Icons, Fonts &amp; Images.</p>
							</div>
						</div>

						<div class="col_one_third col_last">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon">
									<a href="#"><img src="{{ asset('material/demos/business/images/icons/buy.svg')}}" alt=""></a>
								</div>
								<h3 class="nott t600 ls0">Powerful Performance</h3>
								<p>Optimized code that are completely customizable and deliver unmatched fast performance.</p>
							</div>
						</div>

						<div class="clear"></div>

						<div class="col_one_third">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon">
									<a href="#"><img src="{{ asset('material/demos/business/images/icons/card.svg')}}" alt=""></a>
								</div>
								<h3 class="nott t600 ls0">HTML5 Video</h3>
								<p>Canvas provides support for Native HTML5 Videos that can be added to a Full Width Background.</p>
							</div>
						</div>

						<div class="col_one_third">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon">
									<a href="#"><img src="{{ asset('material/demos/business/images/icons/doc.svg')}}" alt=""></a>
								</div>
								<h3 class="nott t600 ls0">Parallax Support</h3>
								<p>Display your Content attractively using Parallax Sections that have unlimited customizable areas.</p>
							</div>
						</div>

						<div class="col_one_third col_last">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon">
									<a href="#"><img src="{{ asset('material/demos/business/images/icons/dropbox.svg')}}" alt=""></a>
								</div>
								<h3 class="nott t600 ls0">Endless Possibilities</h3>
								<p>Complete control on each &amp; every element that provides endless customization possibilities.</p>
							</div>
						</div>

						<div class="clear"></div>

						<div class="col_one_third bottommargin">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon">
									<a href="#"><img src="{{ asset('material/demos/business/images/icons/piggy-bank.svg')}}" alt=""></a>
								</div>
								<h3 class="nott t600 ls0">Light &amp; Dark Color Schemes</h3>
								<p>Change your Website's Primary Scheme instantly by simply adding the dark class to the body.</p>
							</div>
						</div>

						<div class="col_one_third bottommargin">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon">
									<a href="#"><img src="{{ asset('material/demos/business/images/icons/home.svg')}}" alt=""></a>
								</div>
								<h3 class="nott t600 ls0">Boxed &amp; Wide Layouts</h3>
								<p>Stretch your Website to the Full Width or make it boxed to surprise your visitors.</p>
							</div>
						</div>

						<div class="col_one_third bottommargin col_last">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon">
									<a href="#"><img src="{{ asset('material/demos/business/images/icons/offers.svg')}}" alt=""></a>
								</div>
								<h3 class="nott t600 ls0">Extensive Documentation</h3>
								<p>We have covered each &amp; everything in our Documentation including Videos &amp; Screenshots.</p>
							</div>
						</div>

						<div class="clear line"></div>

						<div class="row topmargin-lg clearfix">
							<div class="col-lg-6 nopadding">
								<!-- Youtube Video Link
								============================================= -->
								<a href="https://www.youtube.com/watch?v=NS0txu_Kzl8" data-lightbox="iframe">
									<img src="{{ asset('material/demos/business/images/sections/video.jpg')}}" alt="Youtube Video" class="image_fade" style="box-shadow: 0px 0px 25px 0px rgba(0,0,0,0.15); border-radius: 6px;">
									<i class="icon-play" style="position: absolute; top: 50%; left: 50%; font-size: 60px; color: #FFF; margin-top: -45px; margin-left: -23px"></i>
								</a>
							</div>
							<!-- Video Texts
							============================================= -->
							<div class="col-lg-6" style="padding-left: 60px;">
								<div class="heading-block topmargin-sm bottommargin-sm noborder">
									<h3 class="nott" style="font-size: 46px; font-weight: 700; letter-spacing: -2px; line-height: 58px">A small Video from Our Customers.</h3>
								</div>
								<p class="t400">Interactively facilitate.<br>Tactical systems with compelling materials. Objectively re-engineer diverse relationships long-term impact methodologies.</p>
								<h5 class="nobottommargin t600">&middot; SemiColonWeb - Author, Themeforest Market. <a href="#"><img src="demos/business/images/tf-logo.png" height="18" alt="" style="margin-left: 4px"></a></h5>
								<a href="#" class="button-link bottommargin">Read More</a>
							</div>
						</div>
					</div>
				</div> --}}

				<!-- Parallax Area
				============================================= -->
				<div class="section parallax topmargin-lg nobottommargin notopborder clearfix" style="background-image: url('{{ asset('material/demos/business/images/sections/2.jpg')}}'); background-size: cover;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
					<div class="container clearfix">

						<div class="row cleafix">
							<div class="col-md-6 dark" style="padding-left: 60px;">
								<div class="heading-block bottommargin-sm noborder">
									<h3 class="nott" style="font-size: 46px; font-weight: 700; letter-spacing: -2px; line-height: 58px">Testimonials from Our Customers</h3>
								</div>
								<p>Here are several reviews from our customers! what they said, what they felt. It's amazing to work with you guys. We always do our best to finish our projects.</p>
								{{-- <a href="#" class="button-link noleftmargin">Read More</a> --}}
							</div>

							<div class="topmargin d-block d-lg-none d-xl-block"></div>

							<!-- Testimonials slider
							============================================= -->
							<div class="col-md-5 offset-md-1">
								<h4 class="dark">Testimonials Scroller</h4>
								<div class="fslider testimonial" data-animation="slide" data-arrows="false">
									<div class="flexslider">
										<div class="slider-wrap">
											<div class="slide">
												<div class="testimonial noborder noshadow">
													<div class="testi-content">
														<p class="bottommargin-sm font-primary">Proses pengerjaan aplikasi nya cepat dan tepat waktu. sesuai dengan keinginan klien dan ketika aplikasi dijalankan tidak ada kendala dan lancar. Januar Elsan penyelamat DEADLINE KU!</p>
														<div class="testi-meta">
															Lola Astri Nadita
															<span>Education Application Project</span>
															<div class="testimonials-rating">
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="slide">
												<div class="testimonial noborder noshadow">
													<div class="testi-content">
														<p class="bottommargin-sm font-primary">Pengerjaan project dengan Januar Elsan bisa dibilang sangat cepat. Pada awalnya saya mengira pengerjaan akan memakan waktu 3 minggu, karena sebelumnya saya pernah meminta project serupa ke orang lain memakan waktu hampir 1 bulan. Pengerjaan project dengan Januar hanya memakan waktu 1 minggu. Sangat cepat!.</p>
														<div class="testi-meta">
															Hafidz Noor Fauzi
															<span>Game Project</span>
															<div class="testimonials-rating">
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="slide">
												<div class="testimonial noborder noshadow">
													<div class="testi-content">
														<p class="bottommargin-sm font-primary">Bang Januar itu punya jiwa organisasi dan kepemimpinan, yang pasti tau cara untuk ngatur dan ngasih semangat timnya, dan tau banget apa yang harus dilakuin dalam jobdesknya dengan maksimal.</p>
														<div class="testi-meta">
															Asya Leztizia
															<span>KnocKnock Team Member - Graphic Designer</span>
															<div class="testimonials-rating">
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="slide">
												<div class="testimonial noborder noshadow">
													<div class="testi-content">
														<p class="bottommargin-sm font-primary">Januar merupakan rekan kerja yang ambisius, bekerja dengan efisien dan cerdas, permintaan bisa langsung dipenuhi dengan kemampuan teknis dan komunikasinya. Waktu pengerjaan? Bisa ditunggu ditempat.</p>
														<div class="testi-meta">
															Muhammad Hilmy A.N.
															<span>KnocKnock Team Member - UI/UX Designer</span>
															<div class="testimonials-rating">
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
															</div>
														</div>
													</div>
												</div>
											</div>
											{{-- <div class="slide">
												<div class="testimonial noborder noshadow">
													<div class="testi-content">
														<p class="bottommargin-sm font-primary">I've been using Canvas for months now and it has exceeded my expectations. Their support has been great too.</p>
														<div class="testi-meta">
															kwelch2
															<span>ThemeForest user</span>
															<div class="testimonials-rating">
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
																<i class="icon-star3"></i>
															</div>
														</div>
													</div>
												</div>
											</div> --}}
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

				<!-- Team Work
				============================================= -->
				<div class="section nobg nobottompadding nobottommargin clearfix">
					<div class="container clearfix">
						<div class="row clearfix">

							<div class="col-lg-5 order-lg-12">
								<div class="device-xl device-md topmargin-lg"></div>
								<h3 class="nobottommargin" style="font-size: 40px;">Great Team Work.</h3>
								<h3 class="t300 ls4 lowercase" style="font-size: 15px; color: #999;">Designed by Semicolonweb</h3>
								<p>Uniquely plagiarize dynamic convergence after equity invested experiences. Holisticly repurpose installed base infomediaries before web-enabled methods of empowerment.</p>
								<a href="#" class="button-link bottommargin">Read More</a>
							</div>

							<div class="col-lg-7 order-lg-1">
								<div style="position: relative; margin-bottom: 0;" class="ohidden" data-height-xl="520" data-height-lg="520" data-height-md="520" data-height-sm="500" data-height-xs="300">
									<img class="man" src="{{ asset('material/demos/business/images/sections/man.jpg')}}" style="position: absolute; top: 0; left: auto;" alt="Chrome">
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Brands Carousel
				============================================= -->
				<div class="section nomargin clearfix" style="padding: 80px 0">
					<div id="oc-clients-full" class="owl-carousel owl-carousel-full image-carousel carousel-widget" data-margin="0" data-nav="false" data-pagi="false" data-loop="true" data-autoplay="3000" data-items-xs="2" data-items-sm="3" data-items-md="5" data-items-lg="5" data-items-xl="5">

						<div class="oc-item"><a href="#"><img src="{{ asset('material/demos/business/images/clients/linkedin.svg')}}" style="height: 24px" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('material/demos/business/images/clients/nat-geo.svg')}}" style="height: 24px" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('material/demos/business/images/clients/jetblue.svg')}}" style="height: 24px" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('material/demos/business/images/clients/zillow.svg')}}" style="height: 24px" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('material/demos/business/images/clients/amazon.svg')}}" style="height: 24px" alt="Brands"></a></div>

					</div>
				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="noborder" style="padding: 30px 0; background-color: #FFF">

			<div class="container clearfix">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">
					<div class="col_one_fourth">
						<img src="{{ asset('material/tmg/logotekindo@2x.png')}}" alt="" height="100" style="margin-top: -30px">
					</div>
					<div class="col_three_fourth col_last">
						<div class="col_one_fourth">
							<div class="widget widget_links clearfix">
								<h4>Hire</h4>
								<ul>
									<li><a href="#">Documentation</a></li>
									<li><a href="#">Feedback</a></li>
									<li><a href="#">Plugins</a></li>
									<li><a href="#">Support Forums</a></li>
									<li><a href="#">Themes</a></li>
								</ul>
							</div>
						</div>
						<div class="col_one_fourth">
							<div class="widget widget_links clearfix">
								<h4>Community</h4>
								<ul>
									<li><a href="#">Documentation</a></li>
									<li><a href="#">Feedback</a></li>
									<li><a href="#">Plugins</a></li>
									<li><a href="#">Support Forums</a></li>
									<li><a href="#">Themes</a></li>
								</ul>
							</div>
						</div>
						<div class="col_one_fourth">
							<div class="widget widget_links clearfix">
								<h4>Learn</h4>
								<ul>
									<li><a href="#">Documentation</a></li>
									<li><a href="#">Feedback</a></li>
									<li><a href="#">Plugins</a></li>
									<li><a href="#">Support Forums</a></li>
									<li><a href="#">Themes</a></li>
								</ul>
							</div>
						</div>
						<div class="col_one_fourth col_last">
							<div class="widget widget_links clearfix">
								<h4>About</h4>
								<ul>
									<li><a href="#">Documentation</a></li>
									<li><a href="#">Feedback</a></li>
									<li><a href="#">Plugins</a></li>
									<li><a href="#">Support Forums</a></li>
									<li><a href="#">Themes</a></li>
								</ul>
							</div>
						</div>
						<div class="clear"></div>
						<div class="line line-sm"></div>
						<div class="col_two_third">
							<small class="t300" style="color: #AAA">Copyrights &copy; 2017 All Rights Reserved by Canvas Inc.</small>
						</div>
						<div class="col_one_third col_last">
							<div class="fright clearfix">
								<a href="#" class="social-icon si-mini si-rounded si-colored si-facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon si-mini si-rounded si-colored si-twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon si-mini si-rounded si-colored si-gplus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>

								<a href="#" class="social-icon si-mini si-rounded si-colored si-pinterest">
									<i class="icon-pinterest"></i>
									<i class="icon-pinterest"></i>
								</a>

								<a href="#" class="social-icon si-mini si-rounded si-colored si-vimeo">
									<i class="icon-vimeo"></i>
									<i class="icon-vimeo"></i>
								</a>

								<a href="#" class="social-icon si-mini si-rounded si-colored si-instagram">
									<i class="icon-instagram"></i>
									<i class="icon-instagram"></i>
								</a>
							</div>
						</div>
					</div>
				</div>

			</div>

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="{{ asset('material/js/jquery.js')}}"></script>
	<script src="{{ asset('material/js/plugins.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('material/js/functions.js')}}"></script>

	<script>
		// Owl Carousel Scripts
		$('#oc-features').owlCarousel({
			items: 1,
			margin: 60,
		    nav: true,
		    navText: ['<i class="icon-line-arrow-left"></i>','<i class="icon-line-arrow-right"></i>'],
		    dots: false,
		    stagePadding: 30,
		    responsive:{
				768: { items: 2 },
				1200: { stagePadding: 200 }
			},
		});
	</script>

</body>
</html>