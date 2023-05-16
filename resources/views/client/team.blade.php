@section('title') {{ 'Penghuni' }}@endsection
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
                        <div class="pic">
                            <img src="{{ asset('storage/img/' . $team->img) }}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>{{ $team->name }}</h4>
                            <a href="/kamar/user/{{ $team->kamar->id }}">
                              <span type="text" >
                                {{ $team->kamar->kamar }}
                              </span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
      </div>
    </section><!-- End Our Team Section -->

    @endsection

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
