<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title') | Dashboard</title>

  <!-- Custom fonts -->
  <link href="{{ asset ('vendoradmin/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link href="{{ asset ('cssadmin/sb-admin-2.min.css') }}" rel="stylesheet" type="text/css">

</head>

<body id="page-top">


  <!-- Page Wrapper -->
  <div id="wrapper">

    @include('admin.partials.navbar')
    @include('admin.partials.topbar')
    @yield('content')
    @include('admin.partials.footer')

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset ('vendoradmin/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset ('vendoradmin/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset ('vendoradmin/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset ('jsadmin/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset ('vendoradmin/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset ('jsadmin/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset ('jsadmin/demo/chart-pie-demo.js') }}"></script>

</body>

</html>