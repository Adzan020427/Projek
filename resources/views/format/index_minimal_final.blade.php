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

  <!-- <div class="icon-boxes position-relative" data-aos="fade-up" data-aos-delay="200">
    <div class="container position-relative">
      <div class="row gy-4 mt-5">

        <div class="col-xl-3 col-md-6">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-easel"></i></div>
            <h4 class="title"><a href="" class="stretched-link">Lorem Ipsum</a></h4>
          </div>
        </div>

        <div class="col-xl-3 col-md-6">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-gem"></i></div>
            <h4 class="title"><a href="" class="stretched-link">Sed ut perspiciatis</a></h4>
          </div>
        </div>

        <div class="col-xl-3 col-md-6">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-geo-alt"></i></div>
            <h4 class="title"><a href="" class="stretched-link">Magni Dolores</a></h4>
          </div>
        </div>

        <div class="col-xl-3 col-md-6">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-command"></i></div>
            <h4 class="title"><a href="" class="stretched-link">Nemo Enim</a></h4>
          </div>
        </div>

      </div>
    </div>
  </div> -->

</section>


<!-- <section id="about" class="about section">

  
  <div class="container section-title" data-aos="fade-up">
    <h2>About Us<br></h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div>

  <div class="container">

    <div class="row gy-4">
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <h3>Voluptatem dignissimos provident laboris nisi ut aliquip ex ea commodo</h3>
        <img src="{{asset('assets/img/about.jpg')}}" class="img-fluid rounded-4 mb-4" alt="">
        <p>Ut fugiat ut sunt quia veniam. Voluptate perferendis perspiciatis quod nisi et. Placeat debitis quia recusandae odit et consequatur voluptatem. Dignissimos pariatur consectetur fugiat voluptas ea.</p>
        <p>Temporibus nihil enim deserunt sed ea. Provident sit expedita aut cupiditate nihil vitae quo officia vel. Blanditiis eligendi possimus et in cum. Quidem eos ut sint rem veniam qui. Ut ut repellendus nobis tempore doloribus debitis explicabo similique sit. Accusantium sed ut omnis beatae neque deleniti repellendus.</p>
      </div>
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
        <div class="content ps-0 ps-lg-5">
          <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <ul>
            <li><i class="bi bi-check-circle-fill"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
            <li><i class="bi bi-check-circle-fill"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
            <li><i class="bi bi-check-circle-fill"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
          </ul>
          <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
          </p>

          <div class="position-relative mt-4">
            <img src="{{asset('assets/img/about-2.jpg')}}" class="img-fluid rounded-4" alt="">
            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
          </div>
        </div>
      </div>
    </div>

  </div>

</section> -->


<!-- <section id="stats" class="stats section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4 align-items-center">

      <div class="col-lg-5">
        <img src="assets/img/stats-img.svg" alt="" class="img-fluid">
      </div>

      <div class="col-lg-7">

        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="stats-item d-flex">
              <i class="bi bi-emoji-smile flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Happy Clients</strong> <span>consequuntur quae</span></p>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="stats-item d-flex">
              <i class="bi bi-journal-richtext flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Projects</strong> <span>adipisci atque cum quia aut</span></p>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="stats-item d-flex">
              <i class="bi bi-headset flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Hours Of Support</strong> <span>aut commodi quaerat</span></p>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="stats-item d-flex">
              <i class="bi bi-people flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Hard Workers</strong> <span>rerum asperiores dolor</span></p>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>

  </div>

</section> -->


<!-- <section id="call-to-action" class="call-to-action section dark-background">

  <div class="container">
    <img src="{{asset('assets/img/cta-bg.jpg')}}" alt="">
    <div class="content row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
      <div class="col-xl-10">
        <div class="text-center">
          <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox play-btn"></a>
          <h3>Call To Action</h3>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a class="cta-btn" href="#">Call To Action</a>
        </div>
      </div>
    </div>
  </div>

</section> -->


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
          <a href="{{ route('service_Details') }}" class="readmore stretched-link">Form Pelaporan <i class="bi bi-arrow-right"></i></a>
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

      <!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-easel"></i>
          </div>
          <h3>Ledo Markt</h3>
          <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
          <a href="service-details.html" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div> -->

      <!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-bounding-box-circles"></i>
          </div>
          <h3>Asperiores Commodit</h3>
          <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
          <a href="service-details.html" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div> -->

      <!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-calendar4-week"></i>
          </div>
          <h3>Velit Doloremque</h3>
          <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
          <a href="service-details.html" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div> -->

      <!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-chat-square-text"></i>
          </div>
          <h3>Dolori Architecto</h3>
          <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
          <a href="service-details.html" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div> -->

    </div>

  </div>

</section>

<!-- <section id="recent-posts" class="recent-posts section">

  
  <div class="container section-title" data-aos="fade-up">
    <h2>Recent Blog Posts</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div>

  <div class="container">

    <div class="row gy-4">

      <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <article>

          <div class="post-img">
            <img src="{{asset('assets/img/blog/blog-1.jpg')}}" alt="" class="img-fluid">
          </div>

          <p class="post-category">Politics</p>

          <h2 class="title">
            <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
          </h2>

          <div class="d-flex align-items-center">
            <img src="{{asset('assets/img/blog/blog-author.jpg')}}" alt="" class="img-fluid post-author-img flex-shrink-0">
            <div class="post-meta">
              <p class="post-author">Maria Doe</p>
              <p class="post-date">
                <time datetime="2022-01-01">Jan 1, 2022</time>
              </p>
            </div>
          </div>

        </article>
      </div>

      <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <article>

          <div class="post-img">
            <img src="{{asset('assets/img/blog/blog-2.jpg')}}" alt="" class="img-fluid">
          </div>

          <p class="post-category">Sports</p>

          <h2 class="title">
            <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
          </h2>

          <div class="d-flex align-items-center">
            <img src="{{asset('assets/img/blog/blog-author-2.jpg')}}" alt="" class="img-fluid post-author-img flex-shrink-0">
            <div class="post-meta">
              <p class="post-author">Allisa Mayer</p>
              <p class="post-date">
                <time datetime="2022-01-01">Jun 5, 2022</time>
              </p>
            </div>
          </div>

        </article>
      </div>

      <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <article>

          <div class="post-img">
            <img src="{{asset('assets/img/blog/blog-3.jpg')}}" alt="" class="img-fluid">
          </div>

          <p class="post-category">Entertainment</p>

          <h2 class="title">
            <a href="blog-details.blade.php">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
          </h2>

          <div class="d-flex align-items-center">
            <img src="{{asset('assets/img/blog/blog-author-3.jpg')}}" alt="" class="img-fluid post-author-img flex-shrink-0">
            <div class="post-meta">
              <p class="post-author">Mark Dower</p>
              <p class="post-date">
                <time datetime="2022-01-01">Jun 22, 2022</time>
              </p>
            </div>
          </div>

        </article>
      </div>

    </div>

  </div>

</section> -->




</main>


@endsection
  