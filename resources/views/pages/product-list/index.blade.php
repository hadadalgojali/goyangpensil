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
@extends('index', ['title' => 'GP - Produk'])

@section('content')
<div class="site-blocks-cover inner-page-cover overlay" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">
      <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
        <div class="row justify-content-center mt-5">
          <div class="col-md-8 text-center">
            <h1>Daftar Produk</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">
    @foreach($blog as $item)
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center border-primary">
          <h2 class="font-weight-light text-primary">{{ $item->title }}</h2>
        </div>
      </div>
      <?php $index = 0; ?>
      <div class="row">
        @foreach($blog_image as $item_image)
          @if($item_image->title == $item->title && ($item_image->image !== null && $item_image->image !== 'null') && @index < 4)
              <div class="col-md-6 mb-4 mb-lg-4 col-lg-4">
                <div class="listing-item">
                  <div class="listing-image" style="height:320px;">
                    <img src="{{URL::to('/')}}{{ $item_image->path }}/{{ $item_image->image }}.{{ $item_image->ext }}" alt="Image" class="img-fluid">
                  </div>
                  <div class="listing-item-content">
                    <!-- <a href="#" class="bookmark" data-toggle="tooltip" data-placement="left" title="Bookmark"><span class="icon-heart"></span></a> -->
                    <!-- $popular_category -->
                    <span class="address">Di upload pada tanggal :</span>
                    <h2 class="mb-1"><?php echo date_format(date_create($item_image->updated_at), 'd/M/Y'); ?></h2>
                  </div>
                </div>
              </div>
          @endif
          <?php $index++; ?>
        @endforeach
      </div>
      <a class="btn btn-primary" href="{{URL::to('/')}}/pages/product-list/{{ $item->title }}">Baca selengkapnya</a>
    @endforeach
  </div>
</div>
@endsection
<!-- </div> -->
