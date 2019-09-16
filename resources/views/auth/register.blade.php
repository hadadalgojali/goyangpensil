@extends('layouts.app')

@section('content')
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
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div id="_cmp_username_reg"></div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-key"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Password" name="password">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-key"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Re-type Password" name="re_password">
                    </div>
                    <div class="social_icon-tab">
                        <span><a href="{{ url('login/custom/redirect/facebook') }}"><i class="fa fa-facebook-square"></i></a></span>
                        <span><a href="{{ url('login/custom/redirect/google') }}"><i class="fa fa-google-plus-square"></i></a></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Register" class="btn float-right login_btn">
                    </div>
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
