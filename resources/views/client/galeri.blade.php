@section('title') {{ 'Galeri' }}@endsection
@extends('client.layout.app')
@section('content')
    <!-- ======= Our Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title">
          <h2>Galeri Kegiatan</h2>

        <div class="row portfolio-container">

          @foreach ($galeris as $galeri)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/' . $galeri['img']) }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p>{{ $galeri['judul'] }}</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/' . $galeri['img']) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $galeri['judul'] }}"><i class="bi bi-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </section><!-- End Our Portfolio Section -->
    @endsection