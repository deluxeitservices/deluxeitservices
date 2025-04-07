  <section class="subbanner_wrapper">
      <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                      <p class="sub-title">Do You Have Any Questions? </p>
                      <p class="sub-text">We are delighted to assist you and answer all your questions. Reach <br class="d-md-block d-none"> out to The Luxury Hut today!"</p>
                      <div class="subbanner-main-btn d-flex justify-content-center gap-4 flex-wrap">
                        <button class="subbanner-btn button" onclick="window.location.href='{{ route('contactus') }}'">Contact Us</button>
                          <a href="tel:+44 7930997552" class="d-flex m-0 align-items-center gap-3 text-decoration-none"><i class="fa-solid fa-phone"></i> +44 7930997552</a>
                      </div>
                </div>
            </div>
      </div>
  </section>
<footer class="footer_wrapper">
        <div class="container">
          <div class="row">
              <div class="col-md-6 col-sm-12">
                  <p class="f-email-text1 m-0">Stay Connected!</p>
                  <p class="f-email-text2 m-0">Join our newsletter, WhatsApp group, and follow us on Instagram <br class="d-md-block d-none"> for exclusive deals, new arrivals, discounts, and the latest news!</p>
                  <div class="main-social-icon d-flex gap-4 flex-wrap mt-3">
                    <a href="" class="d-flex gap-3 text-decoration-none align-items-center">
                      <img src="{{ asset('images/instagram.png') }}" alt="" class="" height="50px" >
                        <div class="insta-text">
                          <p class="f-email-text2 m-0">Follow us</p>
                          <p class="f-email-text4 m-0">Instagram</p>
                        </div>
                    </a>
                    <a href="" class="d-flex gap-3 text-decoration-none align-items-center">
                      <img src="{{ asset('images/whatsapp.png') }}" alt="" class="" height="50px" >
                        <div class="insta-text">
                          <p class="f-email-text2 m-0">Notification service</p>
                          <p class="f-email-text4 m-0">Whatsapp</p>
                        </div>
                    </a>
                  </div>
              </div>
              <div class="col-lg-6 col-sm-12">
                <div class="main-input-box position-relative mt-5">
                      <input type="email" placeholder="Enter Email Address" class="emailinput position-absolute w-100 ">
                      <button class="f-email-btn button position-absolute">join Now</button>
                </div>
              </div>
          </div>
          <br>
          <hr class="w-100 border-2 my-5">
            <div class="row ">
                <div class="col-lg-3 col-md-6 col-sm-12 text-md-start  pt-4">
                    <img src="{{ asset('images/footer-logo.jpg') }}" alt="" class="" height="60px">
                    <p class="f-text1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus iste perspiciatis debitis. Lorem ipsum dolor sit.</p>
                    <div class="footer-icon d-flex gap-4">
                      <!-- <a href="" class="text-decoration-none"><i class="fa-brands fa-facebook-f"></i> </a>
                      <a href="" class="text-decoration-none"><i class="fa-brands fa-twitter"></i> </a>
                      <a href="" class="text-decoration-none"><i class="fa-brands fa-square-instagram"></i></a> 
                      <a href="" class="text-decoration-none"><i class="fa-brands fa-youtube"></i></a>           -->
                      <a href="" class="text-decoration-none"><img src="{{ asset('images/footer-icon/facebook.png') }}" alt="" height="40" width="40"></a>   
                      <a href="" class="text-decoration-none"><img src="{{ asset('images/footer-icon/twitter.png') }}" alt="" height="40" width="40"></a>     
                      <a href="" class="text-decoration-none"><img src="{{ asset('images/footer-icon/social.png') }}" alt="" height="40" width="40"></a>      
                      <a href="" class="text-decoration-none"><img src="{{ asset('images/footer-icon/youtube.png') }}" alt="" height="40" width="40"></a> 
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 text-md-start  pt-3 footer-menu">
                  <!-- Display links directly on larger screens (d-none on small screens) -->
                        <div class="d-none d-lg-block">
                            <p class="footer-title">SHOP ONLINE</p>
                            <a href="{{ route('shop') }}?categories=5" class="footer-text2 text-decoration-none m-0">Watches</a>
                            <a href="{{ route('shop') }}?categories=48" class="footer-text2 text-decoration-none m-0">Jewellery</a>
                            <a href="{{ route('shop') }}?categories=1" class="footer-text2 text-decoration-none m-0">Engagement Rings</a>
                            <a href="{{ route('shop') }}?categories=2" class="footer-text2 text-decoration-none m-0">Earrings</a>
                            <a href="{{ route('shop') }}?categories=49" class="footer-text2 text-decoration-none m-0">Pendent</a>              
                        </div>
                        <div class="accordion d-lg-none border-0" id="footerAccordion"> <!-- d-lg-none hides this on large screens -->
                          <div class="accordion-item border-0">
                            <h2 class="accordion-header border-0" id="headingOne">
                              <div class="accordion-button border-0 p-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <p class="footer-title m-0">SHOP ONLINE</p>
                              </div>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#footerAccordion">
                              <div class="accordion-body">
                                <a href="{{ route('shop') }}?categories=5" class="footer-text2 text-decoration-none d-block mb-2">Watches</a>
                                <a href="{{ route('shop') }}?categories=48" class="footer-text2 text-decoration-none d-block mb-2">Jewellery</a>
                                <a href="{{ route('shop') }}?categories=1" class="footer-text2 text-decoration-none d-block mb-2">Engagement Rings</a>
                                <a href="{{ route('shop') }}?categories=2" class="footer-text2 text-decoration-none d-block mb-2">Earrings</a>
                                <a href="{{ route('shop') }}?categories=49" class="footer-text2 text-decoration-none d-block mb-2">Pendent</a>
                              </div>
                            </div>
                          </div>
                        </div>                        
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 text-md-start pt-3 footer-menu">
                    <div class="d-none d-lg-block">
                          <p class="footer-title">INFORMATION</p>
                          <a href="{{ route('aboutus') }}" class="footer-text2 text-decoration-none m-0">About Us</a>
                          <a href="{{ route('contactus') }}" class="footer-text2 text-decoration-none m-0">Contact Us</a>
                          <a href="{{ route('faq') }}" class="footer-text2 text-decoration-none m-0">FAQ</a>
                          <a href="" class="footer-text2 text-decoration-none m-0">Privacy Policy</a>
                          <a href="" class="footer-text2 text-decoration-none m-0">Terms and Conditions</a>
                          <a href="#" class="footer-text2 text-decoration-none m-0">Return Policy</a>
                    </div>
                        <div class="accordion d-lg-none border-0 border-bottom-1" id="shopOnlineAccordion">
                          <div class="accordion-item border-0">
                            <h2 class="accordion-header border-0" id="headingShopOnline">
                              <div class="accordion-button border-0 p-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseShopOnline" aria-expanded="true" aria-controls="collapseShopOnline">
                                <p class="footer-title m-0">INFORMATION</p>
                              </div>
                            </h2>
                            <div id="collapseShopOnline" class="accordion-collapse collapse " aria-labelledby="headingShopOnline" data-bs-parent="#shopOnlineAccordion">
                              <div class="accordion-body">
                                <a href="{{ route('aboutus') }}" class="footer-text2 text-decoration-none d-block mb-2">About Us</a>
                                <a href="{{ route('contactus') }}" class="footer-text2 text-decoration-none d-block mb-2">Contact Us</a>
                                <a href="{{ route('faq') }}" class="footer-text2 text-decoration-none d-block mb-2">FAQ</a>
                                <a href="" class="footer-text2 text-decoration-none d-block mb-2">Privacy Policy</a>
                                <a href="" class="footer-text2 text-decoration-none d-block mb-2">Terms and Conditions</a>
                                <a href="#" class="footer-text2 text-decoration-none d-block mb-2">Return Policy</a>
                              </div>
                            </div>
                          </div>
                        </div>
                </div>
                
                <div class="col-lg-3 col-md-6 col-sm-12   pt-3">
                        <p class="footer-title">CONTACT US</p>
                        <div class="footer-map d-flex gap-2">
                            <i class="fa-solid fa-location-dot pt-2"></i>
                            <p class="footer-text3 m-0">Suite 16, 2nd Floor, 88-90 Hatton Garden EC1N 8PN</p>
                        </div>
                        <div class="footer-map d-flex gap-2 ">
                            <a href="tel:+447930997552" class="text-decoration-none d-flex gap-2 m-0 footer-text3"><i class="fa-solid fa-phone pt-1"></i>  +44 7930997552</a>
                        </div>
                        <div class="footer-map d-flex gap-2">
                            <a href="mailto:info@webuydiamond.com" class="text-decoration-none d-flex gap-2 m-0 footer-text3"><i class="fa-solid fa-envelope pt-1"></i>  preownedluxuries@gmail.com</a>
                        </div>
                        <div class="footer-map d-flex gap-2">
                            <a href="" class="text-decoration-none d-flex gap-2 m-0 footer-text3"><i class="fa-solid fa-clock" ></i> Monday – Friday: 9am – 6pm <br class="d-md-block d-none"> Saturday: 10am – 5pm </a>
                        </div>
                        <div class="footer-linkicon  d-flex gap-3  pt-3">
                          <a href="" class="text-decoration-none"><img src="{{ asset('images/mastercard.jpg') }}" alt="" class="" height="30px"></a>
                          <!-- <a href="" class="text-decoration-none"> <img src="images/google-pay.png" alt="" class="" height="30px"></a> -->
                          <a href="" class="text-decoration-none">
                            <img src="{{ asset('images/apple-pay.png') }}" alt="" class="" height="30px">
                          </a>
                          <a href="" class="text-decoration-none">
                            <img src="{{ asset('images/shopping.png') }}" alt="" class="" height="30px">   
                          </a>
                      </div>
                </div>
            </div>
            <div class="my-4">
                <hr class="w-100 border-2">
            </div>
            <div class="footerlink">
                <div class="row">
                    <div class="col-lg-6 col-md-12  text-md-start text-center pt-3">
                        <a href="" class="text-decoration-none">© 2024 All Rights Reserved By powned-luxuries.co.uk</a>
                    </div>
                    <div class="col-lg-6 col-md-12 d-flex justify-content-md-end justify-content-center  ">
                      <div class="main-delivery d-flex gap-3 mt-2">
                        <a href="" class="text-decoration-none">
                          <img src="{{ asset('images/f-fedex.png') }}" alt="" class="" height="30px">
                        </a>
                        <a href="" class="text-decoration-none">
                          <img src="{{ asset('images/f-dhl.png') }}" alt="" class="" height="30px">
                        </a>
                        <a href="" class="text-decoration-none">
                          <img src="{{ asset('images/f-Royal_Mail1.png') }}" alt="" class="" height="30px">
                        </a>
                      </div>
                    </div>
                </div>
            </div>            
        </div>
    </footer>
</main> 
</body>
</html>


<!-- js file -->
<script src="https://awik.io/demo/webshop-zoom/Drift.min.js"></script>
<script src="{{ URL::asset('/js/animation/aos.js') }}"></script>
<script src="{{ URL::asset('/js/jquery-3.7.1.js') }}"></script>
<script src="https://cdn.datatables.net/2.1.7/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.7/js/dataTables.bootstrap5.js"></script>
<script>
  AOS.init();
</script>
<script src="{{ URL::asset('/js/slider/swiper-bundle.min.js') }}"></script>
<!-- bootstrap js -->
<script src="{{ URL::asset('/js/bootstrap/bootstrap.bundle.min.js') }}"></script>

<!-- custom js -->
 <script src="{{ URL::asset('/js/index.js') }}"></script>
 <script src="{{ URL::asset('/js/header.js') }}"></script>
 <script src="{{ URL::asset('/js/cart.js') }}"></script>
 <script src="{{ URL::asset('/js/category.js') }}"></script>
 <script src="{{ URL::asset('/js/productdetail.js') }}"></script>
 <script src="{{ URL::asset('/js/custom.js') }}"></script>
 <script src="{{ URL::asset('/js/account.js') }}"></script>
 <script src="{{ URL::asset('/js/checkout_validation.js') }}"></script>
 <script src="{{ URL::asset('/js/payment_validation.js') }}"></script>
 <script src="{{ URL::asset('/js/user_address_update.js') }}"></script>

<!-- jQuery -->
 <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<!-- Bootstrap JavaScript -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
<!-- Bootstrap CSS -->
<!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
<script> 
    // new DataTable('#example');

    new DataTable('#example', {
        order: [[0, 'desc']] // Orders the second column (Date) in descending order
    });
    // new DataTable('#wistable');
    new DataTable('#wistable', {
        order: [[0, 'desc']] // Orders the second column (Date) in descending order
    });
    new DataTable('#download');
</script>
<script>
    var favProduct = @json(route('product.favourite')); 
    var csrfToken = @json(csrf_token()); 
</script>
<script src="{{ URL::asset('/js/common.js') }}"></script>
