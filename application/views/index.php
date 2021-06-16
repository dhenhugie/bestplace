<!DOCTYPE html>
<html lang="en">

<head>
	<title>Pacific - Free Bootstrap 4 Template by Colorlib</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?= base_url() ?>assets/css/animate.css">

	<link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/magnific-popup.css">

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/jquery.timepicker.css">


	<link rel="stylesheet" href="<?= base_url() ?>assets/css/flaticon.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
	<!-- Additional CSS Files -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/templatemo-space-dynamic.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url() ?>">Best Place<span>surf to your dream place</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="<?= base_url() ?>" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="<?= base_url('trending') ?>" class="nav-link">Trending</a></li>
					<li class="nav-item"><a href="<?= base_url('rekomendasi') ?>" class="nav-link">Rekomendasi</a></li>
					<li class="nav-item"><a href="<?= base_url() ?>" class="nav-link">Kategori</a></li>
					<li class="nav-item"><a href="#about" class="nav-link">Tentang</a></li>
					<li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->

	<div class="hero-wrap js-fullheight" style="background-image: url('assets/images/bg_5.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
				<div class="col-md-7 ftco-animate">
					<span class="subheading">Welcome to Best Place</span>
					<h1 class="mb-4">Discover Your Favorite Place with Us</h1>
					<p class="caps">Berselancarlah ke tempat impianmu</p>
				</div>
				<!-- <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
					<span class="fa fa-play"></span>
				</a> -->
			</div>
		</div>
	</div>

	<section class="ftco-section ftco-no-pb ftco-no-pt">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="ftco-search d-flex justify-content-center">
						<div class="row">
							<div class="col-md-12 nav-link-wrap">
								<div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
									<a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Cari Tempat</a>

									<!-- <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Hotel</a> -->

								</div>
							</div>
							<div class="col-md-12 tab-wrap">

								<div class="tab-content" id="v-pills-tabContent">

									<div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
										<form action="#" class="search-property-1">
											<div class="row no-gutters">
												<div class="col-md d-flex">
													<div class="form-group p-4 border-0">
														<label for="#">Tujuan</label>
														<div class="form-field">
															<div class="icon"><span class="fa fa-search"></span></div>
															<input type="text" class="form-control" placeholder="Search place">
														</div>
													</div>
												</div>
												<div class="col-md d-flex">
													<div class="form-group p-4">
														<label for="#">Kategori</label>
														<div class="form-field">
															<div class="select-wrap">
																<div class="icon"><span class="fa fa-chevron-down"></span></div>
																<select name="" id="" class="form-control">
																	<option value="">$100</option>
																	<option value="">$10,000</option>
																	<option value="">$50,000</option>
																	<option value="">$100,000</option>
																	<option value="">$200,000</option>
																	<option value="">$300,000</option>
																	<option value="">$400,000</option>
																	<option value="">$500,000</option>
																	<option value="">$600,000</option>
																	<option value="">$700,000</option>
																	<option value="">$800,000</option>
																	<option value="">$900,000</option>
																	<option value="">$1,000,000</option>
																	<option value="">$2,000,000</option>
																</select>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md d-flex">
													<div class="form-group d-flex w-100 border-0">
														<div class="form-field w-100 align-items-center d-flex">
															<input type="submit" value="Search" class="align-self-stretch form-control btn btn-primary">
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>

									<!-- <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
										<form action="#" class="search-property-1">
											<div class="row no-gutters">
												<div class="col-lg d-flex">
													<div class="form-group p-4 border-0">
														<label for="#">Destination</label>
														<div class="form-field">
															<div class="icon"><span class="fa fa-search"></span></div>
															<input type="text" class="form-control" placeholder="Search place">
														</div>
													</div>
												</div>
												<div class="col-lg d-flex">
													<div class="form-group p-4">
														<label for="#">Check-in date</label>
														<div class="form-field">
															<div class="icon"><span class="fa fa-calendar"></span></div>
															<input type="text" class="form-control checkin_date" placeholder="Check In Date">
														</div>
													</div>
												</div>
												<div class="col-lg d-flex">
													<div class="form-group p-4">
														<label for="#">Check-out date</label>
														<div class="form-field">
															<div class="icon"><span class="fa fa-calendar"></span></div>
															<input type="text" class="form-control checkout_date" placeholder="Check Out Date">
														</div>
													</div>
												</div>
												<div class="col-lg d-flex">
													<div class="form-group p-4">
														<label for="#">Price Limit</label>
														<div class="form-field">
															<div class="select-wrap">
																<div class="icon"><span class="fa fa-chevron-down"></span></div>
																<select name="" id="" class="form-control">
																	<option value="">$100</option>
																	<option value="">$10,000</option>
																	<option value="">$50,000</option>
																	<option value="">$100,000</option>
																	<option value="">$200,000</option>
																	<option value="">$300,000</option>
																	<option value="">$400,000</option>
																	<option value="">$500,000</option>
																	<option value="">$600,000</option>
																	<option value="">$700,000</option>
																	<option value="">$800,000</option>
																	<option value="">$900,000</option>
																	<option value="">$1,000,000</option>
																	<option value="">$2,000,000</option>
																</select>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg d-flex">
													<div class="form-group d-flex w-100 border-0">
														<div class="form-field w-100 align-items-center d-flex">
															<input type="submit" value="Search" class="align-self-stretch form-control btn btn-primary p-0">
														</div>
													</div>
												</div>
											</div>
										</form>
									</div> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>

	<div id="blog" class="our-blog section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
					<div class="section-heading">
						<h2>Tempat yang lagi <em>Trending</em></h2>
					</div>
				</div>
				<div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
					<div class="top-dec">
						<img src="assets/images/trending.png" alt="">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
					<div class="left-image">
						<a href="#"><img src="assets/images/big-blog-thumb.jpg" alt="Workspace Desktop"></a>
						<div class="info">
							<div class="inner-content">
								<ul>
									<li><i class="fa fa-map-marker"></i> 24 Mar 2021</li>
									<li><i class="fa fa-users"></i> TemplateMo</li>
									<li><i class="fa fa-folder"></i> Branding</li>
								</ul>
								<a href="#">
									<h4>SEO Agency &amp; Digital Marketing</h4>
								</a>
								<p>Lorem ipsum dolor sit amet, consectetur and sed doer ket eismod tempor incididunt ut labore et dolore magna...</p>
								<div class="main-blue-button">
									<a href="<?= base_url('trending') ?>">Discover More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
					<div class="right-list">
						<ul>
							<li>
								<div class="left-content align-self-center">
									<span><i class="fa fa-map-marker"></i> Raja Ampat</span>
									<a href="#">
										<h4>New Websites &amp; Backlinks</h4>
									</a>
									<p>Lorem ipsum dolor sit amsecteturii and sed doer ket eismod...</p>
								</div>
								<div class="right-image">
									<a href="#"><img src="assets/images/blog-thumb-01.jpg" alt=""></a>
								</div>
							</li>
							<li>
								<div class="left-content align-self-center">
									<span><i class="fa fa-map-marker"></i> Kepulauan Seribu</span>
									<a href="#">
										<h4>SEO Analysis &amp; Content Ideas</h4>
									</a>
									<p>Lorem ipsum dolor sit amsecteturii and sed doer ket eismod...</p>
								</div>
								<div class="right-image">
									<a href="#"><img src="assets/images/blog-thumb-01.jpg" alt=""></a>
								</div>
							</li>
							<li>
								<div class="left-content align-self-center">
									<span><i class="fa fa-map-marker"></i> Sukabumi</span>
									<a href="#">
										<h4>SEO Tips &amp; Digital Marketing</h4>
									</a>
									<p>Lorem ipsum dolor sit amsecteturii and sed doer ket eismod...</p>
								</div>
								<div class="right-image">
									<a href="#"><img src="assets/images/blog-thumb-01.jpg" alt=""></a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="ftco-section services-section">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
					<div class="w-100">
						<span class="subheading">Kategori</span>
						<h2 class="mb-4">Cari tempat yang sesuai dengan keinginanmu</h2>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
							A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
						<p class="pt-3"><a href="#" class="btn btn-primary py-3 px-4">Cari Tempat Lainnya</a></p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
							<div class="services services-1 color-1 d-block img round" style="background-image: url('assets/images/services-1.jpg');">
								<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-paragliding"></span></div>
								<div class="media-body">
									<h3 class="heading mb-3">Activities</h3>
									<p>A small river named Duden flows by their place and supplies it with the necessary</p>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
							<div class="services services-1 color-2 d-block img" style="background-image: url('assets/images/services-2.jpg');">
								<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
								<div class="media-body">
									<h3 class="heading mb-3">Travel Arrangements</h3>
									<p>A small river named Duden flows by their place and supplies it with the necessary</p>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
							<div class="services services-1 color-3 d-block img" style="background-image: url('assets/images/services-3.jpg');">
								<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-tour-guide"></span></div>
								<div class="media-body">
									<h3 class="heading mb-3">Private Guide</h3>
									<p>A small river named Duden flows by their place and supplies it with the necessary</p>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
							<div class="services services-1 color-4 d-block img" style="background-image: url('assets/images/services-4.jpg');">
								<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-map"></span></div>
								<div class="media-body">
									<h3 class="heading mb-3">Location Manager</h3>
									<p>A small river named Duden flows by their place and supplies it with the necessary</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center pb-4">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">Destination</span>
					<h2 class="mb-4">Rekomendasi untuk kamu</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 ftco-animate">
					<div class="project-wrap">
						<a href="#" class="img round" style="background-image: url('assets/images/destination-1.jpg');">
							<span class="price">$550/person</span>
						</a>
						<div class="text p-4">
							<span class="days">8 Days Tour</span>
							<h3><a href="#">Banaue Rice Terraces</a></h3>
							<p class="location"><span class="fa fa-map-marker"></span> Banaue, Ifugao, Philippines</p>
							<ul>
								<li><span class="flaticon-shower"></span>2</li>
								<li><span class="flaticon-king-size"></span>3</li>
								<li><span class="flaticon-mountains"></span>Near Mountain</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="project-wrap">
						<a href="#" class="img" style="background-image: url('assets/images/destination-2.jpg');">
							<span class="price">$550/person</span>
						</a>
						<div class="text p-4">
							<span class="days">10 Days Tour</span>
							<h3><a href="#">Banaue Rice Terraces</a></h3>
							<p class="location"><span class="fa fa-map-marker"></span> Banaue, Ifugao, Philippines</p>
							<ul>
								<li><span class="flaticon-shower"></span>2</li>
								<li><span class="flaticon-king-size"></span>3</li>
								<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="project-wrap">
						<a href="#" class="img" style="background-image: url('assets/images/destination-3.jpg');">
							<span class="price">$550/person</span>
						</a>
						<div class="text p-4">
							<span class="days">7 Days Tour</span>
							<h3><a href="#">Banaue Rice Terraces</a></h3>
							<p class="location"><span class="fa fa-map-marker"></span> Banaue, Ifugao, Philippines</p>
							<ul>
								<li><span class="flaticon-shower"></span>2</li>
								<li><span class="flaticon-king-size"></span>3</li>
								<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-4 ftco-animate">
					<div class="project-wrap">
						<a href="#" class="img" style="background-image: url('assets/images/destination-4.jpg');">
							<span class="price">$550/person</span>
						</a>
						<div class="text p-4">
							<span class="days">8 Days Tour</span>
							<h3><a href="#">Banaue Rice Terraces</a></h3>
							<p class="location"><span class="fa fa-map-marker"></span> Banaue, Ifugao, Philippines</p>
							<ul>
								<li><span class="flaticon-shower"></span>2</li>
								<li><span class="flaticon-king-size"></span>3</li>
								<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="project-wrap">
						<a href="#" class="img" style="background-image: url('assets/images/destination-5.jpg');">
							<span class="price">$550/person</span>
						</a>
						<div class="text p-4">
							<span class="days">10 Days Tour</span>
							<h3><a href="#">Banaue Rice Terraces</a></h3>
							<p class="location"><span class="fa fa-map-marker"></span> Banaue, Ifugao, Philippines</p>
							<ul>
								<li><span class="flaticon-shower"></span>2</li>
								<li><span class="flaticon-king-size"></span>3</li>
								<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="project-wrap">
						<a href="#" class="img" style="background-image: url('assets/images/destination-6.jpg');">
							<span class="price">$550/person</span>
						</a>
						<div class="text p-4">
							<span class="days">7 Days Tour</span>
							<h3><a href="#">Banaue Rice Terraces</a></h3>
							<p class="location"><span class="fa fa-map-marker"></span> Banaue, Ifugao, Philippines</p>
							<ul>
								<li><span class="flaticon-shower"></span>2</li>
								<li><span class="flaticon-king-size"></span>3</li>
								<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
							</ul>
						</div>
					</div>
				</div>
				<p class="text-center"><a href="#" class="btn btn-primary py-3 px-4">Lihat Lainnya</a></p>
			</div>
		</div>
	</section>

	<section id="about" class="ftco-section ftco-about img" style="background-image: url('assets/images/bg_4.jpg');">
		<div class="overlay"></div>
		<div class="container py-md-5">
			<div class="row py-md-5">
				<div class="col-md d-flex align-items-center justify-content-center">
					<!-- <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
						<span class="fa fa-play"></span>
					</a> -->
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-about ftco-no-pt img">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-12 about-intro">
					<div class="row">
						<div class="col-md-6 d-flex align-items-stretch">
							<div class="img d-flex w-100 align-items-center justify-content-center" style="background-image:url('assets/images/about-1.jpg');">
							</div>
						</div>
						<div class="col-md-6 pl-md-5 py-5">
							<div class="row justify-content-start pb-3">
								<div class="col-md-12 heading-section ftco-animate">
									<span class="subheading">About Us</span>
									<h2 class="mb-4">Buat perjalanan tak terlupakan bersama kami</h2>
									<p>Wujudkan impianmu untuk berkunjung ke tempat yang kamu inginkan dengan rekomendasi terbaik yang kami pilihkan untuk kamu.</p>
									<p class="pt-3"><a href="#" class="btn btn-primary">Book Your Destination</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section testimony-section bg-bottom" style="background-image: url('assets/images/bg_1.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center pb-4">
				<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
					<span class="subheading">Testimonial</span>
					<h2 class="mb-4">Tourist Feedback</h2>
				</div>
			</div>
			<div class="row ftco-animate">
				<div class="col-md-12">
					<div class="carousel-testimony owl-carousel">
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="text">
									<p class="star">
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</p>
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url('assets/images/person_1.jpg');"></div>
										<div class="pl-3">
											<p class="name">Roger Scott</p>
											<span class="position">Marketing Manager</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="text">
									<p class="star">
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</p>
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url('assets/images/person_2.jpg');"></div>
										<div class="pl-3">
											<p class="name">Roger Scott</p>
											<span class="position">Marketing Manager</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="text">
									<p class="star">
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</p>
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url('assets/images/person_3.jpg');"></div>
										<div class="pl-3">
											<p class="name">Roger Scott</p>
											<span class="position">Marketing Manager</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="text">
									<p class="star">
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</p>
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url('assets/images/person_1.jpg');"></div>
										<div class="pl-3">
											<p class="name">Roger Scott</p>
											<span class="position">Marketing Manager</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="text">
									<p class="star">
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</p>
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url('assets/images/person_2.jpg');"></div>
										<div class="pl-3">
											<p class="name">Roger Scott</p>
											<span class="position">Marketing Manager</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center pb-4">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">Our Blog</span>
					<h2 class="mb-4">Recent Post</h2>
				</div>
			</div>
			<div class="row d-flex">
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry justify-content-end">
						<a href="blog-single.html" class="block-20" style="background-image: url('assets/images/image_1.jpg');">
						</a>
						<div class="text">
							<div class="d-flex align-items-center mb-4 topp">
								<div class="one">
									<span class="day">11</span>
								</div>
								<div class="two">
									<span class="yr">2020</span>
									<span class="mos">September</span>
								</div>
							</div>
							<h3 class="heading"><a href="#">Most Popular Place In This World</a></h3>
							<p><a href="#" class="btn btn-primary">Read more</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry justify-content-end">
						<a href="blog-single.html" class="block-20" style="background-image: url('assets/images/image_2.jpg');">
						</a>
						<div class="text">
							<div class="d-flex align-items-center mb-4 topp">
								<div class="one">
									<span class="day">11</span>
								</div>
								<div class="two">
									<span class="yr">2020</span>
									<span class="mos">September</span>
								</div>
							</div>
							<h3 class="heading"><a href="#">Most Popular Place In This World</a></h3>
							<p><a href="#" class="btn btn-primary">Read more</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry">
						<a href="blog-single.html" class="block-20" style="background-image: url('assets/images/image_3.jpg');">
						</a>
						<div class="text">
							<div class="d-flex align-items-center mb-4 topp">
								<div class="one">
									<span class="day">11</span>
								</div>
								<div class="two">
									<span class="yr">2020</span>
									<span class="mos">September</span>
								</div>
							</div>
							<h3 class="heading"><a href="#">Most Popular Place In This World</a></h3>
							<p><a href="#" class="btn btn-primary">Read more</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->

	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
		</svg></div>


	<script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
	<script src="<?= base_url() ?>assets/js/jquery-migrate-3.0.1.min.js"></script>
	<script src="<?= base_url() ?>assets/js/popper.min.js"></script>
	<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>assets/js/jquery.easing.1.3.js"></script>
	<script src="<?= base_url() ?>assets/js/jquery.waypoints.min.js"></script>
	<script src="<?= base_url() ?>assets/js/jquery.stellar.min.js"></script>
	<script src="<?= base_url() ?>assets/js/owl.carousel.min.js"></script>
	<script src="<?= base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
	<script src="<?= base_url() ?>assets/js/jquery.animateNumber.min.js"></script>
	<script src="<?= base_url() ?>assets/js/bootstrap-datepicker.js"></script>
	<script src="<?= base_url() ?>assets/js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="<?= base_url() ?>assets/js/google-map.js"></script>
	<script src="<?= base_url() ?>assets/js/main.js"></script>

</body>

</html>