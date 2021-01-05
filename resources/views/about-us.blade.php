<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Home University | About</title>
  <!-- web fonts -->
  <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900&display=swap" rel="stylesheet">
  <!-- //web fonts -->
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('temp/welcome-style/assets/css/style-starter.css') }}">

  <style>
    /* Styles for dialog window */
    #small-dialog {
      background: white;
      padding: 5px;
      max-width: 750px;
      margin: 40px auto;
      position: relative;
    }

    div#small-dialog iframe {
      width: 100%;
      height: 400px;
      display: block;
    }


    /**
 * Fade-zoom animation for first dialog
 */

    /* start state */
    .my-mfp-zoom-in .zoom-anim-dialog {
      opacity: 0;

      -webkit-transition: all 0.2s ease-in-out;
      -moz-transition: all 0.2s ease-in-out;
      -o-transition: all 0.2s ease-in-out;
      transition: all 0.2s ease-in-out;



      -webkit-transform: scale(0.8);
      -moz-transform: scale(0.8);
      -ms-transform: scale(0.8);
      -o-transform: scale(0.8);
      transform: scale(0.8);
    }

    /* animate in */
    .my-mfp-zoom-in.mfp-ready .zoom-anim-dialog {
      opacity: 1;

      -webkit-transform: scale(1);
      -moz-transform: scale(1);
      -ms-transform: scale(1);
      -o-transform: scale(1);
      transform: scale(1);
    }

    /* animate out */
    .my-mfp-zoom-in.mfp-removing .zoom-anim-dialog {
      -webkit-transform: scale(0.8);
      -moz-transform: scale(0.8);
      -ms-transform: scale(0.8);
      -o-transform: scale(0.8);
      transform: scale(0.8);

      opacity: 0;
    }

    /* Dark overlay, start state */
    .my-mfp-zoom-in.mfp-bg {
      opacity: 0;
      -webkit-transition: opacity 0.3s ease-out;
      -moz-transition: opacity 0.3s ease-out;
      -o-transition: opacity 0.3s ease-out;
      transition: opacity 0.3s ease-out;
    }

    /* animate in */
    .my-mfp-zoom-in.mfp-ready.mfp-bg {
      opacity: 0.8;
    }

    /* animate out */
    .my-mfp-zoom-in.mfp-removing.mfp-bg {
      opacity: 0;
    }



    /**
 * Fade-move animation for second dialog
 */

    /* at start */
    .my-mfp-slide-bottom .zoom-anim-dialog {
      opacity: 0;
      -webkit-transition: all 0.2s ease-out;
      -moz-transition: all 0.2s ease-out;
      -o-transition: all 0.2s ease-out;
      transition: all 0.2s ease-out;

      -webkit-transform: translateY(-20px) perspective(600px) rotateX(10deg);
      -moz-transform: translateY(-20px) perspective(600px) rotateX(10deg);
      -ms-transform: translateY(-20px) perspective(600px) rotateX(10deg);
      -o-transform: translateY(-20px) perspective(600px) rotateX(10deg);
      transform: translateY(-20px) perspective(600px) rotateX(10deg);

    }

    /* animate in */
    .my-mfp-slide-bottom.mfp-ready .zoom-anim-dialog {
      opacity: 1;
      -webkit-transform: translateY(0) perspective(600px) rotateX(0);
      -moz-transform: translateY(0) perspective(600px) rotateX(0);
      -ms-transform: translateY(0) perspective(600px) rotateX(0);
      -o-transform: translateY(0) perspective(600px) rotateX(0);
      transform: translateY(0) perspective(600px) rotateX(0);
    }

    /* animate out */
    .my-mfp-slide-bottom.mfp-removing .zoom-anim-dialog {
      opacity: 0;

      -webkit-transform: translateY(-10px) perspective(600px) rotateX(10deg);
      -moz-transform: translateY(-10px) perspective(600px) rotateX(10deg);
      -ms-transform: translateY(-10px) perspective(600px) rotateX(10deg);
      -o-transform: translateY(-10px) perspective(600px) rotateX(10deg);
      transform: translateY(-10px) perspective(600px) rotateX(10deg);
    }

    /* Dark overlay, start state */
    .my-mfp-slide-bottom.mfp-bg {
      opacity: 0;

      -webkit-transition: opacity 0.3s ease-out;
      -moz-transition: opacity 0.3s ease-out;
      -o-transition: opacity 0.3s ease-out;
      transition: opacity 0.3s ease-out;
    }

    /* animate in */
    .my-mfp-slide-bottom.mfp-ready.mfp-bg {
      opacity: 0.8;
    }

    /* animate out */
    .my-mfp-slide-bottom.mfp-removing.mfp-bg {
      opacity: 0;
    }
  </style>
</head>

<body>
  <div class="w3l-bootstrap-header fixed-top">
     <nav class="navbar navbar-expand-lg navbar-light p-2">
        <div class="container">
        <!-- <a class="navbar-brand" href="{{url('/')}}"><strong style="color:#2B3483">Home University -->
          <a class="navbar-brand" href={{url('/')}}><strong style="color:#2B3483">Home University<!-- 
        </strong><strong style="color:#E58225"> -->.</strong></a>

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


          </div>
        </div>
      </nav>
  </div>
  <section class="w3l-about1">
    <div class="new-block top-bottom">
      <div class="container">
        <div class="middle-section">
          <!-- <h5>Tagline</h5> -->
          <div class="section-width">
            <h2>We are true to ourselves, and commit to always perform at our best.</h2>
          </div>
          <div class="link-list-menu">
            <p>We believe that we are outstanding. Not because we say it, but because we work hard at it. We are
              dedicated, committed and focused. We believe that every person will reach their personal best and overcome
              any challenge through a shared culture and ethos.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="w3l-about3 py-5">
    <div class="container py-lg-3">
      <h3 class="text-center mb-3 timeline-title">We Have Come A Long Way</h3>
      <ul class="timeline">
        <!-- Item 1 -->
        <li>
          <div class="direction-r">
            <div class="flag-wrapper">
              <span class="flag">Our Start</span>
            </div>
            <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quas voluptatum ea
              culpa repellendus porro mollitia quidem incidunt ullam ducimus!</div>
          </div>
        </li>

        <!-- Item 2 -->
        <li>
          <div class="direction-l">
            <div class="flag-wrapper">
              <span class="flag">The Early Days</span>
            </div>
            <div class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad cumque exercitationem maiores
              alias! Necessitatibus nulla nostrum obcaecati iusto omnis dignissimos tempore ratione ab. Saepe qui
              voluptas
              nihil ullam maxime odio.</div>
          </div>
        </li>

        <!-- Item 3 -->
        <li>
          <div class="direction-r">
            <div class="flag-wrapper">
              <span class="flag">Working Flow</span>
            </div>
            <div class="desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate nemo, accusantium
              libero
              eligendi officiis iusto.</div>
          </div>
        </li>

        <!-- Item 4 -->
        <li>
          <div class="direction-l">
            <div class="flag-wrapper">
              <span class="flag">The Expansion</span>
            </div>
            <div class="desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate nemo, accusantium
              libero
              eligendi officiis iusto.</div>
          </div>
        </li>


        <!-- Item 5 -->
        <li>
          <div class="direction-r">
            <div class="flag-wrapper">
              <span class="flag">At Present</span>
            </div>
            <div class="desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate nemo, accusantium
              libero
              eligendi officiis iusto.</div>
          </div>
        </li>

        <!-- Item 2 -->
        <li>
          <div class="direction-l">
            <div class="flag-wrapper">
              <span class="flag">Future plans</span>
            </div>
            <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ducimus pariatur, molestiae
              autem suscipit totam error reprehenderit dolores nostrum reiciendis quas voluptas et repellat velit, qui
              eos
              ut minus consequuntur, quam facere? Culpa modi, facere laborum distinctio perspiciatis nesciunt sunt.
            </div>
          </div>
        </li>

      </ul>
    </div>
  </section>
  <section class="w3l-about4">
    <div class="contact1-bg py-5">
      <div class="container py-lg-3">
        <div class="contact-main row align-items-center">
          <div class="col-md-6">
            <div class="column">
              <h3 class="header mb-4">We are here for you</h3>
              <p class="head-main mb-3">Donec eu lorem et nulla eleifend convallis non dapibus est. Morbi erat nibh,
                sollicitudin
                vel est ut, egestas sollicitudin metus. Mauris et mi sed dapibus urna condimentum, et maximus lectus
                dapibus mattis.</p>
            </div>
            <div class="column2">
              <h6 class="contact-address"> Msasani Peninsula, Jitegemee Rd, Plot no 126 Opposite DONG XIN CHINA GARDEN, Dar es Salaam - Tanzania</h6>
            </div>
          </div>
          <div class="col-md-6 map mt-md-0 mt-4">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2895687731!2d-74.26055986835598!3d40.697668402590374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1562582305883!5m2!1sen!2sin"
              style="border:0" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  
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
                      <li class="instagram">
                        <a href="#link" title="Instagram">
                          <span class="fa fa-instagram" aria-hidden="true"></span>
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
                  <p class="copy-footer-28 text-center"> &copy; 2006 - <?php echo date('Y'); ?> Home University<strong style="color: #E58225;">.</strong> All Rights Reserved. A product of <a
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
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- Template JavaScript -->

  <script src="assets/js/owl.carousel.js"></script>

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

  <script src="assets/js/jquery.magnific-popup.min.js"></script>
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