<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title')
@section('meta_description')

@section('content')

<!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>About Us</h1>
              <p class="mb-0">Discover the story behind Deluxe IT Services and the passion that drives our innovation. We're dedicated to delivering excellence and cutting-edge solutions. Explore our mission and the core values that shape everything we do..</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="/">Home</a></li>
            <li class="current">About Us</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->
<!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-center gy-5">

          <div class="col-xl-5 content">
            <h3>About Us</h3>
            <p>At our core, we're a London-based web design agency driven by a simple idea: building smarter, faster, and more accessible websites without writing code. We believe great design shouldn't be limited by complex development. That's why we harness the power of modern no-code tools to bring ideas to life—quickly, efficiently, and beautifully.</p>

            <p>From startups to established brands, we help businesses launch impactful digital experiences without the traditional development bottlenecks. Every project we take on is rooted in strategy, creativity, and a commitment to usability.</p>

            <p>For us, it's not just about building websites. It's about redefining how the web is built.</p>
            <!-- <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a> -->
          </div>

          <div class="col-xl-7">
            <div class="row gy-4 icon-boxes">

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box">
                  <i class="bi bi-buildings"></i>
                  <h3>Our Vision</h3>
                  <p>To empower businesses with beautifully designed, high-performing websites—built faster and smarter using no-code tools.</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <i class="bi bi-clipboard-pulse"></i>
                  <h3>Open Possibilities</h3>
                  <p>We often find inspiration in unexpected places. Challenges become opportunities, and creativity leads the way.</p>

                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                  <i class="bi bi-command"></i>
                 <h3>Complete Dedication</h3>
                  <p>We handle every challenge with care and accountability. No shortcuts—just thoughtful solutions and lasting results.</p>

                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box">
                  <i class="bi bi-graph-up-arrow"></i>
                 <h3>Smart Solutions</h3>
                  <p>We create with purpose, combining function and beauty. Every choice is intentional, every detail thoughtfully crafted.</p>

                </div>
              </div> <!-- End Icon Box -->

            </div>
          </div>

        </div>
      </div>

    </section><!-- /About Section -->

@endsection 