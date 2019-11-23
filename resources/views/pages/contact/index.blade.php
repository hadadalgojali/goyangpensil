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
@extends('index', ['title' => 'GP - Kontak'])
@section('content')
<!-- <div id="content" style="display:none;"> -->
<div class="site-blocks-cover inner-page-cover overlay" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">
      <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
        <div class="row justify-content-center mt-5">
          <div class="col-md-8 text-center">
            <h1>Kontak kami</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5"  data-aos="fade">
            <form action="#" class="p-5 bg-white">
              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" id="fname" class="form-control" onchange="setfname(this);">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label>
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control">Saya ingin memesan :)</textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <!-- <input type="submit" value="Send Message" class="btn btn-primary py-2 px-4 text-white"> -->
                  <?php
                    $url    = "https://wa.me";
                    $phone  = substr($company->phone, 1);
                    // $phone  = "6285721466967";
                    $link   = $url."/".$phone;
                    // echo $link;
                    // $link   .= "?".$fname;
                  ?>
                  <a class="btn btn-primary" href="javascript:;" onclick="send();">Kirim Pesan</a>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-5"  data-aos="fade" data-aos-delay="100">
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">{{ $company->address }}</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="javascript:;">{{ $company->phone }}</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="javascript:;">{{ $company->email }}</a></p>
            </div>

            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">More Info</h3>
              <p>{{ $company->information }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
<script>
  function send(){
    window.location.href = "<?php echo $link; ?>"+"?text="+document.getElementById('message').value+", "+document.getElementById('fname').value+" "+document.getElementById('lname').value+" ";
  }
</script>
@endsection
<!-- </div> -->
