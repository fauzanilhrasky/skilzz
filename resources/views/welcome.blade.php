@extends('layouts.app')

@section('content')



<section class="banner">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-12">
                <div class="row">
                    <div class="col-lg-6 col-12 copywriting">
                        <p class="story">
                            LEARN FROM EXPERT
                        </p>
                        <h1 class="header">
                            <span class="text-white"> Start Developing your ideas by</span> <span class="text-yellow">Learning Online</span> 
                        </h1>
                        <p class="support">
                            Our bootcamp is helping junior developers who <br> are really passionate in the programming.
                        </p>
                        <p class="cta">
                            <a href="{{ route('login') }}" class="btn cta-btn">
                                Get Started
                            </a>
                        </p>
                    </div>
                    <div class="col-lg-6 col-12 text-center">
                        <a href="#">
                            <img src="{{ asset('images/banner.png') }}" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="banner2">
    <div class="row brands">
        <div class="col-lg-12 col-12 text-center">
            <img src="{{ asset('images/brands.png') }}" alt="">
        </div>
    </div>
</section>


<section class="explanation">
    <div class="container">
        <div class="row text-center pb-70">
            <div class="col-lg-12 col-12 header-wrap">
                <p class="story">
                    OUR EXPLANATION
                </p>
                <h2 class="primary-header">
                    Forward Innovation
                </h2>
                <p class="support">
                    Our mission is to drive sustainable growth by fostering a culture of innovation and excellence.<br> 
                    We are committed to delivering cutting-edge solutions that exceed our customers' expectations,<br>
                    leveraging the latest technologies and creative approaches.
                    <br>
                    <br>
                    Through continuous improvement and a passion for innovation, We aim to set new standards in our industry, <br> 
                    ensuring long-term success for our stakeholders and making a positive impact on the communities we serve 
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-12">
                
            </div>
        </div>
    </div>
</section>

<section id="services" class="services section">
    <img src="" alt="">

      <!-- Section Title -->
      <div class="container section-title aos-init aos-animate" data-aos="fade-up">
        <h2>Services</h2>
        <p>Check Our <span class="description-title">Services</span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-activity icon"></i></div>
              <h4><a href="" class="stretched-link">Incubation</a></h4>
              <p>Our incubation services are designed to develop innovative ideas and turn them into viable solutions.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
              <h4><a href="" class="stretched-link">Inovation</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
              <h4><a href="" class="stretched-link">Workshop</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-broadcast icon"></i></div>
              <h4><a href="" class="stretched-link">Training</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section>

<section id="call-to-action" class="call-to-action section dark-background">
    <img src="{{ asset('images/training.png') }}" alt="">
  
        <div class="container">
          <div class="row justify-content-center aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-xl-10">
              <div class="text-center">
                <h3>Call To Action</h3>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="cta-btn1" href="{{ route('login') }}">Apply Now ></a>
                <a class="cta-btn" href="#">Contact Us</a>
              </div>
            </div>
          </div>
        </div>
  
      </section>

      


<section class="benefits">
    <div class="container">
        <div class="row text-center pb-70">
            <div class="col-lg-12 col-12 header-wrap">
                <p class="story">
                    OUR SUPER BENEFITS
                </p>
                <h2 class="primary-header">
                    Portofolio
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-12">
                <div class="item-benefit">
                    <img src="{{ asset('images/ic_globe.png') }}" class="icon" alt="">
                    <h3 class="title">
                        Diversity
                    </h3>
                    <p class="support">
                        Learn from anyone around the <br> world and get a new skills
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="item-benefit">
                    <img src="{{ asset('images/ic_globe-1.png') }}" class="icon" alt="">
                    <h3 class="title">
                        A.I Guideline
                    </h3>
                    <p class="support">
                        Lara will help you to choose <br> which path that suitable for you
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="item-benefit">
                    <img src="{{ asset('images/ic_globe-2.png') }}" class="icon" alt="">
                    <h3 class="title">
                        1-1 Mentoring
                    </h3>
                    <p class="support">
                        We will ensure that you will get <br> what you really do need
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="item-benefit">
                    <img src="{{ asset('images/ic_globe-3.png') }}" class="icon" alt="">
                    <h3 class="title">
                        Future Job
                    </h3>
                    <p class="support">
                        Get your dream job in your dream <br> company together with us
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="banner3">
    <div class="row brands">
        <div class="text-center d-flex flex-column align-items-center">
            <h1>OUR PARTNERS</h1>
            <p>All Partners Provided</p>
            <div class="col-lg-12 col-12 text-center">
                <img src="{{ asset('images/brands.png') }}" alt="">
            </div>
        </div>
    </div>
</section>

<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center active">
    <i class="bi bi-arrow-up-short">
        </i>
    </a>

<!--<section class="steps">
    <div class="container">
        <div class="row item-step pb-70">
            <div class="col-lg-6 col-12 text-center">
                <img src="{{ asset('images/step1.png') }}" class="cover" alt="">
            </div>
            <div class="col-lg-6 col-12 text-left copywriting">
                <p class="story">
                    BETTER CAREER
                </p>
                <h2 class="primary-header">
                    Prepare The Journey
                </h2>
                <p class="support">
                    Learn from anyone around the <br> world and get a new skills
                </p>
                <p class="mt-5">
                    <a href="#" class="btn btn-master btn-secondary me-3">
                        Learn More
                    </a>
                </p>
            </div>
        </div>
        <div class="row item-step pb-70">
            <div class="col-lg-6 col-12 text-left copywriting pl-150">
                <p class="story">
                    STUDY HARDER
                </p>
                <h2 class="primary-header">
                    Finish The Project
                </h2>
                <p class="support">
                    Each of you will be joining the private group and also <br> working together with team members on project
                </p>
                <p class="mt-5">
                    <a href="#" class="btn btn-master btn-secondary me-3">
                        View Demo
                    </a>
                </p>
            </div>
            <div class="col-lg-6 col-12 text-center">
                <img src="{{ asset('images/step2.png') }}" class="cover" alt="">
            </div>

        </div>
        <div class="row item-step">
            <div class="col-lg-6 col-12 text-center">
                <img src="{{ asset('images/step3.png') }}" class="cover" alt="">
            </div>
            <div class="col-lg-6 col-12 text-left copywriting">
                <p class="story">
                    END GAME
                </p>
                <h2 class="primary-header">
                    Big Demo Day
                </h2>
                <p class="support">
                    Learn how to speaking in public to demonstrate your <br> final project and receive the important feedbacks
                </p>
                <p class="mt-5">
                    <a href="#" class="btn btn-master btn-secondary me-3">
                        Showcase
                    </a>
                </p>
            </div>
        </div>
    </div>
</section> -->


@endsection