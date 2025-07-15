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

	<link rel="stylesheet" href="{{  asset('Front/fonts/icomoon/style.css')}}">
	<link rel="stylesheet" href="{{  asset('Front/fonts/flaticon/font/flaticon.css')}}">
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
				<a href="{{ route('front.index') }}" class="logo m-0 float-start">SIG<span class="text-primary">.</span> </a>

				<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-start">
					<li class="active"><a href="{{ route('tentang') }}">Home</a></li>
					
					<li><a href="{{ route('tentang') }}">Tentang</a></li>
			
				</ul>

				

				<a href="#" class="burger ml-auto float-end site-menu-toggle light js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
					<span></span>
				</a>
				<ul class="site-menu float-end d-none d-md-block">
					<li><a href="https://www.google.com/maps/place/SMK+Assalaam+Bandung+(PUSAT+KEUNGGULAN)/@-6.9665028,107.5918764,18z/data=!4m6!3m5!1s0x2e68e8deccecb6f1:0x658cc60fbe5017b9!8m2!3d-6.9667025!4d107.5926328!16s%2Fg%2F11b6hnkk0s?entry=ttu&g_ep=EgoyMDI1MDcwOS4wIKXMDSoASAFQAw%3D%3D" class="d-flex align-items-center text-white h2 fw-bold"><span class="icon-loc "></span> <span>Jl. Situ Tarate Jl. Cibaduyut, Cangkuang Kulon, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40265</span></a></li>
				</ul>
				

			</div>
		</div>
	</nav>

	<div class="hero-2 overlay" style="background-image: url('{{ asset('front/Aula.jpg') }}');">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 mx-auto">
					<h1 class="mb-5"><span>Selamat Datang di</span> <span class="d-block">Sistem Informasi</span> <span class="d-block">Geografis</span><span class="d-block">SMK Assalaam Bandung</span></h1>

					

					<div class="intro-desc">
						<div class="line"></div>
						<p></p>
					</div>
				</div>
			</div>
			<ul class="site-menu float-end d-none d-md-block">
					<li><a href="https://www.google.com/maps/place/SMK+Assalaam+Bandung+(PUSAT+KEUNGGULAN)/@-6.9665028,107.5918764,18z/data=!4m6!3m5!1s0x2e68e8deccecb6f1:0x658cc60fbe5017b9!8m2!3d-6.9667025!4d107.5926328!16s%2Fg%2F11b6hnkk0s?entry=ttu&g_ep=EgoyMDI1MDcwOS4wIKXMDSoASAFQAw%3D%3D" class="d-flex align-items-center text-white h2 fw-bold"><span class="icon-phone me-2"></span> <span>Jl. Situ Tarate Jl. Cibaduyut, Cangkuang Kulon, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40265</span></a></li>
				</ul>
		</div>
	</div>


	

	
	


	<div class="section sec-5">
		<div class="container">
			<div class="row mb-5">
				

				<div class="col-lg-6">
					<h2 class="heading">Ruangan</h2>
				</div>
				
			</div>



			<ul class="d-flex justify-content-center">
				@foreach ($lantai->unique('gedung_id') as $lokasi)
				@if($lokasi->gedung->nama_gedung !== 'Lainnya')
				<li class="mx-2 btn" >
					<a href="{{ route('ruangan.filter', $lokasi->gedung->id) }}"
					class="{{ (isset($pilihGedung) && $pilihGedung->id == $lokasi->gedung->id) ? 'fw-bold text-primary' : '' }} btn btn-primary rounded" >
						<span style="text-decoration: none;">{{ $lokasi->gedung->nama_gedung }}</span>
					</a>
				</li>
				@endif
				@endforeach
			
			@foreach ($lantai as $lokasi)
				@if($lokasi->gedung->nama_gedung == 'Lainnya')
					<li class="mx-2 btn">
					<a href="{{ route('ruangan.filter', $lokasi->gedung->id) }}"
						class="{{ (isset($pilihGedung) && $pilihGedung->id == $lokasi->gedung->id) ? 'fw-bold text-primary' : '' }} btn btn-primary rounded">
						<span style="text-decoration: none;">{{ $lokasi->gedung->nama_gedung }}</span>
					</a>
					</li>
				@endif
			@endforeach
			</ul>

			<div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach ($ruangan as $ruang)
				<div class="col">
					<div class="single-portfolio">
						<a href="{{route('detail.show', $ruang->id)}}">
							<img src="{{asset('storage/'. $ruang->gambar)}}" alt="Image" style="max-height: 265px;object-fit:cover;" height="265px" class="img-fluid">
							<div class="contents">
								<h3>{{ $ruang->nama_ruangan }}</h3>
								<div class="cat">{{ $ruang->kategori->nama_kategori }}</div>
							</div>
						</a>
					</div>
				</div>
        @endforeach
			
			</div>
		</div>
	</div>



	


	


	

	<div class="site bg-light">
		<div class="container">
			<div class="row justify-content-center text-center copyright">
				<div class="col-md-8 ">
					<p class="small text-black-50 mt-2">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. Website SIG &mdash; Projek pkl internal 
					</p>
				</div>
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
