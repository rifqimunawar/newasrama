
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="/">Asrama Puteri Baiturrahman</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto {{ '/' ==request()->path()? 'active' :''}}" href="/">Home</a></li>
          <li><a class="nav-link scrollto {{ 'about' ==request()->path()? 'active' :''}} " href="/#about">About</a></li>
          <li><a class="nav-link scrollto {{ 'galeri' ==request()->path()? 'active' :''}}" href="/galeri">Galeri</a></li>
          <li><a class="nav-link scrollto {{ 'berita' ==request()->path()? 'active' :''}} " href="/agenda">Agenda</a></li>
          <li><a class="nav-link scrollto {{ 'team' ==request()->path()? 'active' :''}} " href="/team">Penghuni</a></li>
          <li><a class="nav-link scrollto {{ 'contact' ==request()->path()? 'active' :''}}" href="/contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
