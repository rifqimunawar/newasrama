@section('title') {{ 'Team' }}@endsection
@extends('client.layout.app')
@section('content')
    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Data Penghuni Kamar</h2>
          <p></p>
        </div>

        <div class="row">
          @foreach ($teams as $team)
    
          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
            <div class="member">
              <div class="pic"><img src="{{ asset('storage/img/' . $team['img']) }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>{{ $team['nama'] }}</h4>
                <span>{{ $team['posisi'] }}</span>
                {{-- <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> --}}
              </div>
            </div>
          </div>

          @endforeach
        </div>

      </div>
    </section><!-- End Our Team Section -->
    @endsection