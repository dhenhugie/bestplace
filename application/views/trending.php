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

  <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/jquery.timepicker.css">


  <link rel="stylesheet" href="<?= base_url() ?>assets/css/flaticon.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
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
          <li class="nav-item"><a href="<?= base_url() ?>" class="nav-link">Home</a></li>
          <li class="nav-item active"><a href="<?= base_url('trending') ?>" class="nav-link">Trending</a></li>
          <li class="nav-item"><a href="<?= base_url('rekomendasi') ?>" class="nav-link">Rekomendasi</a></li>
          <li class="nav-item"><a href="<?= base_url() ?>" class="nav-link">Kategori</a></li>
          <li class="nav-item"><a href="#about" class="nav-link">Tentang</a></li>
          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('assets/images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url() ?>">Home <i class="fa fa-chevron-right"></i></a></span> <span>Trending <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-0 bread">Trending</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-no-pb">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="search-wrap-1 ftco-animate">
            <form action="#" class="search-property-1">
              <div class="row no-gutters">
                <div class="col-lg d-flex">
                  <div class="form-group p-4 border-0">
                    <label for="#">Tempat</label>
                    <div class="form-field">
                      <div class="icon"><span class="fa fa-search"></span></div>
                      <input type="text" class="form-control" placeholder="Search place">
                    </div>
                  </div>
                </div>
                <div class="col-lg d-flex">
                  <div class="form-group d-flex w-100 border-0">
                    <div class="form-field w-100 align-items-center d-flex">
                      <input type="submit" value="Search" class="align-self-stretch form-control btn btn-primary">
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap">
            <a href="#" class="img round" style="background-image: url(assets/images/destination-1.jpg);">
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
            <a href="#" class="img" style="background-image: url(assets/images/destination-2.jpg);">
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
            <a href="#" class="img" style="background-image: url(assets/images/destination-3.jpg);">
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
            <a href="#" class="img" style="background-image: url(assets/images/destination-4.jpg);">
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
            <a href="#" class="img" style="background-image: url(assets/images/destination-5.jpg);">
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
            <a href="#" class="img" style="background-image: url(assets/images/destination-6.jpg);">
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
            <a href="#" class="img" style="background-image: url(assets/images/destination-7.jpg);">
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
            <a href="#" class="img" style="background-image: url(assets/images/destination-8.jpg);">
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
            <a href="#" class="img" style="background-image: url(assets/images/destination-9.jpg);">
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
      </div>
      <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">
            <ul>
              <li><a href="#">&lt;</a></li>
              <li class="active"><span>1</span></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&gt;</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

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