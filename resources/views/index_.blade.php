<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{$title}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{URL::to('/')}}/template/public/fonts/icomoon/style.css">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="{{URL::to('/')}}/template/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/template/public/css/magnific-popup.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/template/public/css/jquery-ui.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/template/public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/template/public/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="{{URL::to('/')}}/template/public/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/template/public/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="{{URL::to('/')}}/template/public/css/aos.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/template/public/css/rangeslider.css">

    <link rel="stylesheet" href="{{URL::to('/')}}/template/public/css/style.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/template/public/css/preloader.css">

  </head>
  <body>

  <div class="preloader-wrapper">
      <div class="preloader">
          <img src="{{URL::to('/')}}/assets/images/preload.gif" alt="NILA">
      </div>
  </div>
  <div class="site-wrap">
    @include('layouts/partials/_header')
    @yield('content')
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-6">
                <h2 class="footer-heading mb-4">About</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident rerum unde possimus molestias dolorem fuga, illo quis fugiat!</p>
              </div>

              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Navigations</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <form action="#" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Search products..." aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-white" type="button" id="button-addon2">Search</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>
  </div>
  <script src="{{URL::to('/')}}/template/public/js/jquery-3.3.1.min.js"></script>
  <script src="{{URL::to('/')}}/template/public/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="{{URL::to('/')}}/template/public/js/jquery-ui.js"></script>
  <script src="{{URL::to('/')}}/template/public/js/popper.min.js"></script>
  <script src="{{URL::to('/')}}/template/public/js/bootstrap.min.js"></script>
  <script src="{{URL::to('/')}}/template/public/js/owl.carousel.min.js"></script>
  <script src="{{URL::to('/')}}/template/public/js/jquery.stellar.min.js"></script>
  <script src="{{URL::to('/')}}/template/public/js/jquery.countdown.min.js"></script>
  <script src="{{URL::to('/')}}/template/public/js/jquery.magnific-popup.min.js"></script>
  <script src="{{URL::to('/')}}/template/public/js/bootstrap-datepicker.min.js"></script>
  <script src="{{URL::to('/')}}/template/public/js/aos.js"></script>
  <script src="{{URL::to('/')}}/template/public/js/rangeslider.min.js"></script>

  <script src="{{URL::to('/')}}/template/public/js/main.js"></script>

  <script>
    var Body = $('body');
    Body.addClass('preloader-site');
    $(window).load(function() {
        $('.preloader-wrapper').fadeOut();
        $('body').removeClass('preloader-site');
        // document.getElementById('content').style.display = '';
    });
  </script>
  </body>
</html>
