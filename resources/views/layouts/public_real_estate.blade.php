<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>{{ env('APP_NAME') }}</title>	

		<meta name="keywords" content="{{  env('APP_NAME') }}" />
		<meta name="description" content="{{  env('APP_NAME') }}">
		<meta name="author" content="Mr H & Mr S">

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ asset('assets_public/img/favicon.ico') }}" type="image/x-icon" />
		<link rel="apple-touch-icon" href="{{ asset('assets_public/img/apple-touch-icon.png') }}">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('assets_public/vendor/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets_public/vendor/fontawesome-free/css/all.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets_public/vendor/animate/animate.compat.css') }}">
		<link rel="stylesheet" href="{{ asset('assets_public/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets_public/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets_public/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets_public/vendor/magnific-popup/magnific-popup.min.css') }}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{ asset('assets_public/css/theme.css') }}">
		<link rel="stylesheet" href="{{ asset('assets_public/css/theme-elements.css') }}">
		<link rel="stylesheet" href="{{ asset('assets_public/css/theme-blog.css') }}">
		<link rel="stylesheet" href="{{ asset('assets_public/css/theme-shop.css') }}">

		<!-- Demo CSS -->
		<link rel="stylesheet" href="{{ asset('assets_public/css/demos/demo-real-estate.css') }}">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="{{ asset('assets_public/css/skins/skin-real-estate.css') }}">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{ asset('assets_public/css/custom.css') }}">

		<!-- Head Libs -->
		<script src="{{ asset('assets_public/vendor/modernizr/modernizr.min.js') }}"></script>

	</head>
	<body class="loading-overlay-showing" data-loading-overlay data-plugin-options="{'hideDelay': 500}">
		<div class="loading-overlay">
			<div class="bounce-loader">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div>

		<div class="body">
			<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body border-top-0"> 
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="{{ url('/') }}">
											<img alt="Porto" width="123" height="48" data-sticky-width="123" data-sticky-height="48" src="{{ asset('assets_public/img/demos/real-estate/logo.png') }}">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-links order-2 order-lg-1">
										<div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-dropdown-modern header-nav-main-effect-2 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li>
														<a class="nav-link active" href="#">
															Pendaftaran
														</a>
													</li>
													<li>
														<a class="nav-link" href="#">
															Persyaratan
														</a>
													</li>
													<li>
														<a class="nav-link" href="#">
															Alur
														</a>
													</li>
													<li>
														<a class="nav-link" href="#">
															Profil Rusun
														</a>
													</li>
													<li>
														<a class="nav-link" href="#">
															Konsultasi
														</a>
													</li>
													<li>
														<a class="nav-link" href="#">
															<i class="fas fa-user me-2"></i>
															Login
														</a>
													</li>  
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main">

				<div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover nav-inside nav-inside-plus nav-dark nav-md nav-font-size-md show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 8000}" data-dynamic-height="['700px','700px','700px','700px','700px']" style="height: 700px;">
					<div class="owl-stage-outer">
						<div class="owl-stage">

							<!-- Carousel Slide 1 -->
							<div class="owl-item position-relative" style="background-image: url({{ asset('assets_public/img/demos/real-estate/slider/slide-1.jpg') }}); background-color: #F4F4F4; background-size: cover; background-position: center;">
								<div class="container position-relative z-index-1 h-100">
									<div class="d-flex flex-column justify-content-center h-100">

										<div class="card custom-card-info custom-card-info-shadow custom-card-info-slider bg-color-light border-0 box-shadow-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
											<div class="card-body overflow-hidden p-relative z-index-1">
												<span class="featured-tag bg-color-tertiary">Featured</span>
												<div class="custom-card-info-header">
													<strong class="text-dark text-5">$ 1.250.000</strong>
												</div>
												<div class="custom-card-info-content">
													<h4 class="text-dark mb-2 text-6">South Miami</h4>
													<ul class="list list-unstyled list-inline mb-0">
														<li class="list-inline-item me-4 mb-0">
															<strong class="text-default text-uppercase text-4">Beds: 3</strong>
														</li>
														<li class="list-inline-item me-4 mb-0">
															<strong class="text-default text-uppercase text-4">Baths: 2</strong>
														</li>
														<li class="list-inline-item me-0 mb-0">
															<strong class="text-default text-uppercase text-4">Sq Ft: 500</strong>
														</li>
													</ul>
													<div class="d-grid gap-2">
														<a href="demo-real-estate-properties-detail.html" class="d-inline-flex align-items-center btn btn-secondary font-weight-semibold border-0 p-relative text-3 text-uppercase mt-4 btn-px-4 btn-py-3">View Property
															<img width="27" height="27" src="{{ asset('assets_public/img/demos/real-estate/icons/arrow-right.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light p-absolute right-0 me-4'}" />
														</a>
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>

							<!-- Carousel Slide 2 -->
							<div class="owl-item position-relative" style="background-image: url({{ asset('assets_public/img/demos/real-estate/slider/slide-2.jpg') }}); background-color: #F4F4F4; background-size: cover; background-position: center;">
								<div class="container position-relative z-index-1 h-100">
									<div class="d-flex flex-column justify-content-center align-items-end h-100">

										<div class="card custom-card-info custom-card-info-shadow custom-card-info-slider bg-color-light border-0 box-shadow-1 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
											<div class="card-body overflow-hidden p-relative z-index-1">
												<span class="featured-tag bg-color-tertiary">Featured</span>
												<div class="custom-card-info-header">
													<strong class="text-dark text-5">$ 1.250.000</strong>
												</div>
												<div class="custom-card-info-content">
													<h4 class="text-dark mb-2 text-6">South Miami</h4>
													<ul class="list list-unstyled list-inline mb-0">
														<li class="list-inline-item me-4 mb-0">
															<strong class="text-default text-uppercase text-4">Beds: 3</strong>
														</li>
														<li class="list-inline-item me-4 mb-0">
															<strong class="text-default text-uppercase text-4">Baths: 2</strong>
														</li>
														<li class="list-inline-item me-0 mb-0">
															<strong class="text-default text-uppercase text-4">Sq Ft: 500</strong>
														</li>
													</ul>
													<div class="d-grid gap-2">
														<a href="demo-real-estate-properties-detail.html" class="d-inline-flex align-items-center btn btn-secondary font-weight-semibold border-0 p-relative text-3 text-uppercase mt-4 btn-px-4 btn-py-3">View Property
															<img width="27" height="27" src="{{ asset('assets_public/img/demos/real-estate/icons/arrow-right.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light p-absolute right-0 me-4'}" />
														</a>
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="owl-nav">
						<button type="button" role="presentation" class="owl-prev"></button>
						<button type="button" role="presentation" class="owl-next"></button>
					</div>
					<div class="owl-dots mb-5">
						<button role="button" class="owl-dot active"><span></span></button>
						<button role="button" class="owl-dot"><span></span></button>
						<button role="button" class="owl-dot"><span></span></button>
					</div>
				</div>

				<div class="container py-5 my-3">
                    <div id="scroller-anchor"></div>  
					<div class="row" id="scroller">
						<div class="col-lg-12">
							<h2 class="mb-4">Listing for <span class="text-color-secondary">Sale</span> or <span class="text-color-secondary">Rent</span></h2>

							<div class="row">
								<div class="col-12 col-sm-6 col-md-4 pb-4 mb-1">
									<div class="card custom-card-info custom-card-info-shadow border-0">
										<div class="card-body overflow-hidden p-relative z-index-1">
											<a href="demo-real-estate-properties-detail.html" class="text-decoration-none">
												<span class="custom-card-info-type bg-primary text-color-light px-3 py-1 text-1 font-weight-semibold text-uppercase d-inline-block p-absolute top-8 left-8">For Sale</span>
												<span class="custom-card-info-img d-block">
													<img src="{{ asset('assets_public/img/demos/real-estate/listing/listing-1-thumb.jpg') }}" class="img-fluid">
												</span>
												<span class="custom-card-info-header d-block p-relative">
													<strong class="text-dark text-4">$ 1.250.000</strong>
													<img width="27" height="27" src="{{ asset('assets_public/img/demos/real-estate/icons/arrow-right.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary custom-card-info-arrow p-absolute top-5 mt-2 me-3'}" />
												</span>
												<span class="custom-card-info-content d-block">
													<h4 class="text-dark mb-1 text-5">South Miami</h4>
													<ul class="list list-unstyled list-inline mb-0">
														<li class="list-inline-item me-2 mb-0">
															<strong class="text-default text-uppercase text-3">Beds: 3</strong>
														</li>
														<li class="list-inline-item me-2 mb-0">
															<strong class="text-default text-uppercase text-3">Baths: 2</strong>
														</li>
														<li class="list-inline-item me-0 mb-0">
															<strong class="text-default text-uppercase text-3">Sq Ft: 500</strong>
														</li>
													</ul>
												</span>
											</a>
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-6 col-md-4 pb-4 mb-1">
									<div class="card custom-card-info custom-card-info-shadow border-0">
										<div class="card-body overflow-hidden p-relative z-index-1">
											<a href="demo-real-estate-properties-detail.html" class="text-decoration-none">
												<span class="custom-card-info-type bg-primary text-color-light px-3 py-1 text-1 font-weight-semibold text-uppercase d-inline-block p-absolute top-8 left-8">For Sale</span>
												<span class="custom-card-info-img d-block">
													<img src="{{ asset('assets_public/img/demos/real-estate/listing/listing-2-thumb.jpg') }}" class="img-fluid">
												</span>
												<span class="custom-card-info-header d-block p-relative">
													<strong class="text-dark text-4">$ 1.250.000</strong>
													<img width="27" height="27" src="{{ asset('assets_public/img/demos/real-estate/icons/arrow-right.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary custom-card-info-arrow p-absolute top-5 mt-2 me-3'}" />
												</span>
												<span class="custom-card-info-content d-block">
													<h4 class="text-dark mb-1 text-5">South Miami</h4>
													<ul class="list list-unstyled list-inline mb-0">
														<li class="list-inline-item me-2 mb-0">
															<strong class="text-default text-uppercase text-3">Beds: 3</strong>
														</li>
														<li class="list-inline-item me-2 mb-0">
															<strong class="text-default text-uppercase text-3">Baths: 2</strong>
														</li>
														<li class="list-inline-item me-0 mb-0">
															<strong class="text-default text-uppercase text-3">Sq Ft: 500</strong>
														</li>
													</ul>
												</span>
											</a>
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-6 col-md-4 pb-4 mb-1">
									<div class="card custom-card-info custom-card-info-shadow border-0">
										<div class="card-body overflow-hidden p-relative z-index-1">
											<a href="demo-real-estate-properties-detail.html" class="text-decoration-none">
												<span class="custom-card-info-type bg-primary text-color-light px-3 py-1 text-1 font-weight-semibold text-uppercase d-inline-block p-absolute top-8 left-8">For Sale</span>
												<span class="custom-card-info-img d-block">
													<img src="{{ asset('assets_public/img/demos/real-estate/listing/listing-3-thumb.jpg') }}" class="img-fluid">
												</span>
												<span class="custom-card-info-header d-block p-relative">
													<strong class="text-dark text-4">$ 1.250.000</strong>
													<img width="27" height="27" src="{{ asset('assets_public/img/demos/real-estate/icons/arrow-right.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary custom-card-info-arrow p-absolute top-5 mt-2 me-3'}" />
												</span>
												<span class="custom-card-info-content d-block">
													<h4 class="text-dark mb-1 text-5">South Miami</h4>
													<ul class="list list-unstyled list-inline mb-0">
														<li class="list-inline-item me-2 mb-0">
															<strong class="text-default text-uppercase text-3">Beds: 3</strong>
														</li>
														<li class="list-inline-item me-2 mb-0">
															<strong class="text-default text-uppercase text-3">Baths: 2</strong>
														</li>
														<li class="list-inline-item me-0 mb-0">
															<strong class="text-default text-uppercase text-3">Sq Ft: 500</strong>
														</li>
													</ul>
												</span>
											</a>
										</div>
									</div>
								</div>  
							</div> 

						</div>
                    </div> 
					<div class="row" > 
						<div class="col-lg-9">
							<h2 class="mb-4">Listing for <span class="text-color-secondary">Sale</span> or <span class="text-color-secondary">Rent</span></h2>

							<div class="row">
								<div class="col-12 col-sm-6 col-md-4 pb-4 mb-1">
									<div class="card custom-card-info custom-card-info-shadow border-0">
										<div class="card-body overflow-hidden p-relative z-index-1">
											<a href="demo-real-estate-properties-detail.html" class="text-decoration-none">
												<span class="custom-card-info-type bg-primary text-color-light px-3 py-1 text-1 font-weight-semibold text-uppercase d-inline-block p-absolute top-8 left-8">For Sale</span>
												<span class="custom-card-info-img d-block">
													<img src="{{ asset('assets_public/img/demos/real-estate/listing/listing-1-thumb.jpg') }}" class="img-fluid">
												</span>
												<span class="custom-card-info-header d-block p-relative">
													<strong class="text-dark text-4">$ 1.250.000</strong>
													<img width="27" height="27" src="{{ asset('assets_public/img/demos/real-estate/icons/arrow-right.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary custom-card-info-arrow p-absolute top-5 mt-2 me-3'}" />
												</span>
												<span class="custom-card-info-content d-block">
													<h4 class="text-dark mb-1 text-5">South Miami</h4>
													<ul class="list list-unstyled list-inline mb-0">
														<li class="list-inline-item me-2 mb-0">
															<strong class="text-default text-uppercase text-3">Beds: 3</strong>
														</li>
														<li class="list-inline-item me-2 mb-0">
															<strong class="text-default text-uppercase text-3">Baths: 2</strong>
														</li>
														<li class="list-inline-item me-0 mb-0">
															<strong class="text-default text-uppercase text-3">Sq Ft: 500</strong>
														</li>
													</ul>
												</span>
											</a>
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-6 col-md-4 pb-4 mb-1">
									<div class="card custom-card-info custom-card-info-shadow border-0">
										<div class="card-body overflow-hidden p-relative z-index-1">
											<a href="demo-real-estate-properties-detail.html" class="text-decoration-none">
												<span class="custom-card-info-type bg-primary text-color-light px-3 py-1 text-1 font-weight-semibold text-uppercase d-inline-block p-absolute top-8 left-8">For Sale</span>
												<span class="custom-card-info-img d-block">
													<img src="{{ asset('assets_public/img/demos/real-estate/listing/listing-2-thumb.jpg') }}" class="img-fluid">
												</span>
												<span class="custom-card-info-header d-block p-relative">
													<strong class="text-dark text-4">$ 1.250.000</strong>
													<img width="27" height="27" src="{{ asset('assets_public/img/demos/real-estate/icons/arrow-right.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary custom-card-info-arrow p-absolute top-5 mt-2 me-3'}" />
												</span>
												<span class="custom-card-info-content d-block">
													<h4 class="text-dark mb-1 text-5">South Miami</h4>
													<ul class="list list-unstyled list-inline mb-0">
														<li class="list-inline-item me-2 mb-0">
															<strong class="text-default text-uppercase text-3">Beds: 3</strong>
														</li>
														<li class="list-inline-item me-2 mb-0">
															<strong class="text-default text-uppercase text-3">Baths: 2</strong>
														</li>
														<li class="list-inline-item me-0 mb-0">
															<strong class="text-default text-uppercase text-3">Sq Ft: 500</strong>
														</li>
													</ul>
												</span>
											</a>
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-6 col-md-4 pb-4 mb-1">
									<div class="card custom-card-info custom-card-info-shadow border-0">
										<div class="card-body overflow-hidden p-relative z-index-1">
											<a href="demo-real-estate-properties-detail.html" class="text-decoration-none">
												<span class="custom-card-info-type bg-primary text-color-light px-3 py-1 text-1 font-weight-semibold text-uppercase d-inline-block p-absolute top-8 left-8">For Sale</span>
												<span class="custom-card-info-img d-block">
													<img src="{{ asset('assets_public/img/demos/real-estate/listing/listing-3-thumb.jpg') }}" class="img-fluid">
												</span>
												<span class="custom-card-info-header d-block p-relative">
													<strong class="text-dark text-4">$ 1.250.000</strong>
													<img width="27" height="27" src="{{ asset('assets_public/img/demos/real-estate/icons/arrow-right.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary custom-card-info-arrow p-absolute top-5 mt-2 me-3'}" />
												</span>
												<span class="custom-card-info-content d-block">
													<h4 class="text-dark mb-1 text-5">South Miami</h4>
													<ul class="list list-unstyled list-inline mb-0">
														<li class="list-inline-item me-2 mb-0">
															<strong class="text-default text-uppercase text-3">Beds: 3</strong>
														</li>
														<li class="list-inline-item me-2 mb-0">
															<strong class="text-default text-uppercase text-3">Baths: 2</strong>
														</li>
														<li class="list-inline-item me-0 mb-0">
															<strong class="text-default text-uppercase text-3">Sq Ft: 500</strong>
														</li>
													</ul>
												</span>
											</a>
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-6 col-md-4 pb-4 mb-1">
									<div class="card custom-card-info custom-card-info-shadow border-0">
										<div class="card-body overflow-hidden p-relative z-index-1">
											<a href="demo-real-estate-properties-detail.html" class="text-decoration-none">
												<span class="custom-card-info-type bg-primary text-color-light px-3 py-1 text-1 font-weight-semibold text-uppercase d-inline-block p-absolute top-8 left-8">For Sale</span>
												<span class="custom-card-info-img d-block">
													<img src="{{ asset('assets_public/img/demos/real-estate/listing/listing-4-thumb.jpg') }}" class="img-fluid">
												</span>
												<span class="custom-card-info-header d-block p-relative">
													<strong class="text-dark text-4">$ 1.250.000</strong>
													<img width="27" height="27" src="{{ asset('assets_public/img/demos/real-estate/icons/arrow-right.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary custom-card-info-arrow p-absolute top-5 mt-2 me-3'}" />
												</span>
												<span class="custom-card-info-content d-block">
													<h4 class="text-dark mb-1 text-5">South Miami</h4>
													<ul class="list list-unstyled list-inline mb-0">
														<li class="list-inline-item me-2 mb-0">
															<strong class="text-default text-uppercase text-3">Beds: 3</strong>
														</li>
														<li class="list-inline-item me-2 mb-0">
															<strong class="text-default text-uppercase text-3">Baths: 2</strong>
														</li>
														<li class="list-inline-item me-0 mb-0">
															<strong class="text-default text-uppercase text-3">Sq Ft: 500</strong>
														</li>
													</ul>
												</span>
											</a>
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-6 col-md-4 pb-4 mb-1">
									<div class="card custom-card-info custom-card-info-shadow border-0">
										<div class="card-body overflow-hidden p-relative z-index-1">
											<a href="demo-real-estate-properties-detail.html" class="text-decoration-none">
												<span class="custom-card-info-type bg-primary text-color-light px-3 py-1 text-1 font-weight-semibold text-uppercase d-inline-block p-absolute top-8 left-8">For Sale</span>
												<span class="custom-card-info-img d-block">
													<img src="{{ asset('assets_public/img/demos/real-estate/listing/listing-5-thumb.jpg') }}" class="img-fluid">
												</span>
												<span class="custom-card-info-header d-block p-relative">
													<strong class="text-dark text-4">$ 1.250.000</strong>
													<img width="27" height="27" src="{{ asset('assets_public/img/demos/real-estate/icons/arrow-right.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary custom-card-info-arrow p-absolute top-5 mt-2 me-3'}" />
												</span>
												<span class="custom-card-info-content d-block">
													<h4 class="text-dark mb-1 text-5">South Miami</h4>
													<ul class="list list-unstyled list-inline mb-0">
														<li class="list-inline-item me-2 mb-0">
															<strong class="text-default text-uppercase text-3">Beds: 3</strong>
														</li>
														<li class="list-inline-item me-2 mb-0">
															<strong class="text-default text-uppercase text-3">Baths: 2</strong>
														</li>
														<li class="list-inline-item me-0 mb-0">
															<strong class="text-default text-uppercase text-3">Sq Ft: 500</strong>
														</li>
													</ul>
												</span>
											</a>
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-6 col-md-4 pb-4 mb-1">
									<div class="card custom-card-info custom-card-info-shadow border-0">
										<div class="card-body overflow-hidden p-relative z-index-1">
											<a href="demo-real-estate-properties-detail.html" class="text-decoration-none">
												<span class="custom-card-info-type bg-primary text-color-light px-3 py-1 text-1 font-weight-semibold text-uppercase d-inline-block p-absolute top-8 left-8">For Sale</span>
												<span class="custom-card-info-img d-block">
													<img src="{{ asset('assets_public/img/demos/real-estate/listing/listing-6-thumb.jpg') }}" class="img-fluid">
												</span>
												<span class="custom-card-info-header d-block p-relative">
													<strong class="text-dark text-4">$ 1.250.000</strong>
													<img width="27" height="27" src="{{ asset('assets_public/img/demos/real-estate/icons/arrow-right.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary custom-card-info-arrow p-absolute top-5 mt-2 me-3'}" />
												</span>
												<span class="custom-card-info-content d-block">
													<h4 class="text-dark mb-1 text-5">South Miami</h4>
													<ul class="list list-unstyled list-inline mb-0">
														<li class="list-inline-item me-2 mb-0">
															<strong class="text-default text-uppercase text-3">Beds: 3</strong>
														</li>
														<li class="list-inline-item me-2 mb-0">
															<strong class="text-default text-uppercase text-3">Baths: 2</strong>
														</li>
														<li class="list-inline-item me-0 mb-0">
															<strong class="text-default text-uppercase text-3">Sq Ft: 500</strong>
														</li>
													</ul>
												</span>
											</a>
										</div>
									</div>
								</div>
							</div>

							<div class="row justify-content-md-center pb-2">
								<div class="col-md-4">
									<div class="d-grid gap-2">
										<a href="#" class="btn btn-secondary font-weight-semibold border-0 p-relative text-3 text-uppercase mt-1 btn-px-5 btn-py-3">View More
										</a>
									</div>
								</div>
							</div>

							<hr class="my-5">

							<h2 class="mb-3 pb-1">Exclusive Locations</h2>

							<div class="row">
								<div class="col-md-4 pb-4 mb-1">
									<div class="card custom-card-info custom-card-info-shadow custom-card-info-locations border-0">
										<div class="card-body overflow-hidden overlay overlay-color-dark overlay-show overlay-op-7 p-relative z-index-1">
											<a href="#" class="text-decoration-none">
												<span class="custom-card-info-img d-block">
													<img src="{{ asset('assets_public/img/demos/real-estate/backgrounds/bg-locations-1.jpg') }}" class="img-fluid w-100">
													<span class="custom-card-info-desc">
														<strong class="text-color-light font-weight-semibold text-5 d-block mb-1 text-center">Palm Beach</strong>
														<span class="custom-card-info-type bg-primary text-color-light px-3 py-1 text-1 font-weight-semibold text-uppercase d-inline-block">91 Properties</span>
													</span>
												</span>
											</a>
										</div>
									</div>
								</div>
								<div class="col-md-4 pb-4 mb-1">
									<div class="card custom-card-info custom-card-info-shadow custom-card-info-locations border-0">
										<div class="card-body overflow-hidden overlay overlay-color-dark overlay-show overlay-op-7 p-relative z-index-1">
											<a href="#" class="text-decoration-none">
												<span class="custom-card-info-img d-block">
													<img src="{{ asset('assets_public/img/demos/real-estate/backgrounds/bg-locations-2.jpg') }}" class="img-fluid w-100">
													<span class="custom-card-info-desc">
														<strong class="text-color-light font-weight-semibold text-5 d-block mb-1 text-center">Fischer Island</strong>
														<span class="custom-card-info-type bg-primary text-color-light px-3 py-1 text-1 font-weight-semibold text-uppercase d-inline-block">211 Properties</span>
													</span>
												</span>
											</a>
										</div>
									</div>
								</div>
								<div class="col-md-4 pb-4 mb-1">
									<div class="card custom-card-info custom-card-info-shadow custom-card-info-locations border-0">
										<div class="card-body overflow-hidden overlay overlay-color-dark overlay-show overlay-op-7 p-relative z-index-1">
											<a href="#" class="text-decoration-none">
												<span class="custom-card-info-img d-block">
													<img src="{{ asset('assets_public/img/demos/real-estate/backgrounds/bg-locations-3.jpg') }}" class="img-fluid w-100">
													<span class="custom-card-info-desc">
														<strong class="text-color-light font-weight-semibold text-5 d-block mb-1 text-center">South Miami</strong>
														<span class="custom-card-info-type bg-primary text-color-light px-3 py-1 text-1 font-weight-semibold text-uppercase d-inline-block">231 Properties</span>
													</span>
												</span>
											</a>
										</div>
									</div>
								</div>
							</div>

						</div>
						<div class="col-lg-3">
							<h3 class="mt-2">Special Offers</h3>

							<div class="row">
								<div class="col-12 col-sm-6 col-lg-12">
									<div class="card custom-card-info custom-card-info-shadow custom-card-info-special-offers border-0 mb-4">
										<div class="card-body overflow-hidden overlay overlay-color-dark overlay-show overlay-op-8 p-relative z-index-1">
											<span class="custom-card-info-img d-block">
												<img src="{{ asset('assets_public/img/demos/real-estate/backgrounds/bg-special-offers-1.jpg') }}" class="img-fluid w-100">
												<span class="custom-card-info-desc">
													<h3 class="text-color-light font-weight-semibold text-5 d-block mb-1 text-center">Amazing Houses<br>Collection</h3>
													<strong class="text-color-light font-weight-medium text-uppercase text-3 d-block mb-1 text-center">FROM $100.000</strong>
													<a href="#" class="btn btn-secondary font-weight-semibold border-0 p-relative text-2 text-uppercase mt-1 btn-px-4 btn-py-2">View More</a>

												</span>
											</span>
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-6 col-lg-12">
									<div class="card custom-card-info custom-card-info-shadow custom-card-info-special-offers border-0 mb-4">
										<div class="card-body overflow-hidden overlay overlay-color-dark overlay-show overlay-op-8 p-relative z-index-1">
											<span class="custom-card-info-img d-block">
												<img src="{{ asset('assets_public/img/demos/real-estate/backgrounds/bg-special-offers-2.jpg') }}" class="img-fluid w-100">
												<div class="p-absolute top-10 left-10 p-4 z-index-2">
													<h3 class="text-color-light font-weight-semibold text-5 d-block mb-1">Exclusive<br>Condominium</h3>
													<strong class="text-color-light font-weight-medium text-uppercase text-3 d-block mb-1">Miami Beach</strong>
												</div>
												<div class="p-absolute bottom-10 left-10 p-4 z-index-2">
													<a href="#" class="btn btn-secondary font-weight-semibold border-0 p-relative text-2 text-uppercase mt-1 btn-px-4 btn-py-2">View More</a>
												</div>
											</span>
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-6 col-lg-12">
									<div class="card custom-card-info custom-card-info-shadow bg-color-primary text-color-light border-0 mb-4">
										<div class="card-body bg-transparent p-relative p-4 my-2 text-center z-index-1">
											<h3 class="text-color-light font-weight-semibold text-5 d-block mb-4">Our Agents</h3>

											<div class="owl-carousel owl-theme dots-light mb-0 pb-0" data-plugin-options="{'items': 1, 'autoplay': true, 'autoplayTimeout': 5000, 'margin': 10}">
												<div>
													<a href="demo-real-estate-agents-detail.html" class="text-decoration-none">
														<img alt="" class="img-fluid rounded-circle m-auto" src="{{ asset('assets_public/img/team/team-5.jpg') }}" style="max-width: 110px;">
														<strong class="text-color-light font-weight-semibold text-4 line-height-5 d-block mt-3 mb-1 text-center">John Doe</strong>
													</a>
													<a class="opacity-7 text-color-light d-block text-center line-height-5 text-3" href="tel:12345678">(800) 123-4567</a>
													<a class="opacity-7 text-color-light d-block text-center line-height-5 text-3 pb-2" href="mailto:you@domain.com">you@domain.com</a>
												</div>
												<div>
													<a href="demo-real-estate-agents-detail.html" class="text-decoration-none">
														<img alt="" class="img-fluid rounded-circle m-auto" src="{{ asset('assets_public/img/team/team-4.jpg') }}" style="max-width: 110px;">
														<strong class="text-color-light font-weight-semibold text-4 line-height-5 d-block mt-3 mb-1 text-center">Janice Doe</strong>
													</a>
													<a class="opacity-7 text-color-light d-block text-center line-height-5 text-3" href="tel:12345678">(800) 123-4567</a>
													<a class="opacity-7 text-color-light d-block text-center line-height-5 text-3 pb-2" href="mailto:you@domain.com">you@domain.com</a>
												</div>
												<div>
													<a href="demo-real-estate-agents-detail.html" class="text-decoration-none">
														<img alt="" class="img-fluid rounded-circle m-auto" src="{{ asset('assets_public/img/team/team-2.jpg') }}" style="max-width: 110px;">
														<strong class="text-color-light font-weight-semibold text-4 line-height-5 d-block mt-3 mb-1 text-center">Lisa Doe</strong>
													</a>
													<a class="opacity-7 text-color-light d-block text-center line-height-5 text-3" href="tel:12345678">(800) 123-4567</a>
													<a class="opacity-7 text-color-light d-block text-center line-height-5 text-3 pb-2" href="mailto:you@domain.com">you@domain.com</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-6 col-lg-12">
									<div class="card custom-card-info bg-color-quaternary border-0 mb-4">
										<div class="card-body bg-transparent p-relative p-4 m-2 z-index-1">
											<h3 class="text-color-dark font-weight-semibold text-5 d-block mt-1 mb-2">Newsletter</h3>

											<p>
												Subscribe and be the first to know about our best offers
											</p>

											<div class="alert alert-success d-none" id="newsletterSuccess">
												<strong>Success!</strong> You've been added to our email list.
											</div>

											<div class="alert alert-danger d-none" id="newsletterError"></div>

											<form id="newsletterForm" class="form-style-3" action="php/newsletter-subscribe.php" method="POST">
												<input class="form-control bg-color-light box-shadow-none border-0 mb-2" placeholder="Your Name *" name="newsletterName" id="newsletterName" type="text">
												<input class="form-control bg-color-light box-shadow-none border-0 mb-2" placeholder="Your Email Address *" name="newsletterEmail" id="newsletterEmail" type="email">
												<div class="d-grid gap-2">
													<button class="btn btn-secondary font-weight-semibold border-0 p-relative text-2 text-uppercase mt-1 btn-px-4 btn-py-2 mb-2" type="submit">Subscribe</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<footer id="footer" class="m-0">
					<div class="container py-3">
						<div class="row py-5">
							<div class="col-md-4 col-lg-3">
								<h4 class="mb-3">Porto Real Estate</h4>
								<p class="mb-0">
									123 Porto Blvd, Suite 100<br>
									New York, NY<br>
									Phone : 123-456-7890<br>
									Email : <a class="text-color-secondary" href="mailto:mail@example.com">mail@example.com</a>
								</p>
							</div>
							<div class="col-md-2">
								<h4 class="mb-3">Properties</h4>
								<nav class="nav-footer">
									<ul class="list-unstyled mb-0">
										<li>
											<a href="#" class="custom-color-2 text-decoration-none">
												For Sale
											</a>
										</li>
										<li>
											<a href="#" class="custom-color-2 text-decoration-none">
												For Rent
											</a>
										</li>
									</ul>
								</nav>
							</div>
							<div class="col-md-2">
								<h4 class="mb-3">Links</h4>
								<nav class="nav-footer">
									<ul class="list-unstyled mb-0">
										<li>
											<a href="demo-real-estate-agents.html" class="custom-color-2 text-decoration-none">
												Agents
											</a>
										</li>
										<li>
											<a href="demo-real-estate-who-we-are.html" class="custom-color-2 text-decoration-none">
												Who We Are
											</a>
										</li>
										<li>
											<a href="demo-real-estate-contact.html" class="custom-color-2 text-decoration-none">
												Contact
											</a>
										</li>
									</ul>
								</nav>
							</div>
							<div class="col-md-4 col-lg-5">
								<h4 class="mb-3">Latest Tweet</h4>
								<div id="tweet" class="twitter" data-plugin-tweets data-plugin-options="{'username': '', 'count': 1}">
									<p>Please wait...</p>
								</div>
							</div>
						</div>
					</div>
					<div class="footer-copyright pb-0">
						<div class="container">
							<div class="row ">
								<div class="col text-center py-4">
									<p>© Copyright 2021. All Rights Reserved.</p>
								</div>
							</div>
						</div>
					</div>
				</footer>
			</div>
		</div>

		<!-- Vendor -->
		<script src="{{ asset('assets_public/vendor/jquery/jquery.min.js') }}"></script>
		<script src="{{ asset('assets_public/vendor/jquery.appear/jquery.appear.min.js') }}"></script>
		<script src="{{ asset('assets_public/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
		<script src="{{ asset('assets_public/vendor/jquery.cookie/jquery.cookie.min.js') }}"></script>
		<script src="{{ asset('assets_public/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('assets_public/vendor/jquery.validation/jquery.validate.min.js') }}"></script>
		<script src="{{ asset('assets_public/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
		<script src="{{ asset('assets_public/vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
		<script src="{{ asset('assets_public/vendor/lazysizes/lazysizes.min.js') }}"></script>
		<script src="{{ asset('assets_public/vendor/isotope/jquery.isotope.min.js') }}"></script>
		<script src="{{ asset('assets_public/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('assets_public/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('assets_public/vendor/vide/jquery.vide.min.js') }}"></script>
		<script src="{{ asset('assets_public/vendor/vivus/vivus.min.js') }}"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{ asset('assets_public/js/theme.js') }}"></script>

		<!-- Current Page Vendor and Views -->
		<script src="{{ asset('assets_public/js/views/view.contact.js') }}"></script>

		<!-- Demo -->
		<script src="{{ asset('assets_public/js/demos/demo-real-estate.js') }}"></script>

		<!-- Theme Custom -->
		<script src="{{ asset('assets_public/js/custom.js') }}"></script>

		<!-- Theme Initialization Files -->
		<script src="{{ asset('assets_public/js/theme.init.js') }}"></script>
        <script>
            function moveScroller() {
                var $anchor = $("#scroller-anchor");
                var $scroller = $('#scroller');

                var move = function() {
                    var st = $(window).scrollTop();
                    var ot = $anchor.offset().top;
                    if(st > ot) {
                        $scroller.css({
                            position: "fixed",
                            top: "100px"
                        });
                    } else {
                        $scroller.css({
                            position: "relative",
                            top: ""
                        });
                    }
                };
                $(window).scroll(move);
                move();
            }
        </script>
        <script type="text/javascript"> 
        $(function() {
            // moveScroller();
        });
        </script> 
	</body>
</html>
