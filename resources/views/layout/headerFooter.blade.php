<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>WMC | @yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/mangrove.png" rel="icon">
  <link href="lib/bootstrap/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Cardo:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="lib/bootstrap/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/bootstrap/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="lib/bootstrap/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="lib/bootstrap/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="lib/bootstrap/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="lib/bootstrap/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: PhotoFolio
  * Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img src="img/mangrove.png" width="50" height="60">
        <h1 class="sitename">WMC-MIS</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="{{ (request()->is('/*')) ? 'active' : '' }}">Home<br></a></li>
          <li><a href="/program" class="{{ (request()->is('program*')) ? 'active' : '' }}">Program</a></li>
          <li class="dropdown"><a href="gallery.html"><span>Gallery</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="gallery.html">Nature</a></li>
              <li><a href="gallery.html">People</a></li>
              <li><a href="gallery.html">Architecture</a></li>
              <li><a href="gallery.html">Animals</a></li>
              <li><a href="gallery.html">Sports</a></li>
              <li><a href="gallery.html">Travel</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="/faq" class="{{ (request()->is('faq*')) ? 'active' : '' }}">FAQ</a></li>
          <li><a href="/ongoing">On-Going Program</a></li>
          <li><a href="/contact">Contact</a></li>
          <li><a href="/maps">Map</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <a href="https://embeye.tech/wmc/">
            <button class="btn btn-success">Login</button>
        </a>
      </div>

    </div>
  </header>
<!-- Content start -->
@yield('content')
<!-- Content end -->
</body>
<footer id="footer" class="footer">

<div class="container">
  <div class="copyright text-center ">
    <p>© <span>Copyright</span> 2024 <strong class="px-1 sitename">WMC-MIS</strong> <span>All Rights Reserved</span></p>
  </div>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you've purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>
</div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader">
<div class="line"></div>
</div>

<!-- Vendor JS Files -->
<script src="lib/bootstrap/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/bootstrap/assets/vendor/php-email-form/validate.js"></script>
<script src="lib/bootstrap/assets/vendor/aos/aos.js"></script>
<script src="lib/bootstrap/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="lib/bootstrap/assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Main JS File -->
<script src="lib/bootstrap/assets/js/main.js"></script>

</body>

</html>