<html lang="{{ app()->getLocale() }}">
  <head>
    <title>{{ config('app.name', 'Goyang Pensil') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google-site-verification" content="google-site-verification=iYQdWcI8yqJbeaFwdFhTzw9ug5G26p1G17XNjT7hvvI">
    <link rel="stylesheet" href="{{asset('assets/template/public/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/template/public/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/template/public/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/template/public/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/template/public/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/template/public/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/template/public/css/style.css')}}">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-155264752-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-155264752-1');
    </script>

    <script data-ad-client="ca-pub-9995625923223065" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  </head>
  <body>
    <div class="site-wrap">
      <div id="_header"></div>
      <script>
        var sess_id = "{{ session()->get('id') }}";
      </script>
      @yield('content')
      <footer class="site-footer">
        <div class="container">
          <div id="_bottom"></div>
          <div id="_footer"></div>
        </div>
      </footer>
    </div>
    <script src="{{asset('assets/template/public/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/template/public/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('assets/template/public/js/jquery-ui.js')}}"></script>
    <script src="{{asset('assets/template/public/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/template/public/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/template/public/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/template/public/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('assets/template/public/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('assets/template/public/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- <script src="{{asset('assets/template/public/js/bootstrap-datepicker.min.js')}}"></script> -->
    <script src="{{asset('assets/template/public/js/aos.js')}}"></script>
    <script src="{{asset('assets/template/public/js/rangeslider.min.js')}}"></script>
    <script src="{{asset('assets/template/public/js/main.js')}}"></script>
    <script src="/js/app.js" type="text/javascript"></script>

      <script>
        document.getElementById('load_screen').style.display = 'none';
          $('.carousel').carousel({
            interval: 2000
          })
        // var Body = $('body');
        // Body.addClass('preloader-site');
        // $(window).load(function() {
        //     $('.preloader-wrapper').fadeOut();
            // $('body').removeClass('preloader-site');
            // document.getElementById('content').style.display = '';
        // });
      </script>
  </body>
</html>
