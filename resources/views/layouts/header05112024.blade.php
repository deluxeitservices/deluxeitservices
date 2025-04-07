<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>@yield('title', 'Default Title')</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <!-- css link -->

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <link rel="stylesheet" href="{{ URL::asset('/css/style.css') }}">
     <link rel="stylesheet" href="{{ URL::asset('/css/responsive.css') }}">
     <link rel="stylesheet" href="{{ URL::asset('/css/header.css') }}">
     <link rel="stylesheet" href="{{ URL::asset('/css/footer.css') }}">
     <link rel="stylesheet" href="{{ URL::asset('/css/custom_css_new.css') }}">
     <link rel="stylesheet" href="{{ URL::asset('/css/custom.css') }}">
    
    <!-- bootstrap link -->
    <link rel="stylesheet" href="{{ URL::asset('/css/bootstrap/bootstrap.min.css') }}">
    
    <!--  font link -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

    <!-- icon link -->
    <link rel="stylesheet" href="{{ URL::asset('/css/min.css') }}">

    <!-- slider link -->
    <link rel="stylesheet" href="{{ URL::asset('/css/slider/swiper-bundle.min.css') }}" />

    <!-- aos link -->
    <link rel="stylesheet" href="{{ URL::asset('/css/animation/aos.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('/css/custom.css') }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://js.stripe.com/v3/"></script>



</head>
<body>
  <section id="nav_wrapper">

    <header class="header_wrapper">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-sm-12">
                    <div class="hedader-locatin d-flex gap-2 justify-content-md-start justify-content-center align-items-center">
                        <!-- <i class="fa fa-location-dot"></i>
                        <p class="hed-text1">Locate Us</p> 
                        <div class="vr mt-2"></div> -->
                        <i class="fa-regular fa-calendar"></i>
                       <a href="" class="text-decoration-none"> <p class="hed-text1">Schedule an Appointment</p> </a>
                    </div>
                </div>
                <!-- <div class="col-md-4 col-sm-12">
                    <div class="hed-main text-center">
                        <p class="hed-text1">Massive Summer Sale Up To 60% Off - Shop Now</p>
                    </div>
                </div> -->
                <div class="col-md-6 col-sm-12">
                    <div class="hed-email-main d-flex justify-content-md-end justify-content-center ">
                        <!-- <a href="" class="d-flex gap-2 align-items-center text-decoration-none">
                            <i class="fa-regular fa-envelope"></i> preownedluxuries@gmail.com
                        </a> -->
                        <a href="mailto:preownedluxuries@gmail.com" class="d-flex gap-2 align-items-center text-decoration-none">
                            <i class="fa-regular fa-envelope"></i> preownedluxuries@gmail.com
                        </a>
                    </div>                    
                </div>
            </div>
        </div>
    </header>
    
    <nav  class="nav_wrapper">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
              <div class="d-flex  gap-2 nav-main-icon  justify-content-center d-lg-none d-block" role="search">
                <!-- <div class="footer-map d-flex gap-2 justify-content-md-start justify-content-center ">
                  <a href="tel:+4733378901" class="text-decoration-none d-flex gap-2 m-0 footer-text3"><i class="fa-solid fa-phone pt-1"></i>  +44 7930997552</a>
                </div> -->
                  <!-- <a href="" class="text-decoration-none d-flex gap-2 m-0 align-items-center"><i class="fa-regular fa-user"></i></a> -->
                  @if (Route::has('login'))
                        
                        @auth
                            <!-- <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><i class="fa fa-tachometer" aria-hidden="true"></i></a> -->
                            <a href="{{ url('/dashboard') }}" class="text-decoration-none d-flex gap-2 m-0 align-items-center" title="Login"><i style="color:var(--dark-blue);font-weight:600;" class="fa-regular fa-user"></i></a>

                        @else
                            <a href="{{ route('login') }}" class="text-decoration-none d-flex gap-2 m-0 align-items-center" title="Login"><i class="fa-regular fa-user"></i></a>
                            <!-- @if (Route::has('register'))
                                 <a href="{{ route('register') }}" class="text-decoration-none d-flex gap-2 m-0 align-items-center" title="Login"><i class="fa-regular fa-user"></i></a>
                            @endif -->
                        @endauth
                   
                @endif
                  <div class="vr"></div>
                  <!-- <a href="" class="text-decoration-none d-flex gap-2 m-0 align-items-center"><i class="fa-solid fa-magnifying-glass"></i></a> -->
                  <a href="#" class="text-decoration-none d-flex gap-2 m-0 align-items-center searchmobile">
                    <i class="fa-solid fa-magnifying-glass"></i>
                  </a>

                  <div class="d-none d-flex gap-2 align-items-center searchinput">
                      <input type="text" id="searchInputMob" class="form-control" placeholder="Search...">
                      <button id="closeinput" class="btn btn-close" aria-label="Close search"></button>
                  </div>
                  <!-- <a href="" class="text-decoration-none d-flex gap-2 m-0 align-items-center"><i class="fa-solid fa-basket-shopping"></i></a> -->
                  <a href="{{ route('wishlist') }}" class="text-decoration-none d-flex gap-2 m-0 align-items-center"><i class="fa-regular fa-heart"></i>
                    <span class="cart-count top-0 start-100 translate-middle">
                      {{ $favCount ?? 0 }}
                    </span>
                  </a>
                  <a href="{{ route('cart.show') }}" class="text-decoration-none d-flex gap-2 m-0 align-items-center cart-number position-relative">
                      <i class="fa-solid fa-basket-shopping "></i>
                      <span class="cart-count position-absolute top-0 start-100 translate-middle">{{ $cartItemCount ?? 0 }}</span> <!-- Display the count -->
                  </a>
                 
              </div>
              <a class="navbar-brand" href="/">
                <img src="{{ asset('images/main-logo.png') }}" alt="" class=" " height="80px">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <input type="checkbox" id="checkbox">
                <label for="checkbox" class="toggle">
                    <div class="bars" id="bar1"></div>
                    <div class="bars" id="bar2"></div>
                    <div class="bars" id="bar3"></div>
                </label>
              </button>
              <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center navbar-nav-scroll" style="--bs-scroll-height: 400px;">
                   <li class="nav-item">
                    <a href="{{ route('shop') }}" class="nav-link">Shop</a>
                  </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link" href="{{ route('shop') }}?categories=5" >
                        Watches
                      </a>
                    <!-- <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Watches
                    </a> -->
                    <div class="dropdown-menu  px-3 rounded-3 border-0 shadow">
                      <div class="row">
                         <div class="col-lg-4">
                              <div class="border-0 mt-4 rounded-0 overflow-hidden">
                                  <div class="img-container position-relative"> 
                                      <img src="{{ asset('images/rolex111.jpeg') }}" class="card-img categoryimg" loading="lazy" alt="...">
                                      <h5 class="card-title text-center title-overlay">Watchs</h5>
                                  </div>
                              </div>
                              
                          </div>
                        <div class="col-sm-8">
                          
                            <div class="d-flex align-items-center py-3 px-1 rounded-3">
                              
                              
                                <?php 
                                $getmenudatajwellary = headerMenu(2);
                                $counter = 0; // Initialize a counter
                                ?>

                                <div class="text ps-4">
                                <h5>Top Brand</h5>
                                <?php foreach ($getmenudatajwellary as $menukey => $value) { ?>
                                    <a href="{{ route('shop') }}?categories=5&brand=<?php echo $value->id; ?>" class="sub-menu "><i class="fa-solid fa-caret-right"></i> <?php echo $value->name; ?></a>

                                    <?php 
                                    $counter++;
                                    
                                    // If the counter reaches 5, close the current div and start a new one
                                    if ($counter % 4 == 0) { 
                                    ?>
                                        </div> <!-- Close current div after 5 items -->
                                        <!-- Open new div for next set of 5 items -->
                                        <div class="text ps-4">
                                          <h5>&nbsp;</h5>
                                    <?php 
                                    } 
                                } ?>
                                </div> <!-- Close the last open div -->
                            


                             
                            </div>
                          
                        </div>
                        
                         
                      

                      </div>
                    </div>
                  </li>
                    <li class="nav-item dropdown">
                     <a class="nav-link" href="{{ route('shop') }}?categories=<?php echo headerMenu(3); ?>">
                          Jewellery
                      </a>
                   <!--  <a class="nav-link dropdown-toggle" href="{{ route('shop') }}?categories=48" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Jewellery
                    </a> -->
                    <div class="dropdown-menu px-3 rounded-3 border-0 shadow">
                      <div class="row">
                        <!-- <div class="col-sm-4">
                          <a href="#">
                            <div class="d-flex align-items-center py-3 px-1 rounded-3">
                              <div class="icon px-3 bg-warning-subtle rounded-3 fs-1">
                                <i class="bi bi-tv"></i>
                              </div>
                              <div class="text ps-3">
                                <h5>BY BRANDS</h5>
                                <a href="#" class="sub-menu ">Cartier</a>
                                <a href="#" class="sub-menu ">Tiffany</a>
                                <a href="#" class="sub-menu ">Van Cleef & Arpels</a>
                                <a href="#" class="sub-menu ">Bvlgari</a>
                                <a href="#" class="sub-menu ">Chopard</a>
                                <a href="#" class="sub-menu ">Harry Winston</a>
                              </div>
                            </div>
                          </a>
                        </div> -->
                         <div class="col-lg-4">
                              <div class="border-0 mt-4 rounded-0 overflow-hidden">
                                  <div class="img-container position-relative"> 
                                      <img src="{{ asset('images/collectionimg1.jpg') }}" class="card-img categoryimg" loading="lazy" alt="...">
                                      <h5 class="card-title text-center title-overlay">Jewellery</h5>
                                  </div>
                              </div>
                              
                          </div>
                        <div class="col-sm-8">
                         
                            <div class="d-flex align-items-center py-3 px-1 rounded-3">
                              
                              
                                <?php 
                                $getmenudatajwellary = headerMenu(1);
                                $counter = 0; // Initialize a counter
                                ?>

                                <div class="text ps-4">
                                <h5>BY CATEGORY</h5>
                                <?php foreach ($getmenudatajwellary as $menukey => $value) { ?>
                                    <a href="{{ route('shop') }}?categories=<?php echo $value->id; ?>" class="sub-menu "><i class="fa-solid fa-caret-right"></i> <?php echo $value->name; ?></a>

                                    <?php 
                                    $counter++;
                                    
                                    // If the counter reaches 5, close the current div and start a new one
                                    if ($counter % 4 == 0) { 
                                    ?>
                                        </div> <!-- Close current div after 5 items -->
                                        <!-- Open new div for next set of 5 items -->
                                        <div class="text ps-4">
                                          <h5>&nbsp;</h5>
                                    <?php 
                                    } 
                                } ?>
                                </div> <!-- Close the last open div -->
                            


                             
                            </div>
                         
                        </div>
                        
                          
                    
                      <!--   <div class="col-sm-4">
                          <a href="#">
                            <div class="d-flex align-items-center py-3 px-1 rounded-3">
                              <div class="icon px-3 bg-success-subtle rounded-3 fs-1">
                                <i class="bi bi-phone"></i>
                              </div>
                              <div class="text ps-3">
                                <h5>SHOP BY</h5>
                                <a href="#" class="sub-menu">Jewellery On Sale</a>
                                <a href="#" class="sub-menu">New Jewellery</a>
                                <a href="#" class="sub-menu">Ladies Jewellery</a>
                                <a href="#" class="sub-menu">Mens Jewellery</a>
                                <a href="#" class="sub-menu">Vintage Jewellery</a>
                                <a href="#" class="sub-menu">View All Jewellery</a>
                              </div>
                            </div>
                          </a>
                        </div> -->
                        
                      </div>
                    </div>
                  </li>
                  <!-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('shop') }}?categories=1">Engagement Rings</a>
                  </li> -->
                
                    <!-- <li class="nav-item">
                      <a class="nav-link" href="{{ route('shop') }}?categories=2">Earrings</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('shop') }}?categories=49">Pendent</a>
                    </li> -->
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('sellWatch') }}">Sell Watch</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('sellJewellery') }}">Sell Jewellery</a>
                  </li>
                  <!-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('watchRepairs') }}">Watch Repairs</a>
                  </li> -->
                  
                </ul>
                <div class="ms-auto  d-lg-block d-none">
                  <div class="d-flex gap-3 nav-main-icon  justify-content-center" role="search">
                    <div class="footer-map d-flex gap-2 justify-content-md-start justify-content-center header-call">
                      <a href="tel:+44 7930997552" class="text-decoration-none d-flex gap-2 m-0 footer-text3 d-inline-block "><i class="fa-solid fa-phone pt-1"></i><span> +44 7930997552 </span></a>
                    </div>
                     @if (Route::has('login'))
                        
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-decoration-none d-flex gap-2 m-0 align-items-center" title="Login"><i style="color:var(--dark-blue);font-weight:600;" class="fa-regular fa-user"></i></a>
                                <!-- <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><i class="fa fa-tachometer" aria-hidden="true"></i></a> -->
                            @else
                                <a href="{{ route('login') }}" class="text-decoration-none d-flex gap-2 m-0 align-items-center" title="Login"><i class="fa-regular fa-user"></i></a>
                                <!-- @if (Route::has('register'))
                                     <a href="{{ route('register') }}" class="text-decoration-none d-flex gap-2 m-0 align-items-center" title="Login"><i class="fa-regular fa-user"></i></a>
                                @endif -->
                            @endauth
                       
                    @endif
                    
                    <div class="vr"></div>
                    <a href="#" class="text-decoration-none d-flex gap-2 m-0 align-items-center searchToggle">
                          <i class="fa-solid fa-magnifying-glass"></i>
                      </a>
      
                    <div class="d-none d-flex gap-2 align-items-center searchBar">
                        <input type="text"  id="searchInputDesk" class="form-control" placeholder="Search...">
                        <button id="closeSearch" class="btn btn-close" aria-label="Close search"></button>
                    </div> 
                    <!-- <a href="" class="text-decoration-none d-flex gap-2 m-0 align-items-center">
                      <i class="fa-solid fa-magnifying-glass"></i>
                    </a> -->
                    <!-- <a href="#" class="text-decoration-none d-flex gap-2 m-0 align-items-center searchmobile">
                      <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                    <div class="d-none d-flex gap-2 align-items-center searchBar">
                        <input type="text" class="form-control" placeholder="Search...">
                        <button id="closeSearch" class="btn btn-close" aria-label="Close search"></button>
                    </div>
                    <div class="d-none d-flex gap-2 align-items-center searchinput">
                        <input type="text" class="form-control" placeholder="Search...">
                        <button id="closeinput" class="btn btn-close" aria-label="Close search"></button>
                    </div> -->
                    <a href="{{ route('wishlist') }}" class="text-decoration-none d-flex gap-2 m-0 align-items-center"><i class="fa-regular fa-heart"></i>
                    <span class="cart-count top-0 start-100 translate-middle">
                      {{ $favCount ?? 0 }}
                    </span></a>
                    
                    <a href="{{ route('cart.show') }}" class="text-decoration-none d-flex gap-2 m-0 align-items-center cart-number position-relative">
                        <i class="fa-solid fa-basket-shopping "></i>
                        <span class="cart-count position-absolute top-0 start-100 translate-middle">{{ $cartItemCount ?? 0 }}</span> <!-- Display the count -->
                    </a>

                  </div>
                </div>
              </div>
            </div>
          </nav>
    </nav>
  </section>
      <!-- END: RUBY DEMO HEADER -->
<main>