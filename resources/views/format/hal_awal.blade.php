@extends('layout.master3')

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


</main>


@endsection
  