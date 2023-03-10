<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>ambulance</title>
  <link rel="icon" href="/template/assets/img/a.png" type="image/x-icon" style="width: 15">
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/template/assets/img/favicon.png" rel="icon">
  <link href="/template/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/template/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/template/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/template/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="/template/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/template/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/template/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

  <!-- Template Main CSS File -->
  <link href="/template/assets/css/main.css" rel="stylesheet">
</head>
<body>
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <h1>Tracing Ambulance<span>.</span></h1>
      </a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/index">Pencarian Ambulance</a></li>
        </ul>
      </nav><!-- .navbar -->
    </div>
    
  </header>
  <main id="main">
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/template/assets/img/R.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
        <form class="form" method="get" action="{{ route('search') }}">
          <div class="form-group w-100 mb-3">
              <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Kecamata Anda">
              <button type="submit" class="btn btn-primary mb-1">Cari</button>
          </div>
      </form>
      </div>
    </div>
  </main>


  @yield('content')

  

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>
  <!-- Vendor JS Files -->
  <script src="/template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/template/assets/vendor/aos/aos.js"></script>
  <script src="/template/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/template/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/template/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/template/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/template/assets/vendor/php-email-form/validate.js"></script>
  <!-- Template Main JS File -->
  <script src="/template/assets/js/main.js"></script>
</body>
</html>