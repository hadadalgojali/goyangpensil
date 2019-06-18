@extends('index', ['title' => 'GP - Beranda'])

<!-- <div id="content" style="display:none;"> -->
<div class="site-blocks-cover overlay" style="background-image: url({{URL::to('/')}}/template/public/images/banner-min.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">
      <div class="col-md-12">
        <div class="row justify-content-center mb-4">
          <div class="col-md-8 text-center">
            <h1 class="" data-aos="fade-up">Abadikan kenanganmu disini</h1>
            <p data-aos="fade-up" data-aos-delay="100"></p>
          </div>
        </div>
        <div class="form-search-wrap" data-aos="fade-up" data-aos-delay="200">
          <form method="post">
            <div class="row align-items-center">
              <div class="col-lg-12 mb-6 mb-xl-0 col-xl-6">
                <input type="text" class="form-control rounded" placeholder="Apa yang anda cari?">
              </div>
              <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                <div class="select-wrap">
                  <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                  <select class="form-control rounded" name="" id="">
                    <option value="">All Categories</option>
                    @foreach ($category as $item)
                      <option value="{{ $item->id }}">{{ $item->category }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-lg-12 col-xl-2 ml-auto text-right">
                <input type="submit" class="btn btn-primary btn-block rounded" value="Search">
              </div>

            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</div>

<div class="site-section bg-light">
  <div class="container">
    <div class="overlap-category mb-4">
      <div class="row align-items-stretch no-gutters">
          @foreach ($category as $item)
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
              <a href="/pages/product-list/{{ $item->id }}" class="popular-category h-100">
                <!-- <span class="{{ $item->icon }} fa-2x"></span> -->
                <img src="{{URL::to('/')}}/assets/icon/{{ $item->icon }}" width="42" height="42">
                <span class="caption mb-2 d-block" style="padding-top:10px;">{{ $item->category }}</span>
                <span class="number">{{ $item->count }}</span>
              </a>
            </div>
          @endforeach
      </div>
    </div>
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center border-primary">
          <h2 class="font-weight-light text-primary">Kenapa kami ?</h2>
          <p class="color-black-opacity-5">Cari tahu kenapa anda harus memilih kami.</p>
        </div>
      </div>

      <div class="row mb-3 align-items-stretch">
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
          <div class="h-entry">
            <h2 class="font-size-regular"><a href="#" class="text-black"><span class="fa fa-users"></span> Menjadi teman baik</a></h2>
            <p>Kami selalu berupaya menjalin hubungan mitra kerja sama sebaik mungkin, karena kami percaya memiliki hubungan yang baik dapat mempermudah tujuan kita client maupun develop.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
          <div class="h-entry">
            <h2 class="font-size-regular"><a href="#" class="text-black"><span class="fa fa-wrench"></span> Perbaikan dan revisi</a></h2>
            <p>Kepuasan pelanggan menjadi prioritas utama bagi kami, karena itu kami memberi kesempatan pada pelanggan untuk merevisi hasil kerja dari kami.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
          <div class="h-entry">
            <h2 class="font-size-regular"><a href="#" class="text-black"><span class="fa fa-dollar"></span> Biaya terjangkau</a></h2>
            <p>Kami berani bersaing dengan vendor lain mengenai harga yang kami tawarkan, dijamin murah dengan kualitas barang yang tentunya tidak murahan.</p>
          </div>
        </div>
      </div>
  </div>
</div>

<div class="site-section" data-aos="fade">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center border-primary">
        <h2 class="font-weight-light text-primary">Produk Populer</h2>
        <p class="color-black-opacity-5">Anda tertarik dengan produk kami ?</p>
      </div>
    </div>
    <div class="row">
      @foreach ($popular as $item)
        @if($item->app == 'popular_image')
          <div class="col-md-6 mb-4 mb-lg-4 col-lg-4">
            <div class="listing-item">
              <div class="listing-image" style="height:320px;">
                <img src="{{URL::to('/')}}{{ $item->path }}/{{ $item->file }}" alt="Image" class="img-fluid">
              </div>
              <div class="listing-item-content">
                <a href="#" class="bookmark" data-toggle="tooltip" data-placement="left" title="Bookmark"><span class="icon-heart"></span></a>
                <!-- $popular_category -->
                <?php $tag = explode(",",$item->category); ?>
                @foreach ($tag as $tag)
                  <a class="px-3 mb-3 category" href="pages/product-list/{{ $tag }}">{{ $tag }}</a>
                @endforeach
                <h2 class="mb-1"><a href="#">{{ $item->title }}</a></h2>
                <span class="address">{{ $item->description }}</span>
              </div>
            </div>
          </div>
        @endif
      @endforeach
    </div>
    <div class="col-12 text-center mt-4">
      <a href="#" class="btn btn-primary rounded py-2 px-4 text-white">Lihat semua produk</a>
    </div>
  </div>
</div>

<div class="newsletter bg-primary py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h2>Pesan sekarang ?</h2>
        <p>Mau tahu lebih detail ? kirim kami pesan.</p>
      </div>
      <div class="col-md-6">

        <form class="d-flex">
          <input type="text" class="form-control" placeholder="Pesan anda">
          <input type="submit" value="Kirim" class="btn btn-white">
        </form>
      </div>
    </div>
  </div>
</div>
<!-- </div> -->
