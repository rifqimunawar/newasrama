@section('title') {{ 'Home' }}@endsection
@extends('client.layout.app')
@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="2000">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active"
                    style="background-image: url({{ asset('storage/img/asrama2.jpeg' ) }});">
                    <div class="carousel-container">
                        <div class="carousel-content container">
                            <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Asrama Puteri
                                    Baiturrahman</span></h2>
                            <p class="animate__animated animate__fadeInUp">Asrama Puteri Baiturrahman merupakan asrama
                                yang berdiri didalam naungan Yayasan Baiturrahman Ad-Dually dimana Yayasan tersebut
                                mengelola beberapa lembaga seperti, Pondok Pesantren Baiturrahman, SMP Plus
                                Baiturrahman, serta Travel Umroh dan Haji. Asrama Puteri Baiturrahman berdiri sejak 20
                                Desember 2002 yang dimana dipimpin oleh K.H. Buya Salimuddin L.c beserta beberapa
                                puteranya. Terletak di salah satu tempat yang strategis yaitu di Jl. Jupiter Tengah 5
                                no.6. Asrama puteri ini terbuka untuk umum namun dikhususkan bagi para Mahasiswa yang
                                akan menempuh pendidikan di berbagai Universitas di Bandung. Terdapat sekitar lebih dari
                                25 kamar yang dapat dihuni, dimana 1 kamar dapat dihuni oleh 2 orang dengan total 40
                                santri yang menjadi penghuni asrama tercatat hingga 20 Juli 2022..</p>
                                @if (Auth::check())
                                <a href="/logout"class="btn-get-started animate__animated animate__fadeInUp scrollto">
                                    Logout
                                </a>
                                @else
                                    <a href="{{ route('login') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">
                                        Login
                                    </a>
                                @endif
                        </div>
                    </div>
                </div>

                <!-- Slide 2 dan selanjutnya ada disini -->
                @foreach ($home as $hero)
                <div class="carousel-item" style="background-image: url({{ asset('storage/img/' . $hero['img']) }});">
                    <div class="carousel-container">
                        <div class="carousel-content container">
                            <h2 class="animate__animated animate__fadeInDown">{{ $hero['judul'] }}</h2>
                            <p class="animate__animated animate__fadeInUp">{{ $hero['deskripsi'] }}</p>
                            @if (Auth::check())
                            <a href="/logout"class="btn-get-started animate__animated animate__fadeInUp scrollto">
                                Logout
                            </a>
                            @else
                                <a href="{{ route('login') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">
                                    Login
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            @foreach ($about as $bout)
            <div class="row no-gutters">
                <div class="col-lg-6 video-box">
                    <img src="{{ asset('storage/img/' . $bout['img']) }}" class="img-fluid" alt="">
                    <a href="{{ $bout['link'] }}" class="venobox play-btn mb-4" data-vbtype="video"
                        data-autoplay="true"></a>
                </div>

                <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

                    <div class="section-title">
                        <h2>About Us</h2>
                        <p>{{ $bout['deskripsi'] }}</p>
                    </div>

                </div>
            </div>
            @endforeach


        </div>
    </section>
    <!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    <section class="counts section-bg">
        <div class="container">

            <div class="row">


                <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="count-box">
                        <i class="bi bi-document-folder" style="color: #c042ff;"></i>
                        <span data-purecounter-start="0" data-purecounter-end="{{ $kamar }}" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Jumlah Kamar</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
                    <div class="count-box">
                        <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
                        <span data-purecounter-start="0" data-purecounter-end="{{ $count }}"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Data Penghuni</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="count-box">
                        <i class="bi bi-live-support" style="color: #46d1ff;"></i>
                        <span data-purecounter-start="0" data-purecounter-end="{{ $keg }}" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Jumlah Kegiatan</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="600">
                    <div class="count-box">
                        <i class="bi bi-users-alt-5" style="color: #ffb459;"></i>
                        <span data-purecounter-start="0" data-purecounter-end="{{ $gal }}" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Galeri Uploads</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->
</main><!-- End #main -->

@endsection