@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h4>{{ __('Login') }}</h4>
                <div class="d-flex justify-content-end social_icon">
                    <span><i class="fa fa-facebook-square"></i></span>
                    <span><i class="fa fa-google-plus-square"></i></span>
                    <span><i class="fa fa-twitter-square"></i></span>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('login.custom') }}">
                    @csrf
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="username" name="username">

                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="password"  name="password">
                    </div>
                    <div class="row align-items-center remember">
                        <input type="checkbox">Remember Me
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Login" class="btn float-right login_btn">
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-center links">
                    Don't have an account?<a href="/register">Sign Up</a>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="#">Forgot your password?</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
