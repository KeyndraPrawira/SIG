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
				<a href="index.html" class="logo m-0 float-start">Archiark<span class="text-primary">.</span> </a>

				<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-start">
					<li class="active"><a href="index.html">Home</a></li>
					<li class="has-children">
						<a href="projects.html">Projects</a>
						<ul class="dropdown">
							<li><a href="#">Commercial Building</a></li>
							<li><a href="#">Cultural Lifestyle</a></li>
							<li class="has-children">
								<a href="#">Dropdown</a>
								<ul class="dropdown">
									<li><a href="#">Sub Menu One</a></li>
									<li><a href="#">Sub Menu Two</a></li>
									<li><a href="#">Sub Menu Three</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="services.html">Services</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="contact.html">Contact Us</a></li>
				</ul>

				

				<a href="#" class="burger ml-auto float-end site-menu-toggle light js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
					<span></span>
				</a>
				<ul class="site-menu float-end d-none d-md-block">
					<li><a href="#" class="d-flex align-items-center text-white h2 fw-bold"><span class="icon-phone me-2"></span> <span>+ 2 292 4392 327</span></a></li>
				</ul>

			</div>
		</div>
	</nav>

	<div class="hero-2 overlay" style="background-image: url('images/img_2.jpg');">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 mx-auto">
					<h1 class="mb-5"><span>We love</span> <span class="d-block">architecture</span> <span class="d-block">& interior design</span></h1>

					<div class="play-vid">
						<a href="https://www.youtube.com/watch?v=mwtbEGNABWU" class="play glightbox">
							<span class="icon-play"></span>
						</a>
					</div>

					<div class="intro-desc">
						<div class="line"></div>
						<p>Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque.</p>
					</div>
				</div>
			</div>
		</div>
	</div>


	
	
	


	<div class="section sec-5">
		<div class="container">
			<div class="row mb-5">
				<div class="col-lg-6">
					<h2 class="heading">Projects</h2>
				</div>
				<div class="col-lg-4">
					<p>Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque.</p>
				</div>
			</div>



			<div class="row g-4">
        @foreach ($ruangan as $ruang)
				
    <div>
        <p>Nama: {{ $ruang->nama_ruangan }}</p>
        <p>Gambar: {{ $ruang->gambar }}</p>
        <img src="{{ asset('storage/' . $ruang->gambar) }}" alt="{{ $ruang->nama_ruangan }}">
    </div>


        @endforeach
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="single-portfolio">
						<a href="project-single.html">
							<img src="images/img_2.jpg" alt="Image" class="img-fluid">
							<div class="contents">
								<h3>Project Two</h3>
								<div class="cat">Construction</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="single-portfolio">
						<a href="project-single.html">
							<img src="images/img_3.jpg" alt="Image" class="img-fluid">
							<div class="contents">
								<h3>Project One</h3>
								<div class="cat">Construction</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="single-portfolio">
						<a href="project-single.html">
							<img src="images/img_4.jpg" alt="Image" class="img-fluid">
							<div class="contents">
								<h3>Project One</h3>
								<div class="cat">Construction</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="single-portfolio">
						<a href="project-single.html">
							<img src="images/img_5.jpg" alt="Image" class="img-fluid">
							<div class="contents">
								<h3>Project Two</h3>
								<div class="cat">Construction</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="single-portfolio">
						<a href="project-single.html">
							<img src="images/img_6.jpg" alt="Image" class="img-fluid">
							<div class="contents">
								<h3>Project One</h3>
								<div class="cat">Construction</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-md-12 text-center mt-5">
					<p><a href="#" class="btn btn-primary me-4">See all projects</a></p>
				</div>

			</div>
		</div>
	</div>



	<div class="sec-4 section bg-light">

		<div class="text-center mb-5">
			<h2 class="heading mb-5 text-center">Testimonial</h2>
		</div>
		<div class="testimonial-slide-center-wrap" data-aos="fade-up" data-aos-delay="100">

			<div id="testimonial-nav">
				<span class="prev" data-controls="prev"><span class="icon-chevron-left"></span></span>

				<span class="next" data-controls="next"><span class="icon-chevron-right"></span></span>
			</div>

			<div class="testimonial-slide-center testimonial-center" id="testimonial-center">

				<div class="item">
					<div class="testimonial-item">
						<div  class="testimonial-item-inner">
							<div class="testimonial-author mb-5">
								<img src="images/person_2.jpg" alt="Image" class="img-fluid">
								<strong class="d-block">James Campbell</strong>
								<span>CEO, Co-Founder</span>
							</div>
							<blockquote>
								Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio dicta placeat! Et pariatur doloremque ea veniam.
							</blockquote>

						</div>
					</div>
				</div>

				<div class="item">
					<div class="testimonial-item">
						<div  class="testimonial-item-inner">
							<div class="testimonial-author mb-5">
								<img src="images/person_1.jpg" alt="Image" class="img-fluid">
								<strong class="d-block">James Campbell</strong>
								<span>CEO, Co-Founder</span>
							</div>
							<blockquote>
								Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio dicta placeat! Et pariatur doloremque ea veniam.
							</blockquote>

						</div>
					</div>
				</div>

				<div class="item">
					<div class="testimonial-item">
						<div  class="testimonial-item-inner">
							<div class="testimonial-author mb-5">
								<img src="images/person_3.jpg" alt="Image" class="img-fluid">
								<strong class="d-block">James Campbell</strong>
								<span>CEO, Co-Founder</span>
							</div>
							<blockquote>
								Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio dicta placeat! Et pariatur doloremque ea veniam.
							</blockquote>

						</div>
					</div>
				</div>

				<div class="item">
					<div class="testimonial-item">
						<div  class="testimonial-item-inner">
							<div class="testimonial-author mb-5">
								<img src="images/person_4.jpg" alt="Image" class="img-fluid">
								<strong class="d-block">James Campbell</strong>
								<span>CEO, Co-Founder</span>
							</div>
							<blockquote>
								Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio dicta placeat! Et pariatur doloremque ea veniam.
							</blockquote>

						</div>
					</div>
				</div>


				<div class="item">
					<div class="testimonial-item">
						<div  class="testimonial-item-inner">
							<div class="testimonial-author mb-5">
								<img src="images/person_5.jpg" alt="Image" class="img-fluid">
								<strong class="d-block">James Campbell</strong>
								<span>CEO, Co-Founder</span>
							</div>
							<blockquote>
								Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio dicta placeat! Et pariatur doloremque ea veniam.
							</blockquote>

						</div>
					</div>
				</div>

				<div class="item">
					<div class="testimonial-item">
						<div  class="testimonial-item-inner">
							<div class="testimonial-author mb-5">
								<img src="images/person_2.jpg" alt="Image" class="img-fluid">
								<strong class="d-block">James Campbell</strong>
								<span>CEO, Co-Founder</span>
							</div>
							<blockquote>
								Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio dicta placeat! Et pariatur doloremque ea veniam.
							</blockquote>

						</div>
					</div>
				</div>
				<div class="item">
					<div class="testimonial-item">
						<div  class="testimonial-item-inner">
							<div class="testimonial-author mb-5">
								<img src="images/person_3.jpg" alt="Image" class="img-fluid">
								<strong class="d-block">James Campbell</strong>
								<span>CEO, Co-Founder</span>
							</div>
							<blockquote>
								Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio dicta placeat! Et pariatur doloremque ea veniam.
							</blockquote>

						</div>
					</div>
				</div>

				<div class="item">
					<div class="testimonial-item">
						<div  class="testimonial-item-inner">
							<div class="testimonial-author mb-5">
								<img src="images/person_4.jpg" alt="Image" class="img-fluid">
								<strong class="d-block">James Campbell</strong>
								<span>CEO, Co-Founder</span>
							</div>
							<blockquote>
								Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio dicta placeat! Et pariatur doloremque ea veniam.
							</blockquote>

						</div>
					</div>
				</div>

				<div class="item">
					<div class="testimonial-item">
						<div  class="testimonial-item-inner">
							<div class="testimonial-author mb-5">
								<img src="images/person_1.jpg" alt="Image" class="img-fluid">
								<strong class="d-block">James Campbell</strong>
								<span>CEO, Co-Founder</span>
							</div>
							<blockquote>
								Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio dicta placeat! Et pariatur doloremque ea veniam.
							</blockquote>

						</div>
					</div>
				</div>
			</div>

		</div>
	</div>


	<div class="section sec-news">
		<div class="container">
			<div class="row mb-5">
				<div class="col-lg-6">
					<h2 class="heading">News</h2>
				</div>
				<div class="col-lg-6">
					<p>Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque.</p>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="post-entry-1 h-100">
						<a href="single.html">
							<img src="images/img_3.jpg" alt="Image"
							class="img-fluid">
						</a>
						<div class="post-entry-1-contents">
							<span class="meta d-inline-block mb-0">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
							<h2 class="mb-3"><a href="single.html">How Awesome Stay connected</a></h2>
							
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<p><a href="single.html">Read more</a></p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="post-entry-1 h-100">
						<a href="single.html">
							<img src="images/img_4.jpg" alt="Image"
							class="img-fluid">
						</a>
						<div class="post-entry-1-contents">

							<span class="meta d-inline-block mb-0">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
							<h2 class="mb-3"><a href="single.html">We Need Unlimitted People</a></h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<p><a href="single.html">Read more</a></p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 mb-4">
					<div class="post-entry-1 h-100">
						<a href="single.html">
							<img src="images/img_5.jpg" alt="Image"
							class="img-fluid">
						</a>
						<div class="post-entry-1-contents">

							<span class="meta d-inline-block mb-0">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
							<h2 class="mb-3"><a href="single.html">Important of getting a notifications</a></h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<p><a href="single.html">Read more</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	

	<div class="site-footer bg-light">
		<div class="container">

			<div class="row justify-content-between">
				<div class="col-lg-4">
					<div class="widget">
						<h3 class="line-top">About</h3>
						<p class="mb-5">Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio dicta placeat! Et pariatur doloremque ea veniam. Separated they live.</p>

					</div>
					<div class="widget">
						<h3 class="line-top">Connect with us</h3>
						<ul class="social list-unstyled mb-5">
							<li><a href="#"><span class="icon-facebook"></span></a></li>
							<li><a href="#"><span class="icon-twitter"></span></a></li>
							<li><a href="#"><span class="icon-instagram"></span></a></li>
							<li><a href="#"><span class="icon-dribbble"></span></a></li>
							<li><a href="#"><span class="icon-linkedin"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="row">
						<div class="col-12">
							<div class="widget">
								<h3 class="line-top">Navigations</h3>
							</div>
						</div>
						<div class="col-6 col-sm-6 col-md-4">
							<div class="widget">
								<ul class="links list-unstyled">
									<li><a href="#">Home</a></li>
									<li><a href="#">Services</a></li>
									<li><a href="#">Work</a></li>
									<li><a href="#">Process</a></li>
									<li><a href="#">About Us</a></li>
								</ul>
							</div>
						</div>
						<div class="col-6 col-sm-6 col-md-4">
							<div class="widget">
								<ul class="links list-unstyled">
									<li><a href="#">Press</a></li>
									<li><a href="#">Blog</a></li>
									<li><a href="#">Contact</a></li>
									<li><a href="#">Support</a></li>
									<li><a href="#">Privacy</a></li>
								</ul>
							</div>
						</div>
						<div class="col-6 col-sm-6 col-md-4">
							<div class="widget">
								<ul class="links list-unstyled">
									<li><a href="#">Privacy</a></li>
									<li><a href="#">FAQ</a></li>
									<li><a href="#">Careers</a></li>
									<li><a href="#">Process</a></li>
									<li><a href="#">About Us</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row justify-content-center text-center copyright">
				<div class="col-md-8">
					<p class="small text-black-50">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a></br>Distributed By <a href="https://themewagon.com/">Themewagon</a> <!-- License information: https://untree.co/license/ -->
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
