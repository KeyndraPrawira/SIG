<!-- /*
* Template Name: Archiark
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap5" />
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">
	<link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
	<link rel="stylesheet" href="{{ asset('Front/css/tiny-slider.css')}}">
	<link rel="stylesheet" href="{{ asset('Front/css/aos.css')}}">
	<link rel="stylesheet" href="{{ asset('Front/css/glightbox.min.css')}}">
	<link rel="stylesheet" href="{{ asset('Front/css/style.css')}}">

	<title>Archiark &mdash; Free Bootstrap 5 Website Template by Untree.co</title>
</head>
<body>

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav">
		<div class="container">
			<div class="site-navigation">
				<a href="{{ route('front.index') }}" class="logo m-0 float-start text-dark">Beranda /<span class="text-primary"> Detail</span> </a>

				

				<a href="#" class="burger ml-auto float-end site-menu-toggle dark js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
					<span></span>
				</a>
				<ul class="site-menu float-end d-none d-md-block">
					<li><a href="#" class="d-flex align-items-center text-white h2 fw-bold"><span class="icon-phone me-2"></span> <span>+ 2 292 4392 327</span></a></li>
				</ul>

			</div>
		</div>
	</nav>



	


	<div class="section sec-3">
		<div class="container">

			<div class="row mb-3 justify-content-between">
               

				  
				<div class="col-lg-5" style="border-right :2px ;">
                    <img src="{{ asset('storage/'.$ruangan->gambar) }}" width="400" class="img-fluid" style="max-height:300px;object-fit:cover;" height="300px" alt="">
                    <h4 class="mt-2">{{ $ruangan->nama_ruangan }}</h4>
                    <h6>{{ $ruangan->kategori->kategori }}</h6>
                    <p class="text-dark">Fasilitas</p>
                    <ol>
                          @foreach ($ruangan->fasilitas as $fas)
                            <li>{{ $fas->nama_fasilitas }}</li>
                          @endforeach
                    </ol>
                    <span class="text-dark">Lokasi </span>
                    <p>Lantai {{ $ruangan->lantai->lantai}} Gedung {{ $ruangan->lantai->gedung->nama_gedung}}</p>
                    <span class="text-dark">Deskripsi</span>
                    <p>{{ $ruangan->deskripsi }}</p>
					
				</div>
                <div class="col-lg-6" style="border-right :black ;">
					<img src="{{ asset('storage/'. $ruangan->denah) }}" alt="denah {{ $ruangan->nama_ruangan }}" class="img-fluid">
                    <p align="center"><i>Denah lokasi ruangan {{ $ruangan->nama_ruangan }}</i></p>
				</div>
                 <a href="{{ route('front.index') }}" class="btn btn-outline-dark btn-sm">
                    ← Kembali
                </a>
                
			</div>
		</div>
	</div>
	<!-- Preloader -->
	<div id="overlayer"></div>
	<div class="loader">
		<div class="spinner-border" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
	</div>

	<script src="{{ asset('Front/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{ asset('Front/js/tiny-slider.js')}}"></script>
	<script src="{{ asset('Front/js/aos.js')}}"></script>
	<script src="{{ asset('Front/js/glightbox.min.js')}}"></script>
	<script src="{{ asset('Front/js/navbar.js')}}"></script>
	<script src="{{ asset('Front/js/counter.js')}}"></script>
	<script src="{{ asset('Front/js/custom.js')}}"></script>
</body>
</html>
