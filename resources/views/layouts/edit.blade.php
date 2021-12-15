<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Riwayat</title>	
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/tes.jpg">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/chosen.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/color-01.css">
</head>
<body class="home-page home-01 ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul>
								<li class="menu-item" >
								</li>
							</ul>
						</div>
						<div class="topbar-menu right-menu">
							<ul>
							@if (Auth::user())
							<li class="menu-item" > <a>Halo, {{Auth::user() -> name}} </a></li>
							<li class="menu-item" >
								<form method="POST" action="{{ route('logout') }}">
                            		@csrf
                            	<x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                	&nbsp;&nbsp;&nbsp;{{ __('Log Out') }}
                            	</x-dropdown-link>
                        		</form>
								</li>
								@else
								<li class="menu-item" ><a title="Register or Login" href="{{ route('login') }}">Login</a></li>
								<li class="menu-item" ><a title="Register or Login" href="{{ route('register') }}">Register</a></li>
								@endif
							</ul>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="mid-section main-info-area">

						<div class="wrap-logo-top left-section">
							<a href="index.html" class="link-to-home"><img src="assets/images/yoy.png" alt="mercado"></a>
						</div>

						<div class="wrap-search center-section">
							<!-- <div class="wrap-search-form">
								<form action="#" id="form-search-top" name="form-search-top">
									<input type="text" name="search" id="myInput" onkeyup="myFunction1()" placeholder="Search here...">
									<button form="form-search-top" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
									<div class="wrap-list-cate">
										<input type="hidden" name="product-cate" value="0" id="product-cate">
										<a href="#" class="link-control">All Category</a>
										<ul class="list-cate">
											<li class="level-0">All Category</li>
											<li class="level-1">-Barang Elektronik</li>
											<li class="level-1">-Peralatan & Perlengkapan</li>
											<li class="level-1">-Mainan Anak</li>
											<li class="level-1">-Lain - Lain</li>
										</ul>
									</div>
								</form>
							</div> -->
						</div>
						</div>
					</div>
				</div>

					<div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item home-icon">
									<a href="dashboard" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item">
									<a href="tambah" class="link-term mercado-item-title">Tambah Barang</a>
								</li>
								<li class="menu-item">
									<a href="items" class="link-term mercado-item-title">List Barang</a>
								</li>
								<li class="menu-item">
									<a href="riwayat" class="link-term mercado-item-title">Riwayat</a>
								</li>																
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!--main area-->
	<main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="#" class="link">Halaman Utama</a></li>
					<li class="item-link"><span>riwayat</span></li>
				</ul>
			</div>
			<!-- <div class="row">
				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area"> -->
					<div class="row">
						<ul class="product-list grid-products equal-container" id="myUL">
							@foreach ($item as $barang)
							<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
								<div class="product product-style-3 equal-elem ">
									<div class="product-thumnail">
										<a href="detail.html" title="{{$barang->name}}">
											<figure><img src="{{asset('storage/'.$barang->foto)}}" alt="{{$barang->name}}"></figure>
										</a>
									</div>
									<div class="product-info">
										<a href="/modifikasi/{{$barang->id}}" class="btn add-to-cart" onclick="myFunction()">Ubah Info Barang</a>
									</div>
								</div>
							</li>
							@endforeach
						</ul>
					</div>
				</div><!--end main products area-->
			</div><!--end row-->

		</div><!--end container-->

	</main>
	<!--main area-->

	<!--footer area-->
	<footer id="footer">
		<div class="wrap-footer-content footer-style-1">
			<div class="main-footer-content">
			</div>
			<div class="coppy-right-box">
				<div class="container">
					<div class="coppy-right-item item-left">
						<p class="coppy-right-text">Copyright © 2020 Surfside Media. All rights reserved</p>
					</div>
					<div class="coppy-right-item item-right">
						<div class="wrap-nav horizontal-nav">
							<ul>								
								<li class="menu-item"><a href="PrivacyPolicy" class="link-term">Privacy Policy</a></li>
								<li class="menu-item"><a href="Terms & Conditions" class="link-term">Terms & Conditions</a></li>
								<li class="menu-item"><a href="ReturnPolicy" class="link-term">Return Policy</a></li>									
							</ul>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</footer>

    
	<script src="assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4"></script>
	<script src="assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/chosen.jquery.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/jquery.countdown.min.js"></script>
	<script src="assets/js/jquery.sticky.js"></script>
	<script src="assets/js/functions.js"></script>
</body>
</html>