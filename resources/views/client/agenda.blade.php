@section('title') {{ 'Agenda' }}@endsection
@extends('client.layout.app')
@section('content')
<!-- ======= Our Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg space-between">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="section-title">
            <h2>Jadwal Kegiatan</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                {{-- hari senin  --}}
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('storage/img/muslim.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">SENIN</h5>
                            <p class="card-text"></p>
                            <table class="table">
                                <table class="table table-bordered">
                                    <thead>
                                        <thead>
                                            <tr>
                                                <th scope="col">waktu</th>
                                                <th scope="col">kegiatan</th>
                                            </tr>
                                        </thead>
                                        @foreach ($senin as $item)
                                        <tr>
                                            <td>{{ $item->waktu }}</td>
                                            <td>{{ $item->kegiatan }}</td>
                                        </tr>
                                        @endforeach
                                </table>
                            </table>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"></small>
                        </div>
                    </div>
                </div>
                {{-- hari senin end --}}
                {{-- hari selasa start  --}}
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('storage/img/woman.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">SELASA</h5>
                            <p class="card-text"></p>
                            <table class="table">
                                <table class="table table-bordered">
                                    <thead>
                                        <thead>
                                            <tr>
                                                <th scope="col">waktu</th>
                                                <th scope="col">kegiatan</th>
                                            </tr>
                                        </thead>
                                        @foreach ($selasa as $item)
                                        <tr>
                                            <td>{{ $item->waktu }}</td>
                                            <td>{{ $item->kegiatan }}</td>
                                        </tr>
                                        @endforeach
                                </table>
                            </table>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"></small>
                        </div>
                    </div>
                </div>
                {{-- end hari selasa  --}}
                {{-- hari rabu start  --}}
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('storage/img/sholat.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">RABU</h5>
                            <p class="card-text"></p>
                            <table class="table">
                                <table class="table table-bordered">
                                    <thead>
                                        <thead>
                                            <tr>
                                                <th scope="col">waktu</th>
                                                <th scope="col">kegiatan</th>
                                            </tr>
                                        </thead>
                                        @foreach ($rabu as $item)
                                        <tr>
                                            <td>{{ $item->waktu }}</td>
                                            <td>{{ $item->kegiatan }}</td>
                                        </tr>
                                        @endforeach
                                </table>
                            </table>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"></small>
                        </div>
                    </div>
                </div>
                {{-- end hari rabu  --}}
                {{-- hari kamis start  --}}
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('storage/img/masjid.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">KAMIS</h5>
                            <p class="card-text"></p>
                            <table class="table">
                                <table class="table table-bordered">
                                    <thead>
                                        <thead>
                                            <tr>
                                                <th scope="col">waktu</th>
                                                <th scope="col">kegiatan</th>
                                            </tr>
                                        </thead>
                                        @foreach ($kamis as $item)
                                        <tr>
                                            <td>{{ $item->waktu }}</td>
                                            <td>{{ $item->kegiatan }}</td>
                                        </tr>
                                        @endforeach
                                </table>
                            </table>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"></small>
                        </div>
                    </div>
                </div>
                {{-- end hari kamis  --}}
                {{-- hari jumat start  --}}
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('storage/img/infaq.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">JUM'AT</h5>
                            <p class="card-text"></p>
                            <table class="table">
                                <table class="table table-bordered">
                                    <thead>
                                        <thead>
                                            <tr>
                                                <th scope="col">waktu</th>
                                                <th scope="col">kegiatan</th>
                                            </tr>
                                        </thead>
                                        @foreach ($jumat as $item)
                                        <tr>
                                            <td>{{ $item->waktu }}</td>
                                            <td>{{ $item->kegiatan }}</td>
                                        </tr>
                                        @endforeach
                                </table>
                            </table>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"></small>
                        </div>
                    </div>
                </div>
                {{-- end hari jumat  --}}
</section><!-- End Our Portfolio Section -->
@endsection