<meta name="csrf-token" content="{{ csrf_token() }}">
<style type="text/css">
  #load_screen{
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('//upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Phi_fenomeni.gif/50px-Phi_fenomeni.gif')
                50% 50% no-repeat rgb(249,249,249);
  }
</style>

<div id="load_screen"></div>
<!-- <div id="load_screen"><div id="loading"><img src="{{asset('assets/images/preload.gif')}}"></div></div> -->
@extends('hello', ['title' => 'GP - Beranda'])
@section('content')
<div id="_main"></div>
@endsection
<!-- </div> -->
