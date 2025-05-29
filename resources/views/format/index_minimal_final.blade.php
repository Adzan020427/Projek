@extends('layout.master')

@section('isi')

<main class="main">


<section id="hero" class="hero section accent-background">

  <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-5 justify-content-between">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <h2><span>Selamat datang</span><span class="accent"> di web pengeloaan sampah</span></h2>
        <p>Pengeloaan sampah dan pelaporan mengenai pembuangan sampah sembarangan dan tempat pembuangan sampah sembarangan.</p>
        <div class="d-flex">
          <a href="#about" class="btn-get-started">Get Started</a>
          <!-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
        </div>
      </div>
      <div class="col-lg-5 order-1 order-lg-2">
        <img src="assets/img/hero-img.svg" class="img-fluid" alt="">
      </div>
    </div>
  </div>

</section>


<section id="services" class="services section">

  
  <div class="container section-title" data-aos="fade-up">
    <h2>Pelaporan Serta Edukasi</h2>
    <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> -->
  </div>

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item  position-relative">
          <div class="icon">
            <i class="bi bi-activity"></i>
          </div>
          <h3>Pelapoaran</h3>
          <p>Pada web ini ditujukan difokuskan pada pelaporan tentang pembuangan sampah sembarangan, dimana sampah dibuang semabarangan</p>
          <a href="{{ route('pengaduan') }}" class="readmore stretched-link">Form Pelaporan <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-broadcast"></i>
          </div>
          <h3>Edukasi</h3>
          <p>Edukasi mengenai samoah sangat perlu bagi masyarakat agar sampah dapat diolah atau disortir sebelum dibuang di tempat pembuangan samah umum</p>
          <a href="service-details.html" class="readmore stretched-link">Form Edukasi <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>


    </div>

  </div>

</section>

</main>


@endsection
