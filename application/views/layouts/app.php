<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="generator" content="Hugo 0.88.1">
  <title><?= isset($title) ? $title : 'CIShop' ?> CodeIgniter E-commerce</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbar-fixed/">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>


  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="/assets/libs/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/css/app.css">
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="/assets/fonts/icomoon/style.css">
  <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="/assets/css/theme.css"> <!-- tambahan -->
  <link rel="stylesheet" href="/assets/css/loopple/loopple.css"> <!-- tambahan -->


  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="/assets/libs/fontawesome/css/all.min.css">


  <!-- Favicons -->
  <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#7952b3">


  <!-- Custom styles for this template -->
  <link href="/assets/css/app.css" rel="stylesheet">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>

  <!-- Navbar -->
  <?php $this->load->view('layouts/_navbar'); ?>
  <!-- End Navbar -->

  <!-- Content -->
  <?php $this->load->view($page); ?>
  <!-- End Content -->

  <!-- Footer -->
  <?php $this->load->view('layouts/_footer'); ?>
  <!-- End Footer -->


  <script src="/assets/libs/jquery/jquery-3.6.0.min.js"></script>
  <script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/js/app.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

</body>

</html>