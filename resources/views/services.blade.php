@extends('layout.app')

@section('content')

<main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Services</h2>
            <p>
                Hate and the ones who are never worked. Officially, where hatred is pleasure, follow it and hatred itself. There are pains of truth, born of sorrows. Almost by reason, they are. Seek the pain itself.
            </p>

            <a class="cta-btn" href="{{url('/contact')}}">Available for hire</a>

          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex">
            <div class="service-item position-relative">
              <i class="bi bi-activity"></i>
              <h4><a href="#" class="stretched-link">Web Application</a></h4>
              <p>Elevate your online presence with our streamlined web application.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex">
            <div class="service-item position-relative">
              <i class="bi bi-bounding-box-circles"></i>
              <h4><a href="#" class="stretched-link">Web Design and Development</a></h4>
              <p>Our expert team specializes in creating visually stunning and user-friendly websites.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex">
            <div class="service-item position-relative">
              <i class="bi bi-calendar4-week"></i>
              <h4><a href="#" class="stretched-link">E-commerce Solutions</a></h4>
              <p>Streamline your online sales with our robust e-commerce solutions.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex">
            <div class="service-item position-relative">
              <i class="bi bi-broadcast"></i>
              <h4><a href="#" class="stretched-link">Data Science</a></h4>
              <p>Uncover valuable insights and make informed decisions with the power of data science.</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p>What they are saying</p>
        </div>

        <div class="slides-3 swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                    Exceptional service! The team's precision, professionalism, and innovative approach exceeded expectations. A truly outstanding experience. Highly recommended for those seeking excellence and unparalleled quality in every aspect of their service.
                </p>
                <div class="profile mt-auto">
                  <img src="{{asset('assets/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                    Flawless service! The team's attention to detail and commitment to excellence were remarkable. They transformed our vision into reality with professionalism and innovation. An outstanding experience, highly recommended for those who expect nothing but the best
                </p>
                <div class="profile mt-auto">
                  <img src="{{asset('assets/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                    Exemplary service! The team's dedication to perfection and innovative solutions was impressive. They seamlessly brought our ideas to life with professionalism. An outstanding experience, highly recommended for anyone in search of top-notch quality and exceptional results.
                </p>
                <div class="profile mt-auto">
                  <img src="{{asset('assets/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                    Exceptional service! The team's precision, innovation, and professionalism exceeded expectations. A standout experience, highly recommended for those seeking top-tier quality and transformative results.
                </p>
                <div class="profile mt-auto">
                  <img src="{{asset('assets/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                    Outstanding service! The team's meticulous approach and innovative solutions surpassed expectations. A truly exceptional experience, highly recommended for those desiring excellence and a seamless journey from vision to reality.
                </p>
                <div class="profile mt-auto">
                  <img src="{{asset('assets/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

@endsection
