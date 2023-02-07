<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>@yield('judul') {{ env('APP_NAME') }}</title>	

		<meta name="keywords" content="{{  env('APP_NAME') }}" />
		<meta name="description" content="{{  env('APP_NAME') }}">
		<meta name="author" content="Mr H & Mr S">
		
		@stack('meta')

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ asset('img/logo_login.png') }}" type="image/x-icon" />
		<link rel="apple-touch-icon" href="{{ asset('assets_public/img/apple-touch-icon.png') }}">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		{{-- <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css"> --}}
		
		<link rel="stylesheet" href="{{ asset('css/font_devanagari.css') }}">
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

		@stack('css')
	</head>
	<body class="loading-overlay-showing" data-loading-overlay data-plugin-options="{'hideDelay': 500, 'effect': 'cubes'}">
		<div class="loading-overlay">
			<div class="bounce-loader">
				<div class="cssload-thecube">
					<div class="cssload-cube cssload-c1"></div>
					<div class="cssload-cube cssload-c2"></div>
					<div class="cssload-cube cssload-c4"></div>
					<div class="cssload-cube cssload-c3"></div>
				</div>
			</div>
		</div>
		

		<div class="body">
			@if(Request::is('/'))
			@include('layouts.public_navbar_onepage')
			@else 
			@include('layouts.public_navbar')
			@endif 

			<div role="main" class="main">

				@yield('tempat_content')


				<section class="section bg-primary border-0 m-0" style="background-color: rgb(28, 95, 168) !important">
					<div class="container"> 
						<hr class="text-color-light" style="background-color: white">
						<div class="row justify-content-center text-center text-lg-left py-4">
							<div class="col-lg-auto appear-animation" data-appear-animation="fadeInRightShorter">
								<div class="feature-box feature-box-style-2 d-block d-lg-flex mb-4 mb-lg-0" align="center">
									<h4 class="text-color-light">
										DINAS PERUMAHAN RAKYAT DAN KAWASAN PERMUKIMAN SERTA PERTANAHAN
									</h4><br>
								</div>
							</div>
						</div>
						<div class="row justify-content-center text-center text-lg-left py-4">
							<div class="col-lg-auto appear-animation" data-appear-animation="fadeInRightShorter">
								<div class="feature-box feature-box-style-2 d-block d-lg-flex mb-4 mb-lg-0">
									<div class="feature-box-icon">
										<i class="icon-location-pin icons text-color-light"></i>
									</div>
									<div class="feature-box-info pl-1">
										<h5 class="font-weight-light text-color-light opacity-7 mb-0">ALAMAT</h5>
										<p class="text-color-light font-weight-semibold mb-0">
											Jalan Taman Surya Nomor 1 Surabaya (60272)
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-auto appear-animation" data-appear-animation="fadeInRightShorter"
								 data-appear-animation-delay="200">
								<div class="feature-box feature-box-style-2 d-block d-lg-flex mb-4 mb-lg-0 px-xl-4 mx-lg-5">
									<div class="feature-box-icon">
										<i class="icon-call-out icons text-color-light"></i>
									</div>
									<div class="feature-box-info pl-1">
										<h5 class="font-weight-light text-color-light opacity-7 mb-0">TELP</h5>
										<a href="tel:+62315312144"
										   class="text-color-light font-weight-semibold text-decoration-none">
											Telp. (031) 5312144 Psw. 130, Fax (031) 5458031
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="row justify-content-center text-center text-lg-left py-4">
							<div class="col-lg-auto appear-animation" data-appear-animation="fadeInRightShorter">
								<div class="feature-box feature-box-style-2 d-block d-lg-flex mb-4 mb-lg-0">
									<div class="feature-box-icon">
										<img src="{{ asset('icon-ig.png') }}" style="filter: invert(1);">
									</div>
									<div class="feature-box-info pl-1"> 
										<a href="javascript:;">
											<p class="text-color-light font-weight-semibold mb-0">
													INSTAGRAM
											</p>
										</a> 
									</div>
								</div>
							</div>  
						</div>
						<div class="row justify-content-center text-center text-lg-left py-4">
							<div class="col-lg-auto appear-animation" data-appear-animation="fadeInRightShorter">
								<div class="feature-box feature-box-style-2 d-block d-lg-flex mb-4 mb-lg-0"> 
									<div class="feature-box-info pl-1"> 
										<a target="_blank" href="https://www.instagram.com/omahrakyat.surabaya/">
											<p class="text-color-light font-weight-semibold mb-0">
													@omahrakyat.surabaya
											</p>
										</a> 
									</div>
								</div>
							</div> 
							<div class="col-lg-auto appear-animation" data-appear-animation="fadeInRightShorter">
								<div class="feature-box feature-box-style-2 d-block d-lg-flex mb-4 mb-lg-0"> 
									<div class="feature-box-info pl-1"> 
										<a target="_blank" href="https://www.instagram.com/disperkim.surabaya/">
											<p class="text-color-light font-weight-semibold mb-0">
													@disperkim.surabaya
											</p>
										</a>
									</div>
								</div>
							</div> 
						</div>
					</div>
				</section>
				<footer id="footer" class="m-0"> 
					<div class="footer-copyright pb-0">
						<div class="container">
							<div class="row ">
								<div class="col text-center py-4">
									<p><strong>DPRKPP Surabaya</strong> - © Copyright 2022. All Rights Reserved.</p>
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
		<script src="{{ asset('js/sharepublic.js') }}"></script>

		<script src="{{ asset('js/sweetalert2.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/plugins/forms/selects/select2.min.js') }}"></script>
		{{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
		
		@if (session()->has('status'))
			<script type="text/javascript">
			alertKu('success', `{!! session()->get('status') !!}`);
			</script>
			{{session()->forget('status')}}
		@endif   
		@if (session()->has('statusT'))
			<script type="text/javascript">
			alertKu('error', `{!! session()->get('statusT') !!}`);
			</script>
			{{session()->forget('statusT')}}
		@endif   
		@stack('scripts')
	</body>
</html>
