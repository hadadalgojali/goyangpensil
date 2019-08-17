<html lang="{{ app()->getLocale() }}">
  <head>
    <title>Home</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('assets/template/public/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/template/public/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/template/public/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/template/public/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/template/public/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/template/public/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/template/public/fonts/flaticon/font/flaticon.css')}}">
    <!--

    <link rel="stylesheet" href="{{URL::to('/')}}/template/public/css/jquery-ui.css">

    <link rel="stylesheet" href="{{URL::to('/')}}/template/public/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="{{URL::to('/')}}/template/public/css/aos.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/template/public/css/rangeslider.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/template/public/css/preloader.css"> -->
    <!-- <link href="/css/app.css" rel="stylesheet" type="text/css" /> -->
  </head>
  <body>
    <div class="site-wrap">
      <div id="_header"></div>
      @yield('content')
      <footer class="site-footer">
        <div class="container">
          <div id="_bottom"></div>
          <div id="_footer"></div>
        </div>
      </footer>
    </div>

    <script src="/js/app.js" type="text/javascript"></script>
    <script src="{{asset('assets/template/public/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/template/public/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('assets/template/public/js/jquery-ui.js')}}"></script>
    <script src="{{asset('assets/template/public/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/template/public/js/bootstrap.min.js')}}"></script>
    <!-- <script src="{{asset('assets/template/public/js/owl.carousel.min.js')}}"></script> -->
    <!-- <script src="{{asset('assets/template/public/js/jquery.stellar.min.js')}}"></script> -->
    <!-- <script src="{{asset('assets/template/public/js/jquery.countdown.min.js')}}"></script> -->
    <!-- <script src="{{asset('assets/template/public/js/jquery.magnific-popup.min.js')}}"></script> -->
    <!-- <script src="{{asset('assets/template/public/js/bootstrap-datepicker.min.js')}}"></script> -->
    <!-- <script src="{{asset('assets/template/public/js/aos.js')}}"></script> -->
    <!-- <script src="{{asset('assets/template/public/js/rangeslider.min.js')}}"></script> -->
    <!-- <script src="{{asset('assets/template/public/js/main.js')}}"></script> -->

      <!-- <script>
        var Body = $('body');
        Body.addClass('preloader-site');
        $(window).load(function() {
            $('.preloader-wrapper').fadeOut();
            $('body').removeClass('preloader-site');
            // document.getElementById('content').style.display = '';
        });
      </script> -->
  </body>
</html>
