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
<div class="container">
    <!-- <div class="d-flex justify-content-center" style="">
        <div class="alert alert-primary" role="alert" >A simple primary alert—check it out!</div>
    </div> -->

    <script>
        window.reactInit = {
            url    : "{{URL::to('/')}}",
            csrf_token: "{{csrf_token()}}",
        };
    </script>
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h4>{{ __('Register') }}</h4>
                <div class="d-flex justify-content-end social_icon">
                <span><a  style="color:white;" href="{{ url('login/custom/redirect/facebook') }}"><i class="fa fa-facebook-square"></i></a></span>
                <span><a  style="color:white;" href="{{ url('login/custom/redirect/google') }}"><i class="fa fa-google-plus-square"></i></a></span>
                </div>
            </div>

            <!-- <div class="social_icon-tab">
                <span><a href="{{ url('login/custom/redirect/facebook') }}"><i class="fa fa-facebook-square"></i></a></span>
                <span><a href="{{ url('login/custom/redirect/google') }}"><i class="fa fa-google-plus-square"></i></a></span>
            </div> -->

            <div class="card-body">
                <form method="POST" action="{{ route('register.custom') }}">
                    @csrf
                    <div id="_form_registrasi"></div>
                    <!-- <div class="form-group">
                        <input type="submit" value="Register" class="btn float-right login_btn" >
                    </div> -->
                </form>
            </div>

            <div class="card-footer">
                <div class="d-flex justify-content-center links">
                    Have an account?<a href="/login">Login</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
