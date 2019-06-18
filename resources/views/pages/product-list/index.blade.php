@extends('index', ['title' => 'GP - Portofolio'])
<!-- <div id="content" style="display:none;"> -->
<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url({{URL::to('/')}}/template/public/images/banner-min.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">
      <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
        <div class="row justify-content-center mt-5">
          <div class="col-md-8 text-center">
            <h1>Portofolio {{ $category[0]->category }}</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Daftar Gambar</h2>
          </div>
        </div>

        <div class="row">
          @foreach ($portofolio as $item)
            <div class="col-md-6 mb-4 mb-lg-4 col-lg-4">
              <a href="{{URL::to('/')}}{{ $item->group_image->path }}/{{ $item->group_image->image }}.{{ $item->group_image->ext }}" target="_blank">
                <div class="listing-item">
                    <div class="listing-image" style="height:320px;">
                        <img src="{{URL::to('/')}}{{ $item->group_image->path }}/{{ $item->group_image->image }}.{{ $item->group_image->ext }}" alt="Image" class="img-fluid">
                    </div>
                </div>
              </a>
            </div>
          @endforeach
        </div>
      </div>
    </div>
<!-- </div> -->
