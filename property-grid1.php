<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EstateAgency Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Icon2.png" rel="icon">
  <link href="assets/img/Icon2.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: EstateAgency - v4.7.0
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <?php
  echo '<div class="click-closed"></div>';
  echo '<!--/ Form Search Star /-->';
  echo '<div class="box-collapse">';
  echo '<div class="title-box-d">';
  echo '<h3 class="title-d">Search Property</h3>';
  echo '</div>';
  echo '<span class="close-box-collapse right-boxed bi bi-x"></span>';
  echo '<div class="box-collapse-wrap form">';
  echo '<form class="form-a">';
  echo '<div class="row">';
  echo '<div class="col-md-12 mb-2">';
  echo '<div class="form-group">';
  echo '<label class="pb-2" for="Type">Keyword</label>';
  echo '<input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">';
  echo '</div>';
  echo '</div>';
  echo '<div class="col-md-6 mb-2">';
  echo '<div class="form-group mt-3">';
  echo '<label class="pb-2" for="Type">Type</label>';
  echo '<select class="form-control form-select form-control-a" id="Type">';
  echo '<option>All Type</option>';
  echo '<option>For Rent</option>';
  echo '<option>For Sale</option>';
  echo '<option>Open House</option>';
  echo '</select>';
  echo '</div>';
  echo '</div>';
  echo '<div class="col-md-6 mb-2">';
  echo '<div class="form-group mt-3">';
  echo '<label class="pb-2" for="city">City</label>';
  echo '<select class="form-control form-select form-control-a" id="city">';
  echo '<option>All City</option>';
  echo '<option>Alabama</option>';
  echo '<option>Arizona</option>';
  echo '<option>California</option>';
  echo '<option>Colorado</option>';
  echo '</select>';
  echo '</div>';
  echo '</div>';
  echo '<div class="col-md-6 mb-2">';
  echo '<div class="form-group mt-3">';
  echo '<label class="pb-2" for="bedrooms">Bedrooms</label>';
  echo '<select class="form-control form-select form-control-a" id="bedrooms">';
  echo '<option>Any</option>';
  echo '<option>01</option>';
  echo '<option>02</option>';
  echo '<option>03</option>';
  echo '</select>';
  echo '</div>';
  echo '</div>';
  echo '<div class="col-md-6 mb-2">';
  echo '<div class="form-group mt-3">';
  echo '<label class="pb-2" for="garages">Garages</label>';
  echo '<select class="form-control form-select form-control-a" id="garages">';
  echo '<option>Any</option>';
  echo '<option>01</option>';
  echo '<option>02</option>';
  echo '<option>03</option>';
  echo '<option>04</option>';
  echo '</select>';
  echo '</div>';
  echo '</div>';
  echo '<div class="col-md-6 mb-2">';
  echo '<div class="form-group mt-3">';
  echo '<label class="pb-2" for="bathrooms">Bathrooms</label>';
  echo '<select class="form-control form-select form-control-a" id="bathrooms">';
  echo '<option>Any</option>';
  echo '<option>01</option>';
  echo '<option>02</option>';
  echo '<option>03</option>';
  echo '</select>';
  echo '</div>';
  echo '</div>';
  echo '<div class="col-md-6 mb-2">';
  echo '<div class="form-group mt-3">';
  echo '<label class="pb-2" for="price">Min Price</label>';
  echo '<select class="form-control form-select form-control-a" id="price">';
  echo '<option>Unlimite</option>';
  echo '<option>$50,000</option>';
  echo '<option>$100,000</option>';
  echo '<option>$150,000</option>';
  echo '<option>$200,000</option>';
  echo '</select>';
  echo '</div>';
  echo '</div>';
  echo '<div class="col-md-12">';
  echo '<button type="submit" class="btn btn-b">Search Property</button>';
  echo '</div>';
  echo '</div>';
  echo '</form>';
  echo '</div>';
  echo '</div><!-- End Property Search Section -->>';
  echo '';
  echo '<!-- ======= Header/Navbar ======= -->';
  echo '<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">';
  echo '<div class="container">';
  echo '<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">';
  echo '<span></span>';
  echo '<span></span>';
  echo '<span></span>';
  echo '</button>';
  echo '<a class="navbar-brand text-brand" href="index.php">Property<span class="color-b">Lime</span></a>';
  echo '';
  echo '<div class="navbar-collapse collapse justify-content-center" id="navbarDefault">';
  echo '<ul class="navbar-nav">';
  echo '';
  echo '<li class="nav-item">';
  echo '<a class="nav-link " href="index.php">Home</a>';
  echo '</li>';
  echo '';
  echo '<li class="nav-item">';
  echo '<a class="nav-link " href="about.php">About</a>';
  echo '</li>';
  echo '';
  echo '<li class="nav-item">';
  echo '<a class="nav-link active" href="property-grid.php">Property</a>';
  echo '</li>';
  echo '';
  echo '<li class="nav-item">';
  echo '<a class="nav-link " href="blog-grid.php">Blog</a>';
  echo '</li>';
  echo '';
  echo '';
  echo '<li class="nav-item">';
  echo '<a class="nav-link " href="contact.php">Contact</a>';
  echo '</li>';
  echo '</ul>';
  echo '</div>';
  echo '';
  echo '<button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">';
  echo '<i class="bi bi-search"></i>';
  echo '</button>';
  echo '';
  echo '</div>';
  echo '</nav><!-- End Header/Navbar -->';
  echo '';
  echo '<main id="main">';
  echo '';
  echo '<!-- ======= Intro Single ======= -->';
  echo '<section class="intro-single">';
  echo '<div class="container">';
  echo '<div class="row">';
  echo '<div class="col-md-12 col-lg-8">';
  echo '<div class="title-single-box">';
  echo '<h1 class="title-single">Our Amazing Properties</h1>';
  echo '<span class="color-text-a">Grid Properties</span>';
  echo '</div>';
  echo '</div>';
  echo '<div class="col-md-12 col-lg-4">';
  echo '<nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">';
  echo '<ol class="breadcrumb">';
  echo '<li class="breadcrumb-item">';
  echo '<a href="#">Home</a>';
  echo '</li>';
  echo '<li class="breadcrumb-item active" aria-current="page">';
  echo 'Properties Grid';
  echo '</li>';
  echo '</ol>';
  echo '</nav>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</section><!-- End Intro Single-->';
  echo '';
  echo '<!-- ======= Property Grid ======= -->';
  echo '<section class="property-grid grid">';
  echo '<div class="container">';
  echo '<div class="row">';
  echo '<div class="col-sm-12">';
  echo '<div class="grid-option">';
  echo '<form>';
  echo '<select class="custom-select">';
  echo '<option selected>All</option>';
  echo '<option value="1">New to Old</option>';
  echo '<option value="2">For Rent</option>';
  echo '<option value="3">For Sale</option>';
  echo '</select>';
  echo '</form>';
  echo '</div>';
  echo '</div>';
  echo '<div class="col-md-4">';
  echo '<div class="card-box-a card-shadow">';
  echo '<div class="img-box-a">';
  echo '<img src="assets/img/Sale8.png" alt="" class="img-a img-fluid">';
  echo '</div>';
  echo '<div class="card-overlay">';
  echo '<div class="card-overlay-a-content">';
  echo '<div class="card-header-a">';
  echo '<h2 class="card-title-a">';
  echo '<a href="#">204 Mount';
  echo '<br /> Olive Road Two</a>';
  echo '</h2>';
  echo '</div>';
  echo '<div class="card-body-a">';
  echo '<div class="price-box d-flex">';
  echo '<span class="price-a">rent | $ 12.000</span>';
  echo '</div>';
  echo '<a href="property-single.php" class="link-a">Click here to view';
  echo '<span class="bi bi-chevron-right"></span>';
  echo '</a>';
  echo '</div>';
  echo '<div class="card-footer-a">';
  echo '<ul class="card-info d-flex justify-content-around">';
  echo '<li>';
  echo '<h4 class="card-info-title">Area</h4>';
  echo '<span>340m';
  echo '<sup>2</sup>';
  echo '</span>';
  echo '</li>';
  echo '<li>';
  echo '<h4 class="card-info-title">Beds</h4>';
  echo '<span>2</span>';
  echo '</li>';
  echo '<li>';
  echo '<h4 class="card-info-title">Baths</h4>';
  echo '<span>4</span>';
  echo '</li>';
  echo '<li>';
  echo '<h4 class="card-info-title">Garages</h4>';
  echo '<span>1</span>';
  echo '</li>';
  echo '</ul>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '<div class="col-md-4">';
  echo '<div class="card-box-a card-shadow">';
  echo '<div class="img-box-a">';
  echo '<img src="assets/img/Sale3.png" alt="" class="img-a img-fluid">';
  echo '</div>';
  echo '<div class="card-overlay">';
  echo '<div class="card-overlay-a-content">';
  echo '<div class="card-header-a">';
  echo '<h2 class="card-title-a">';
  echo '<a href="#">204 Mount';
  echo '<br /> Olive Road Two</a>';
  echo '</h2>';
  echo '</div>';
  echo '<div class="card-body-a">';
  echo '<div class="price-box d-flex">';
  echo '<span class="price-a">rent | $ 12.000</span>';
  echo '</div>';
  echo '<a href="property-single.php" class="link-a">Click here to view';
  echo '<span class="bi bi-chevron-right"></span>';
  echo '</a>';
  echo '</div>';
  echo '<div class="card-footer-a">';
  echo '<ul class="card-info d-flex justify-content-around">';
  echo '<li>';
  echo '<h4 class="card-info-title">Area</h4>';
  echo '<span>340m';
  echo '<sup>2</sup>';
  echo '</span>';
  echo '</li>';
  echo '<li>';
  echo '<h4 class="card-info-title">Beds</h4>';
  echo '<span>2</span>';
  echo '</li>';
  echo '<li>';
  echo '<h4 class="card-info-title">Baths</h4>';
  echo '<span>4</span>';
  echo '</li>';
  echo '<li>';
  echo '<h4 class="card-info-title">Garages</h4>';
  echo '<span>1</span>';
  echo '</li>';
  echo '</ul>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '<div class="col-md-4">';
  echo '<div class="card-box-a card-shadow">';
  echo '<div class="img-box-a">';
  echo '<img src="assets/img/Sale5.png" alt="" class="img-a img-fluid">';
  echo '</div>';
  echo '<div class="card-overlay">';
  echo '<div class="card-overlay-a-content">';
  echo '<div class="card-header-a">';
  echo '<h2 class="card-title-a">';
  echo '<a href="#">204 Mount';
  echo '<br /> Olive Road Two</a>';
  echo '</h2>';
  echo '</div>';
  echo '<div class="card-body-a">';
  echo '<div class="price-box d-flex">';
  echo '<span class="price-a">rent | $ 12.000</span>';
  echo '</div>';
  echo '<a href="property-single.php" class="link-a">Click here to view';
  echo '<span class="bi bi-chevron-right"></span>';
  echo '</a>';
  echo '</div>';
  echo '<div class="card-footer-a">';
  echo '<ul class="card-info d-flex justify-content-around">';
  echo '<li>';
  echo '<h4 class="card-info-title">Area</h4>';
  echo '<span>340m';
  echo '<sup>2</sup>';
  echo '</span>';
  echo '</li>';
  echo '<li>';
  echo '<h4 class="card-info-title">Beds</h4>';
  echo '<span>2</span>';
  echo '</li>';
  echo '<li>';
  echo '<h4 class="card-info-title">Baths</h4>';
  echo '<span>4</span>';
  echo '</li>';
  echo '<li>';
  echo '<h4 class="card-info-title">Garages</h4>';
  echo '<span>1</span>';
  echo '</li>';
  echo '</ul>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '<div class="col-md-4">';
  echo '<div class="card-box-a card-shadow">';
  echo '<div class="img-box-a">';
  echo '<img src="assets/img/Sale6.png" alt="" class="img-a img-fluid">';
  echo '</div>';
  echo '<div class="card-overlay">';
  echo '<div class="card-overlay-a-content">';
  echo '<div class="card-header-a">';
  echo '<h2 class="card-title-a">';
  echo '<a href="#">204 Mount';
  echo '<br /> Olive Road Two</a>';
  echo '</h2>';
  echo '</div>';
  echo '<div class="card-body-a">';
  echo '<div class="price-box d-flex">';
  echo '<span class="price-a">rent | $ 12.000</span>';
  echo '</div>';
  echo '<a href="property-single.php" class="link-a">Click here to view';
  echo '<span class="bi bi-chevron-right"></span>';
  echo '</a>';
  echo '</div>';
  echo '<div class="card-footer-a">';
  echo '<ul class="card-info d-flex justify-content-around">';
  echo '<li>';
  echo '<h4 class="card-info-title">Area</h4>';
  echo '<span>340m';
  echo '<sup>2</sup>';
  echo '</span>';
  echo '</li>';
  echo '<li>';
  echo '<h4 class="card-info-title">Beds</h4>';
  echo '<span>2</span>';
  echo '</li>';
  echo '<li>';
  echo '<h4 class="card-info-title">Baths</h4>';
  echo '<span>4</span>';
  echo '</li>';
  echo '<li>';
  echo '<h4 class="card-info-title">Garages</h4>';
  echo '<span>1</span>';
  echo '</li>';
  echo '</ul>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '<div class="col-md-4">';
  echo '<div class="card-box-a card-shadow">';
  echo '<div class="img-box-a">';
  echo '<img src="assets/img/Sale4.png" alt="" class="img-a img-fluid">';
  echo '</div>';
  echo '<div class="card-overlay">';
  echo '<div class="card-overlay-a-content">';
  echo '<div class="card-header-a">';
  echo '<h2 class="card-title-a">';
  echo '<a href="#">204 Mount';
  echo '<br /> Olive Road Two</a>';
  echo '</h2>';
  echo '</div>';
  echo '<div class="card-body-a">';
  echo '<div class="price-box d-flex">';
  echo '<span class="price-a">rent | $ 12.000</span>';
  echo '</div>';
  echo '<a href="property-single.php" class="link-a">Click here to view';
  echo '<span class="bi bi-chevron-right"></span>';
  echo '</a>';
  echo '</div>';
  echo '<div class="card-footer-a">';
  echo '<ul class="card-info d-flex justify-content-around">';
  echo '<li>';
  echo '<h4 class="card-info-title">Area</h4>';
  echo '<span>340m';
  echo '<sup>2</sup>';
  echo '</span>';
  echo '</li>';
  echo '<li>';
  echo '<h4 class="card-info-title">Beds</h4>';
  echo '<span>2</span>';
  echo '</li>';
  echo '<li>';
  echo '<h4 class="card-info-title">Baths</h4>';
  echo '<span>4</span>';
  echo '</li>';
  echo '<li>';
  echo '<h4 class="card-info-title">Garages</h4>';
  echo '<span>1</span>';
  echo '</li>';
  echo '</ul>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '<div class="col-md-4">';
  echo '<div class="card-box-a card-shadow">';
  echo '<div class="img-box-a">';
  echo '<img src="assets/img/property-10.jpg" alt="" class="img-a img-fluid">';
  echo '</div>';
  echo '<div class="card-overlay">';
  echo '<div class="card-overlay-a-content">';
  echo '<div class="card-header-a">';
  echo '<h2 class="card-title-a">';
  echo '<a href="#">204 Mount';
  echo '<br /> Olive Road Two</a>';
  echo '</h2>';
  echo '</div>';
  echo '<div class="card-body-a">';
  echo '<div class="price-box d-flex">';
  echo '<span class="price-a">rent | $ 12.000</span>';
  echo '</div>';
  echo '<a href="property-single.php" class="link-a">Click here to view';
  echo '<span class="bi bi-chevron-right"></span>';
  echo '</a>';
  echo '</div>';
  echo '<div class="card-footer-a">';
  echo '<ul class="card-info d-flex justify-content-around">';
  echo '<li>';
  echo '<h4 class="card-info-title">Area</h4>';
  echo '<span>340m';
  echo '<sup>2</sup>';
  echo '</span>';
  echo '</li>';
  echo '<li>';
  echo '<h4 class="card-info-title">Beds</h4>';
  echo '<span>2</span>';
  echo '</li>';
  echo '<li>';
  echo '<h4 class="card-info-title">Baths</h4>';
  echo '<span>4</span>';
  echo '</li>';
  echo '<li>';
  echo '<h4 class="card-info-title">Garages</h4>';
  echo '<span>1</span>';
  echo '</li>';
  echo '</ul>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '<div class="row">';
  echo '<div class="col-sm-12">';
  echo '<nav class="pagination-a">';
  echo '<ul class="pagination justify-content-end">';
  echo '<li class="page-item disabled">';
  echo '<a class="page-link" href="#" tabindex="-1">';
  echo '<span class="bi bi-chevron-left"></span>';
  echo '</a>';
  echo '</li>';
  echo '<li class="page-item">';
  echo '<a class="page-link" href="property-grid.php">1</a>';
  echo '</li>';
  echo '<li class="page-item active">';
  echo '<a class="page-link" href="#">2</a>';
  echo '</li>';
  echo '<li class="page-item">';
  echo '<a class="page-link" href="property-grid2.php">3</a>';
  echo '</li>';
  echo '<li class="page-item">';
  echo '<a class="page-link" href="property-grid3.php">4</a>';
  echo '</li>';
  echo '<li class="page-item next">';
  echo '<a class="page-link" href="#">';
  echo '<span class="bi bi-chevron-right"></span>';
  echo '</a>';
  echo '</li>';
  echo '</ul>';
  echo '</nav>';
  echo '</div>';
  echo '</div>';
  echo '</div>';


  echo '</main><!-- End #main -->';


  echo '<section class="section-footer">';
  echo '<div class="container">';
  echo '<div class="row">';
  echo '<div class="col-sm-12 col-md-4">';
  echo '<div class="widget-a">';
  echo '<div class="w-header-a">';
  echo '<h3 class="w-title-a text-brand">EstateAgency</h3>';
  echo '</div>';
  echo '<div class="w-body-a">';
  echo '<p class="w-text-a color-text-a">';
  echo 'Providing a seamless home rental experience to tenants, agents.';
  echo '</p>';
  echo '</div>';
  echo '<div class="w-footer-a">';
  echo '<ul class="list-unstyled">';
  echo '<li class="color-a">';
  echo '<span class="color-text-a">Phone .</span> contact@example.com';
  echo '</li>';
  echo '<li class="color-a">';
  echo '<span class="color-text-a">Email .</span> +54 356 945234';
  echo '</li>';
  echo '</ul>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '<div class="col-sm-12 col-md-4 section-md-t3">';
  echo '<div class="widget-a">';
  echo '<div class="w-header-a">';
  echo '<h3 class="w-title-a text-brand">The Company</h3>';
  echo '</div>';
  echo '<div class="w-body-a">';
  echo '<div class="w-body-a">';
  echo '<ul class="list-unstyled">';
  echo '<li class="item-list-a">';
  echo '<i class="bi bi-chevron-right"></i> <a href="#">Site Map</a>';
  echo '</li>';
  echo '<li class="item-list-a">';
  echo '<i class="bi bi-chevron-right"></i> <a href="#">Legal</a>';
  echo '</li>';
  echo '<li class="item-list-a">';
  echo '<i class="bi bi-chevron-right"></i> <a href="#">Agent Admin</a>';
  echo '</li>';
  echo '<li class="item-list-a">';
  echo '<i class="bi bi-chevron-right"></i> <a href="#">Careers</a>';
  echo '</li>';
  echo '<li class="item-list-a">';
  echo '<i class="bi bi-chevron-right"></i> <a href="#">Affiliate</a>';
  echo '</li>';
  echo '<li class="item-list-a">';
  echo '<i class="bi bi-chevron-right"></i> <a href="#">Privacy Policy</a>';
  echo '</li>';
  echo '</ul>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '<div class="col-sm-12 col-md-4 section-md-t3">';
  echo '<div class="widget-a">';
  echo '<div class="w-header-a">';
  echo '<h3 class="w-title-a text-brand">International sites</h3>';
  echo '</div>';
  echo '<div class="w-body-a">';
  echo '<ul class="list-unstyled">';
  echo '<li class="item-list-a">';
  echo '<i class="bi bi-chevron-right"></i> <a href="#">Japan</a>';
  echo '</li>';
  echo '<li class="item-list-a">';
  echo '<i class="bi bi-chevron-right"></i> <a href="#">China</a>';
  echo '</li>';
  echo '<li class="item-list-a">';
  echo '<i class="bi bi-chevron-right"></i> <a href="#">Hong Kong</a>';
  echo '</li>';
  echo '<li class="item-list-a">';
  echo '<i class="bi bi-chevron-right"></i> <a href="#">Thailand</a>';
  echo '</li>';
  echo '<li class="item-list-a">';
  echo '<i class="bi bi-chevron-right"></i> <a href="#">Singapore</a>';
  echo '</li>';
  echo '<li class="item-list-a">';
  echo '<i class="bi bi-chevron-right"></i> <a href="#">Philippines</a>';
  echo '</li>';
  echo '</ul>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</section>';
  echo '<footer>';
  echo '<div class="container">';
  echo '<div class="row">';
  echo '<div class="col-md-12">';
  echo '<nav class="nav-footer">';
  echo '<ul class="list-inline">';
  echo '<li class="list-inline-item">';
  echo '<a href="#">Home</a>';
  echo '</li>';
  echo '<li class="list-inline-item">';
  echo '<a href="#">About</a>';
  echo '</li>';
  echo '<li class="list-inline-item">';
  echo '<a href="#">Property</a>';
  echo '</li>';
  echo '<li class="list-inline-item">';
  echo '<a href="#">Blog</a>';
  echo '</li>';
  echo '<li class="list-inline-item">';
  echo '<a href="#">Contact</a>';
  echo '</li>';
  echo '</ul>';
  echo '</nav>';
  echo '<div class="socials-a">';
  echo '<ul class="list-inline">';
  echo '<li class="list-inline-item">';
  echo '<a href="#">';
  echo '<i class="bi bi-facebook" aria-hidden="true"></i>';
  echo '</a>';
  echo '</li>';
  echo '<li class="list-inline-item">';
  echo '<a href="#">';
  echo '<i class="bi bi-twitter" aria-hidden="true"></i>';
  echo '</a>';
  echo '</li>';
  echo '<li class="list-inline-item">';
  echo '<a href="#">';
  echo '<i class="bi bi-instagram" aria-hidden="true"></i>';
  echo '</a>';
  echo '</li>';
  echo '<li class="list-inline-item">';
  echo '<a href="#">';
  echo '<i class="bi bi-linkedin" aria-hidden="true"></i>';
  echo '</a>';
  echo '</li>';
  echo '</ul>';
  echo '</div>';
  echo '<div class="copyright-footer">';
  echo '<p class="copyright color-text-a">';
  echo '&copy; Copyright';
  echo '<span class="color-a">PropertyLime</span> All Rights Reserved.';
  echo '</p>';
  echo '</div>';
  echo '<div class="credits">';
  echo '';
  echo 'Designed by Angelo Labrador</a>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</footer>';
  ?>
    

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>