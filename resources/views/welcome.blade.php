<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Home University | Welcome</title>
    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900&display=swap" rel="stylesheet">
    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('temp/welcome-style/assets/css/style-starter.css') }}">
  </head>
  <body>
<div class="w3l-bootstrap-header fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light p-2">
        <div class="container">
        <a class="navbar-brand" href="{{url('/')}}"><strong style="color:#2B3483">Home University<!-- </strong><strong style="color:#E58225"> -->.</strong></a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <div class="form-inline">
              <a href="{{url('about-us')}}" class="help mr-4">About Us</a>
            </div>

            <div class="form-inline">
              <a href="{{url('contact-us')}}" class="about mr-4">Contact Us</a>
            </div>

            <div class="form-inline">
            <a href="#" class="faq mr-4">FAQ</a>
            </div>

            <div class="form-inline">
              <a href="{{ route('login') }}" class="btn btn-primary sign" style="border-radius: 90px;"><strong style="color:white;">Sign in</strong></a>
            </div>

            {{-- <div class="form-inline">
                <a href="#" class="" style="float:right; position:absolute;right:9px;border-radius: 90px;"><img src="https://lipis.github.io/flag-icon-css/flags/4x3/us.svg" height="15" alt="USA flag"> English</a>
            </div> --}}

          </div>
        </div>
      </nav>
</div>
<!-- index-block1 -->
<div class="w3l-index-block1">
  <div class="content py-5">
    <div class="container">
      <div class="row align-items-center py-md-5 py-3">
        <div class="col-md-5 content-left pt-md-0 pt-5">
          <h1>Make your dream come true</h1>
          <p class="mt-3 mb-md-5 mb-4">You can learn alot of things through this application by attempt different exams and you can get the results at a real time.</p>
          {{-- <a href="#login.html" class="btn btn-primary btn-theme">Get Started</a> --}}
          <a href="#" class="btn btn-primary" style="border-radius: 100px;"><strong style="color:white;">Join Now</strong></a>
        </div>
        <div class="col-md-7 content-photo mt-md-0 mt-5">
          <img src="{{ asset('temp/welcome-style/assets/images/main.jpg') }}" class="img-fluid" alt="main image">
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<!-- //index-block1 -->
<!-- index-block2 -->
<section class="w3l-index-block2 py-5">
  <div class="container py-md-3">
    <div class="heading text-center mx-auto">
      <h3 class="head">Online E-Resource </h3>
      <p class="my-3 head"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
        Nulla mollis dapibus nunc, ut rhoncus
        turpis sodales quis. Integer sit amet mattis quam.</p>
    </div>
    <div class="row bottom_grids pt-md-3">
      <div class="col-lg-4 col-md-6 mt-5">
        <div class="s-block">
          <a href="#blog-single.html" class="d-block p-lg-4 p-3">
            <img src="{{ asset('temp/welcome-style/assets/images/s1.png') }}" alt="" class="img-fluid" />
            <h3 class="my-3">E-Learning</h3>
            <p class="">Our goal is to help our companies maintain or achieve best in class positions. Build an online presence with this professional bootstrap 4 template.</p>
          </a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt-5">
        <div class="s-block">
          <a href="#blog-single.html" class="d-block p-lg-4 p-3">
            <img src="{{ asset('temp/welcome-style/assets/images/s2.png') }}" alt="" class="img-fluid" />
            <h3 class="my-3">E-Application</h3>
            <p class="">Our goal is to help our companies maintain or achieve best in class positions. Build an online presence with this professional bootstrap 4 template.</p>
          </a>
        </div>
      </div>
      <div class="col-lg-4 mt-5">
        <div class="s-block">
          <a href="#blog-single.html" class="d-block p-lg-4 p-3">
            <img src="{{ asset('temp/welcome-style/assets/images/s3.png') }}" alt="" class="img-fluid" />
            <h3 class="my-3">Staff E-Mail</h3>
            <p class="">Our goal is to help our companies maintain or achieve best in class positions. Build an online presence with this professional bootstrap 4 template.</p>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /index-block2 -->
<!-- content-with-photo17 -->
<section class="w3l-index-block3">
  <div class="section-info py-5">
    <div class="container py-md-3">
      <div class="row cwp17-two align-items-center">
        <div class="col-md-6 cwp17-image">
          <img src="{{ asset('temp/welcome-style/assets/images/business.png') }}" class="img-fluid" alt="" />
        </div>
        <div class="col-md-6 cwp17-text">
          <h2>More features</h2>
          <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
            Latin literature from 45 BC, making it over 2000 years old. </p>
          <a href="#signup.html">Learn more &raquo;</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- content-with-photo17 -->
 <div class="w3l-index-block4">
   <div class="features-bg py-5">
     <!-- features15 block -->
     <div class="container py-md-3">
       <div class="heading text-center mx-auto">
         <h3 class="head">Activities </h3>
         <p class="my-3 head"> The below activities it helps you to interact direct to this portal by doing those steps.</p>
       </div>
       <div class="row">
         <div class="col-md-6 features15-col-text">
           <a href="#url" class="d-flex flex-wrap feature-unit align-items-center">
             <div class="col-sm-3">
               <div class="features15-info">
                 <span class="fa fa-user-plus" aria-hidden="true"></span>
               </div>
             </div>
             <div class="col-sm-9 mt-sm-0 mt-4">
               <div class="features15-para">
                 <h4>Registration</h4>
                 <p>It is a long established fact that a reader will be distracted by the readable content.</p>
               </div>
             </div>
           </a>
         </div>
         <div class="col-md-6 features15-col-text">
           <a href="#url" class="d-flex flex-wrap feature-unit align-items-center">
             <div class="col-sm-3">
               <div class="features15-info">
                 <span class="fa fa-sign-in" aria-hidden="true"></span>
               </div>
             </div>
             <div class="col-sm-9 mt-sm-0 mt-4">
               <div class="features15-para">
                 <h4>Login</h4>
                 <p>It is a long established fact that a reader will be distracted by the readable content.</p>
               </div>
             </div>
           </a>
         </div>
         <div class="col-md-6 features15-col-text">
           <a href="#url" class="d-flex flex-wrap feature-unit align-items-center">
             <div class="col-sm-3">
               <div class="features15-info">
                 <span class="fa fa-money" aria-hidden="true"></span>
               </div>
             </div>
             <div class="col-sm-9 mt-sm-0 mt-4">
               <div class="features15-para">
                 <h4>Payment</h4>
                 <p>It is a long established fact that a reader will be distracted by the readable content.</p>
               </div>
             </div>
           </a>
         </div>
         <div class="col-md-6 features15-col-text">
           <a href="#url" class="d-flex flex-wrap feature-unit align-items-center">
             <div class="col-sm-3">
               <div class="features15-info">
                 <span class="fa fa-sort-alpha-asc" aria-hidden="true"></span>
               </div>
             </div>
             <div class="col-sm-9 mt-sm-0 mt-4">
               <div class="features15-para">
                 <h4>Attempt Exam</h4>
                 <p>It is a long established fact that a reader will be distracted by the readable content.</p>
               </div>
             </div>
           </a>
         </div>
         <div class="col-md-6 features15-col-text">
           <a href="#url" class="d-flex flex-wrap feature-unit align-items-center">
             <div class="col-sm-3">
               <div class="features15-info">
                 <span class="fa fa-laptop" aria-hidden="true"></span>
               </div>
             </div>
             <div class="col-sm-9 mt-sm-0 mt-4">
               <div class="features15-para">
                 <h4>Results</h4>
                 <p>It is a long established fact that a reader will be distracted by the readable content.</p>
               </div>
             </div>
           </a>
         </div>
         <div class="col-md-6 features15-col-text">
           <a href="#url" class="d-flex flex-wrap feature-unit align-items-center">
             <div class="col-sm-3">
               <div class="features15-info">
                 <span class="fa fa-file" aria-hidden="true"></span>
               </div>
             </div>
             <div class="col-sm-9 mt-sm-0 mt-4">
               <div class="features15-para">
                 <h4>Report</h4>
                 <p>It is a long established fact that a reader will be distracted by the readable content.</p>
               </div>
             </div>
           </a>
         </div>
       </div>
       <div>
         <!-- features15 block -->
       </div>
     </div>
   </div>
 </div>
<!-- content-with-photo17 -->
<section class="w3l-index-block7 py-5">
  <div class="container py-md-3">
    <div class="row cwp17-two align-items-center">
      <div class="col-md-6 cwp17-text">
        <h2>About Home University</h2>
        <p>Is the one through which you complete your graduation. If you apply to a college affiliated with the same university then you become a Home University student and that university as your Home University. </p>
        <a href="#signup.html">Learn more &raquo;</a>
      </div>
      <div class="col-md-6 cwp17-image">
        <img src="{{ asset('temp/welcome-style/assets/images/mobile-app.png') }}" class="img-fluid" alt="" />
      </div>
    </div>
  </div>
</section>
<!-- content-with-photo17 -->
{{-- <section class="w3l-index-block5">
  <!-- main-slider -->
  <div class="testimonials py-5">
    <div class="container text-center py-lg-3">
      <div class="heading text-center mx-auto">
        <h3 class="head">They love us </h3>
      </div>
      <div class="row">
        <div class="col-md-10 mx-auto">
          <div class="owl-one owl-carousel owl-theme">
            <div class="item">
              <div class="slider-info mt-lg-4 mt-3">
                <div class="img-circle">
                  <img src="{{ asset('temp/welcome-style/assets/images/emp2.jpg') }}" class="img-fluid rounded" alt="client image">
                </div>
                <div class="message">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id accusantium
                  officia quod quasi necessitatibus perspiciatis Harum error provident
                  quibusdam tenetur.</div>
                <div class="name">- Camilla</div>
              </div>
            </div>
            <div class="item">
              <div class="slider-info mt-lg-4 mt-3">
                <div class="img-circle">
                  <img src="{{ asset('temp/welcome-style/assets/images/emp1.jpg') }}" class="img-fluid rounded" alt="client image">
                </div>
                <div class="message">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id accusantium
                  officia quod quasi necessitatibus perspiciatis Harum error provident
                  quibusdam tenetur.</div>
                <div class="name">- Dennis Jack</div>
              </div>
            </div>
            <div class="item">
              <div class="slider-info mt-lg-4 mt-3">
                <div class="img-circle">
                  <img src="{{ asset('temp/welcome-style/assets/images/emp3.jpg') }}" class="img-fluid rounded" alt="client image">
                </div>
                <div class="message">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id accusantium
                  officia quod quasi necessitatibus perspiciatis Harum error provident
                  quibusdam tenetur.</div>
                <div class="name">- Anthony</div>
              </div>
            </div>
            <div class="item">
              <div class="slider-info mt-lg-4 mt-3">
                <div class="img-circle">
                  <img src="{{ asset('temp/welcome-style/assets/images/emp4.jpg') }}" class="img-fluid rounded" alt="client image">
                </div>
                <div class="message">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id accusantium
                  officia quod quasi necessitatibus perspiciatis Harum error provident
                  quibusdam tenetur.</div>
                <div class="name">- Charlotte</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /main-slider -->
</section> --}}
<!-- partners -->
<section class="w3l-index-block9" id="partners">
  <div class="partners py-5">
    <div class="container py-lg-3">
      <div class="heading text-center mx-auto">
        <h3 class="head">Our Clients </h3>
      </div>
      <div class="row col-md-10 justify-content-between grid-part text-center mx-auto">
          <div class="parts-w3ls col-sm-2 col-6 mt-5">
            <span class="fa fa-cc-visa"></span>
          </div>
          <div class="parts-w3ls col-sm-2 col-6 mt-5">
            <span class="fa fa-digg"></span>
          </div>
          <div class="parts-w3ls col-sm-2 col-6 mt-5">
            <span class="fa fa-lastfm"></span>
          </div>
          <div class="parts-w3ls col-sm-2 col-6 mt-5">
            <span class="fa fa-cc-discover"></span>
          </div>
          <div class="parts-w3ls col-sm-2 col-6 mt-5">
            <span class="fa fa-ravelry"></span>
          </div>
          <div class="parts-w3ls col-sm-2 col-6 mt-5">
            <span class="fa fa-cc-stripe"></span>
          </div>
        </div>
      </div>
    </div>
</section>
<!-- //partners -->
<!-- subscribe section -->
<section class="w3l-index-block6 py-5">
  <div class="container py-lg-3">
    <div class="subscribe mx-auto">
      <div class="heading text-center mx-auto">
        <h3 class="head">Subscribe to our newsletter!</h3>
        <p class="my-3 head"> Subscribe with your email you get more information from us.</p>
      </div>
      <form action="#" method="post" class="subscribe-wthree pt-2 mt-5">
        <div class="d-flex flex-wrap subscribe-wthree-field">
          <input class="form-control" type="email" placeholder="Enter your email..." name="email" required="">
          <button class="btn form-control btn-primary" type="submit">Subscribe</button>
        </div>
      </form>
    </div>
  </div>
</section>
<!-- //subscribe -->
{{-- <section class="w3l-index-block10">
  <div class="new-block top-bottom">
    <div class="container">
      <div class="middle-section">
        <!-- <h5>Tagline</h5> -->
        <div class="section-width">
          <h2>Start your Business today with this professional template.</h2>
        </div>
        <div class="link-list-menu">
            <p class="mb-5">Workflow is the definition, execution and automation of business processes where tasks information.</p>
            <a href="about.html" class="btn btn-outline-light btn-more">Read More <span class="fa fa-arrow-right" aria-hidden="true"></span></a>
        </div>
      </div>
    </div>
    </div>
  </section> --}}
<!-- index-block8 -->
{{-- <section class="w3l-index-block8 py-5">
  <div class="container py-md-3 text-center">
    <div class="heading text-center mx-auto">
      <h3 class="head">Ready to get started? </h3>
    </div>
    <div class="buttons mt-4">
      <a href="contact.html" class="btn btn-outline-primary mr-2 btn-demo">Book a Demo</a>
      <a href="contact.html" class="btn btn-primary btn-demo ml-2">Get Started</a>
    </div>
  </div>
</section> --}}
<!-- / index-block8 -->
      <!-- footer-28 block -->
      <section class="w3l-market-footer">
        <footer class="footer-28">
          <div class="footer-bg-layer">
            <div class="container py-lg-3">
              <div class="row footer-top-28">
                <div class="col-md-6 footer-list-28 mt-5">
                  <h6 class="footer-title-28"><strong style="color:#2B3483">Home University</strong><strong style="color:#E58225">.</strong></h6>
                  <ul>
                    <li>
                      <p><strong>Address</strong> : Msasani Peninsula, Jitegemee Rd, Plot no 126 Opposite DONG XIN CHINA GARDEN, Dar es Salaam. 
                        </p>
                    </li>
                    <li>
                      <p><strong>BOX</strong> : <a href="#">P.O.Box 33903 Dar es Salaam.</a></p>
                    </li>
                    <li>
                      <p><strong>Phone</strong> : <a href="#">+255 684 456 287</a></p>
                    </li>
                    <li>
                      <p><strong>Email</strong> : <a href="#">home.university@gmail.com</a></p>
                    </li>
                  </ul>

                  <div class="main-social-footer-28 mt-3">
                    <ul class="social-icons">
                      <li class="facebook">
                        <a href="#link" title="Facebook">
                          <span class="fa fa-facebook" aria-hidden="true"></span>
                        </a>
                      </li>
                      <li class="twitter">
                        <a href="#link" title="Twitter">
                          <span class="fa fa-twitter" aria-hidden="true"></span>
                        </a>
                      </li>
                      <li class="dribbble">
                        <a href="#link" title="Dribbble">
                          <span class="fa fa-dribbble" aria-hidden="true"></span>
                        </a>
                      </li>
                      <li class="google">
                        <a href="#link" title="Google">
                          <span class="fa fa-google" aria-hidden="true"></span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-4 footer-list-28 mt-5">
                      <h6 class="footer-title-28">Quick Links</h6>
                      <ul>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Contact Us</a></li>
                        <li><a href="">FAQ</a></li>
                      </ul>
                    </div>
                    <div class="col-md-4 footer-list-28 mt-5">
                      <h6 class="footer-title-28">Learn More</h6>
                      <ul>
                        <li><a href="">Terms of use</a></li>
                        <li><a href="">Disclaimer</a></li>
                        <li><a href="">Privacy policy</a></li>
                      </ul>
                    </div>
                    <div class="col-md-4 footer-list-28 mt-5">
                      <h6 class="footer-title-28">Product</h6>
                      <ul>
                        <li><a href="#URL">Market</a></li>
                        <li><a href="#URL">VIP</a></li>
                        <li><a href="#URL">Resources</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="midd-footer-28 align-center py-lg-4 py-3 mt-5">
                <div class="container">
                  <p class="copy-footer-28 text-center"> &copy; {{ date('Y') }} Home University<strong style="color: #E58225;">.</strong> All Rights Reserved. A product of <a
                      href="#" target="_blank"><strong style="color:#26ABE2;text-decoration:none">UmojaSwitch Company Ltd</strong></a></p>
                </div>
            </div>
          </div>
        </footer>

        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
          &#10548;
        </button>
        <script>
          // When the user scrolls down 20px from the top of the document, show the button
          window.onscroll = function () {
            scrollFunction()
          };

          function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
              document.getElementById("movetop").style.display = "block";
            } else {
              document.getElementById("movetop").style.display = "none";
            }
          }

          // When the user clicks on the button, scroll to the top of the document
          function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
          }
        </script>
        <!-- /move top -->
      </section>
      <!-- //footer-28 block -->

      <!-- jQuery, Bootstrap JS -->
      <script src="{{ asset('temp/welcome-style/assets/js/jquery-3.3.1.min.js') }}"></script>
      <script src="{{ asset('temp/welcome-style/assets/js/bootstrap.min.js') }}"></script>

      <!-- Template JavaScript -->

      <script src="{{ asset('temp/welcome-style/assets/js/owl.carousel.js') }}"></script>

      <!-- script for owlcarousel -->
      <script>
        $(document).ready(function () {
          $('.owl-one').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            responsiveClass: true,
            autoplay: false,
            autoplayTimeout: 5000,
            autoplaySpeed: 1000,
            autoplayHoverPause: false,
            responsive: {
              0: {
                items: 1,
                nav: false
              },
              480: {
                items: 1,
                nav: false
              },
              667: {
                items: 1,
                nav: true
              },
              1000: {
                items: 1,
                nav: true
              }
            }
          })
        })
      </script>
      <!-- //script for owlcarousel -->

      <!-- disable body scroll which navbar is in active -->
      <script>
        $(function () {
          $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
          })
        });
      </script>
      <!-- disable body scroll which navbar is in active -->

      <script src="{{ asset('temp/welcome-style/assets/js/jquery.magnific-popup.min.js') }}"></script>
      <script>
        $(document).ready(function () {
          $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,

            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
          });

          $('.popup-with-move-anim').magnificPopup({
            type: 'inline',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,

            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-slide-bottom'
          });
        });
      </script>

</body>
</html>
