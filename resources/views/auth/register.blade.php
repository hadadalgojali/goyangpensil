@extends('layouts.app')
@section('content')
<style>
    .loader {
  position: relative;
  height: 20px;
  width: 20px;
  display: inline-block;
  animation: around 5.4s infinite;
}

@keyframes around {
  0% {
    transform: rotate(0deg)
  }
  100% {
    transform: rotate(360deg)
  }
}

.loader::after, .loader::before {
  content: "";
  background: transparent;
  position: absolute;
  display: inline-block;
  width: 100%;
  height: 100%;
  border-width: 2px;
  border-color: #333 #333 transparent transparent;
  border-style: solid;
  border-radius: 20px;
  box-sizing: border-box;
  top: 0;
  left: 0;
  animation: around 0.7s ease-in-out infinite;
}

.loader::after {
  animation: around 0.7s ease-in-out 0.1s infinite;
  background: transparent;
}
</style>
<!-- <div class="container"> -->
    <!-- <div class="d-flex justify-content-center" style="">
        <div class="alert alert-primary" role="alert" >A simple primary alert—check it out!</div>
    </div> -->

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
            <h4>{{ __('Register') }}</h4>
          </span>

          <div id="_form_registrasi"></div>

          <div class="text-center p-t-136">
            <a class="txt2" href="/login">
              Login your account
              <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
<!-- </div> -->

@endsection
