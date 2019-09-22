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
            <h1>Profil</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="site-section bg-light">
  <div class="container">
  <form action="{{ route('update.profil') }}" method="POST">
    <div class="row">
      <div class="col-md-8 order-md-1">
        
        <div class="card">
          <div class="card-body">
              @csrf
              <input type="hidden" name="id" value="{{ $data[0]->id }}" />
              <h4 class="mb-3">Profil</h4>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="nama_depan">Nama depan</label>
                  <input type="text" name="first_name" class="form-control" id="nama_depan" value="{{ $data[0]->first_name }}" required>
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>
                
                <div class="col-md-6 mb-3">
                  <label for="nama_belakang">Nama Belakang</label>
                  <input type="text" name="last_name" class="form-control" id="nama_belakang" value="{{ $data[0]->last_name }}">
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 mb-3">
                  <label for="phone">Telepon</label>
                  
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">+62</span>
                    </div>
                    <input type="number" class="form-control" name="phone" value="{{ $data[0]->phone }}">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 mb-3">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email" value="{{ $data[0]->email }}">
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 mb-3">
                  <label for="address">Alamat</label>
                  <textarea class="form-control" name="address" id="txt_address">{{ $data[0]->address }}</textarea>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 mb-3">
                  <input type="submit" value="Perbarui" class="btn btn-primary" />
                </div>
              </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 order-md-2 mb-4" style="margin-bottom:25px;">
        <!-- <div class="card">
          <div class="card-body">
            <h4 class="mb-3">Akun</h4>
            <script>
                window.reactInit = {
                    url    : "{{URL::to('/')}}",
                    csrf_token: "{{csrf_token()}}",
                };
            </script>
            <div id="_form_profil"></div>
          </div>
        </div> -->
        
        <div class="card">
          <div class="card-body">
            <span class="text-muted">Disarankan untuk mengisi : </span>
            <ol>
              <li>Nomer telepon yang aktif</li>
              <li>Email</li>
              <li>Alamat, untuk pengiriman</li>
            </ol>
            <hr>
            @if($errors)
              <font style="color:RED;">
              Pesan error : 
                <ol>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
                </ol>
              </font>
            @endif
          </div>
        </div>
      </div>
      
    </div>
    </form>
  </div>
</div>
    
@endsection
<!-- </div> -->
