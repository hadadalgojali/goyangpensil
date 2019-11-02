@extends('layouts.app')

@section('content')
    <script>
        window.reactInit = {
            url    : "{{URL::to('/')}}",
            csrf_token: "{{csrf_token()}}",
        };
    </script>
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt>
          <img src="{{asset('assets/images/img-auth.png')}}" alt="IMG">
        </div>

        <form class="login100-form validate-form">
          <span class="login100-form-title">
            <h4>{{ __('Login') }}</h4>
          </span>

          <div id="_form_login"></div>

          <div class="text-center p-t-12">
            <span class="txt1">
              Forgot
            </span>
            <a class="txt2" href="#">
              Username / Password?
            </a>
          </div>

          <div class="text-center p-t-136">
            <a class="txt2" href="/register">
              Create your Account
              <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
