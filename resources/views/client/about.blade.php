@section('title') {{ 'About' }}@endsection
@extends('client.layout.app')
@section('content')


{{-- <main id="main">

  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      @foreach ($about as $bout)
      <div class="row no-gutters">
        <div class="col-lg-6 video-box">
          <img src="{{ asset('storage/img/' . $bout['img']) }}" class="img-fluid" alt="">
<a href="{{ $bout['link'] }}" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
</div>

<div class="col-lg-6 d-flex flex-column justify-content-center about-content">

    <div class="section-title">
        <h2>Asrama Puteri Baiturrahman</h2>
        <p>{{ $bout['deskripsiabout'] }}</p>
    </div>

</div>
</div>
@endforeach


</div>
</section>


<section class="counts section-bg">
    <div class="container">

        <div class="row">

            <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
                <div class="count-box">
                    <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
                    <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Happy Clients</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="count-box">
                    <i class="bi bi-document-folder" style="color: #c042ff;"></i>
                    <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Projects</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="400">
                <div class="count-box">
                    <i class="bi bi-live-support" style="color: #46d1ff;"></i>
                    <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Hours Of Support</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="600">
                <div class="count-box">
                    <i class="bi bi-users-alt-5" style="color: #ffb459;"></i>
                    <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Hard Workers</p>
                </div>
            </div>

        </div>

    </div>
</section>
</main>
@endsection --}}