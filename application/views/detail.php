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
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style-detail.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/slicknav.min.css" type="text/css">
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
                    <li class="nav-item"><a href="<?= base_url('trending') ?>" class="nav-link">Trending</a></li>
                    <li class="nav-item active"><a href="<?= base_url('rekomendasi') ?>" class="nav-link">Rekomendasi</a></li>
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
                    <h1 class="mb-0 bread">Rekomendasi</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb">
        <!-- Product Details Section Begin -->
        <section class="product-details spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="product__details__pic">
                            <div class="product__details__pic__item">
                                <img class="product__details__pic__item--large" src="<?= base_url() ?>assets/images/bg_1.jpg" alt="">
                            </div>
                            <div class="product__details__pic__slider owl-carousel">
                                <img data-imgbigurl="<?= base_url() ?>assets/images/product/details/product-details-2.jpg" src="<?= base_url() ?>assets/images/product/details/thumb-1.jpg" alt="">
                                <img data-imgbigurl="<?= base_url() ?>assets/images/product/details/product-details-3.jpg" src="<?= base_url() ?>assets/images/product/details/thumb-2.jpg" alt="">
                                <img data-imgbigurl="<?= base_url() ?>assets/images/product/details/product-details-5.jpg" src="<?= base_url() ?>assets/images/product/details/thumb-3.jpg" alt="">
                                <img data-imgbigurl="<?= base_url() ?>assets/images/product/details/product-details-4.jpg" src="<?= base_url() ?>assets/images/product/details/thumb-4.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="product__details__text">
                            <h3>Kepulauan Raja Ampat</h3>
                            <div class="product__details__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <span>(18 reviews)</span>
                            </div>
                            <!-- <div class="product__details__price">$50.00</div> -->
                            <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                Proin eget tortor risus.</p>
                            <div class="product__details__quantity">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="number" value="1">
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="primary-btn">Pesan Tiket</a>
                            <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>

                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="product__details__tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab" aria-selected="true">Deskripsi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab" aria-selected="false">Informasi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab" aria-selected="false">Review <span>(1)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab" aria-selected="false">Dokumentasi</span></a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                    <div class="product__details__tab__desc">
                                        <h6>Products Infomation</h6>
                                        <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus. Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam sit
                                            amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
                                            sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                                            Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus.</p>
                                        <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed
                                            magna dictum porta. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit
                                            amet dui. Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Proin eget tortor risus.</p>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-2" role="tabpanel">
                                    <div class="product__details__tab__desc">
                                        <div class="product__details__text">
                                            <ul>
                                                <li><b>Availability</b> <span>In Stock</span></li>
                                                <li><b>Shipping</b> <span>01 day shipping. <samp>Free pickup today</samp></span></li>
                                                <li><b>Weight</b> <span>0.5 kg</span></li>
                                                <li><b>Share on</b>
                                                    <div class="share">
                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <h6 class="mt-5">Catatan :</h6>
                                        <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus. Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam sit
                                            amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
                                            sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                                            Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus.</p>
                                        <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed
                                            magna dictum porta. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.</p>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-3" role="tabpanel">
                                    <div class="product__details__tab__desc">
                                        <h6> <a class="btn btn-primary" href="#">Lihat Semua Review</a> </h6>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-2 text-center">
                                                        <img src="<?= base_url() ?>assets/images/def_face.jpg" class="img img-rounded img-fluid" style="width: 100px; height: 100px;" />
                                                        <p class="text-secondary">15 Minutes Ago</p>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <p>
                                                            <a class="float-left" href="#"><strong>Ade Nugraha</strong></a>
                                                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>

                                                        </p>
                                                        <div class="clearfix"></div>
                                                        <p>Lorem Ipsum is simply dummy text of the pr make but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2 text-center">
                                                        <img src="<?= base_url() ?>assets/images/def_face.jpg" class="img img-rounded img-fluid" style="width: 100px; height: 100px;" />
                                                        <p class="text-secondary">15 Minutes Ago</p>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <p>
                                                            <a class="float-left" href="#"><strong>Ade Nugraha</strong></a>
                                                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>

                                                        </p>
                                                        <div class="clearfix"></div>
                                                        <p>Lorem Ipsum is simply dummy text of the pr make but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div </div>
                                </div>
                                <div class="tab-pane" id="tabs-4" role="tabpanel">
                                    <div class="product__details__tab__desc">
                                        <section class="ftco-section">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-4 ftco-animate">
                                                        <div class="project-wrap">
                                                            <img id="myImg1" class="img" style="border-radius: 7%;" src="<?= base_url('assets/images/destination-1.jpg'); ?>">
                                                            </img>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 ftco-animate">
                                                        <div class="project-wrap">
                                                            <img id="myImg2" class="img" style="border-radius: 7%;" src="<?= base_url('assets/images/destination-2.jpg'); ?>">
                                                            </img>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 ftco-animate">
                                                        <div class="project-wrap">
                                                            <img id="myImg3" class="img" style="border-radius: 7%;" src="<?= base_url('assets/images/destination-3.jpg'); ?>">
                                                            </img>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 ftco-animate">
                                                        <div class="project-wrap">
                                                            <a href="#" class="img round" style="background-image: url(assets/images/destination-4.jpg);">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 ftco-animate">
                                                        <div class="project-wrap">
                                                            <a href="#" class="img round" style="background-image: url(assets/images/destination-5.jpg);">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 ftco-animate">
                                                        <div class="project-wrap">
                                                            <a href="#" class="img round" style="background-image: url(assets/images/destination-6.jpg);">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 ftco-animate">
                                                        <div class="project-wrap">
                                                            <a href="#" class="img round" style="background-image: url(assets/images/destination-7.jpg);">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 ftco-animate">
                                                        <div class="project-wrap">
                                                            <a href="#" class="img round" style="background-image: url(assets/images/destination-8.jpg);">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 ftco-animate">
                                                        <div class="project-wrap">
                                                            <a href="#" class="img round" style="background-image: url(assets/images/destination-9.jpg);">
                                                            </a>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product Details Section End -->
    </section>


    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        // var img = document.getElementById("myImg");
        var img = document.querySelector('.img').id;
        console.log(img);
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function() {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>

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


    <script src="<?= base_url() ?>assets/js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery-ui.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.slicknav.js"></script>
    <script src="<?= base_url() ?>assets/js/mixitup.min.js"></script>

</body>

</html>