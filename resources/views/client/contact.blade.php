@section('title') {{ 'Berita' }}@endsection
@extends('client.layout.app')
@section('content')

<!-- ======= Contact Us Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Hubungi Kami</h2>
        </div>

        <div class="row">

            <div class="col-lg-4 d-flex" data-aos="fade-up">
                <div class="info-box">
                    <i class="bx bx-map"></i>
                    <h3>Alamat</h3>
                    <p>Jln. Jupiter Tengah 5 No.6 Kota Bandung</p>
                </div>
            </div>

            <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="100">
                <div class="info-box">
                    <i class="bx bx-envelope"></i>
                    <h3>Email</h3>
                    <p>yayasanbaiturrahmanaddualy@gmail.com<br> </p>
                </div>
            </div>

            <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="200">
                <div class="info-box ">
                    <i class="bx bx-phone-call"></i>
                    <h3>Contact</h3>
                    <p>+6281298137051<br> </p>
                </div>
            </div>

            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">



                <form action="/contact/store" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 form-group my-3">
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Your Name"
                                required>
                        </div>
                        <div class="col-lg-6 form-group my-3">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                required>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="text" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="text-center"><button type="submit" class="btn btn-primary my-3">Send Message</button>
                    </div>
                </form>




            </div>

        </div>

    </div>
</section><!-- End Contact Us Section -->


</div>
</div>
</section><!-- End Our Portfolio Section -->
@endsection