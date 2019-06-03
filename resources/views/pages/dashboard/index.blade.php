@extends('index', ['title' => 'Beranda'])
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
                      <option value="">{{ $item->category }}</option>
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
    <div class="overlap-category mb-5">
      <div class="row align-items-stretch no-gutters">
          @foreach ($category as $item)
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
              <a href="#" class="popular-category h-100">
                <!-- <span class="{{ $item->icon }} fa-2x"></span> -->
                <img src="{{URL::to('/')}}/assets/icon/{{ $item->icon }}" width="42" height="42">
                <span class="caption mb-2 d-block" style="padding-top:10px;">{{ $item->category }}</span>
                <span class="number">{{ $item->count }}</span>
              </a>
            </div>
          @endforeach
      </div>
    </div>
  </div>
</div>

<div class="site-section" data-aos="fade">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center border-primary">
        <h2 class="font-weight-light text-primary">Product Populer</h2>
        <p class="color-black-opacity-5">Anda tertarik dengan produk kami?</p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 mb-4 mb-lg-4 col-lg-4">

        <div class="listing-item">
          <div class="listing-image">
            <img src="images/img_1.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="listing-item-content">
            <a href="#" class="bookmark" data-toggle="tooltip" data-placement="left" title="Bookmark"><span class="icon-heart"></span></a>
            <a class="px-3 mb-3 category" href="#">Car &amp; Vehicles</a>
            <h2 class="mb-1"><a href="#">Red Luxury Car</a></h2>
            <span class="address">West Orange, New York</span>
          </div>
        </div>

      </div>
      <div class="col-md-6 mb-4 mb-lg-4 col-lg-4">

        <div class="listing-item">
          <div class="listing-image">
            <img src="images/img_2.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="listing-item-content">
            <a href="#" class="bookmark"><span class="icon-heart"></span></a>
            <a class="px-3 mb-3 category" href="#">Real Estate</a>
            <h2 class="mb-1"><a href="#">House with Swimming Pool</a></h2>
            <span class="address">West Orange, New York</span>
          </div>
        </div>

      </div>
      <div class="col-md-6 mb-4 mb-lg-4 col-lg-4">

        <div class="listing-item">
          <div class="listing-image">
            <img src="images/img_3.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="listing-item-content">
            <a href="#" class="bookmark"><span class="icon-heart"></span></a>
            <a class="px-3 mb-3 category" href="#">Furniture</a>
            <h2 class="mb-1"><a href="#">Wooden Chair &amp; Table</a></h2>
            <span class="address">West Orange, New York</span>
          </div>
        </div>

      </div>

      <div class="col-md-6 mb-4 mb-lg-4 col-lg-6">

        <div class="listing-item">
          <div class="listing-image">
            <img src="images/img_4.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="listing-item-content">
            <a href="#" class="bookmark" data-toggle="tooltip" data-placement="left" title="Bookmark"><span class="icon-heart"></span></a>
            <a class="px-3 mb-3 category" href="#">Electronics</a>
            <h2 class="mb-1"><a href="#">iPhone X gray</a></h2>
            <span class="address">West Orange, New York</span>
          </div>
        </div>

      </div>
      <div class="col-md-6 mb-4 mb-lg-4 col-lg-6">

        <div class="listing-item">
          <div class="listing-image">
            <img src="images/img_2.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="listing-item-content">
            <a href="#" class="bookmark"><span class="icon-heart"></span></a>
            <a class="px-3 mb-3 category" href="#">Real Estate</a>
            <h2 class="mb-1"><a href="#">House with Swimming Pool</a></h2>
            <span class="address">West Orange, New York</span>
          </div>
        </div>

      </div>


    </div>
  </div>
</div>


<div class="site-section bg-light">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-7 text-left border-primary">
        <h2 class="font-weight-light text-primary">Trending Today</h2>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-lg-6">

        <div class="d-block d-md-flex listing">
          <a href="listings-single.html" class="img d-block" style="background-image: url('images/img_2.jpg')"></a>
          <div class="lh-content">
            <span class="category">Real Estate</span>
            <a href="#" class="bookmark"><span class="icon-heart"></span></a>
            <h3><a href="listings-single.html">House with Swimming Pool</a></h3>
            <address>Don St, Brooklyn, New York</address>
            <p class="mb-0">
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-secondary"></span>
              <span class="review">(3 Reviews)</span>
            </p>
          </div>
        </div>
        <div class="d-block d-md-flex listing">
            <a href="listings-single.html" class="img d-block" style="background-image: url('images/img_3.jpg')"></a>
            <div class="lh-content">
              <span class="category">Furniture</span>
              <a href="#" class="bookmark"><span class="icon-heart"></span></a>
              <h3><a href="listings-single.html">Wooden Chair &amp; Table</a></h3>
              <address>Don St, Brooklyn, New York</address>
              <p class="mb-0">
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-secondary"></span>
                <span class="review">(3 Reviews)</span>
              </p>
            </div>
          </div>

          <div class="d-block d-md-flex listing">
            <a href="listings-single.html" class="img d-block" style="background-image: url('images/img_4.jpg')"></a>
            <div class="lh-content">
              <span class="category">Electronics</span>
              <a href="#" class="bookmark"><span class="icon-heart"></span></a>
              <h3><a href="listings-single.html">iPhone X gray</a></h3>
              <address>Don St, Brooklyn, New York</address>
              <p class="mb-0">
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-secondary"></span>
                <span class="review">(3 Reviews)</span>
              </p>
            </div>
          </div>



      </div>
      <div class="col-lg-6">

        <div class="d-block d-md-flex listing">
          <a href="listings-single.html" class="img d-block" style="background-image: url('images/img_1.jpg')"></a>
          <div class="lh-content">
            <span class="category">Cars &amp; Vehicles</span>
            <a href="#" class="bookmark"><span class="icon-heart"></span></a>
            <h3><a href="listings-single.html">Red Luxury Car</a></h3>
            <address>Don St, Brooklyn, New York</address>
            <p class="mb-0">
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-secondary"></span>
              <span class="review">(3 Reviews)</span>
            </p>
          </div>
        </div>

        <div class="d-block d-md-flex listing">
          <a href="listings-single.html" class="img d-block" style="background-image: url('images/img_2.jpg')"></a>
          <div class="lh-content">
            <span class="category">Real Estate</span>
            <a href="#" class="bookmark"><span class="icon-heart"></span></a>
            <h3><a href="listings-single.html">House with Swimming Pool</a></h3>
            <address>Don St, Brooklyn, New York</address>
            <p class="mb-0">
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-secondary"></span>
              <span class="review">(3 Reviews)</span>
            </p>
          </div>
        </div>
        <div class="d-block d-md-flex listing">
            <a href="listings-single.html" class="img d-block" style="background-image: url('images/img_3.jpg')"></a>
            <div class="lh-content">
              <span class="category">Furniture</span>
              <a href="#" class="bookmark"><span class="icon-heart"></span></a>
              <h3><a href="listings-single.html">Wooden Chair &amp; Table</a></h3>
              <address>Don St, Brooklyn, New York</address>
              <p class="mb-0">
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-secondary"></span>
                <span class="review">(3 Reviews)</span>
              </p>
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
        <h2 class="font-weight-light text-primary">Our Blog</h2>
        <p class="color-black-opacity-5">See Our Daily News &amp; Updates</p>
      </div>
    </div>
    <div class="row mb-3 align-items-stretch">
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
        <div class="h-entry">
          <img src="images/hero_1.jpg" alt="Image" class="img-fluid rounded">
          <h2 class="font-size-regular"><a href="#" class="text-black">Many People Selling Online</a></h2>
          <div class="meta mb-3">by Mark Spiker<span class="mx-1">&bullet;</span> Jan 18, 2019 <span class="mx-1">&bullet;</span> <a href="#">News</a></div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
        <div class="h-entry">
          <img src="images/hero_1.jpg" alt="Image" class="img-fluid rounded">
          <h2 class="font-size-regular"><a href="#" class="text-black">Many People Selling Online</a></h2>
          <div class="meta mb-3">by Mark Spiker<span class="mx-1">&bullet;</span> Jan 18, 2019 <span class="mx-1">&bullet;</span> <a href="#">News</a></div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
        <div class="h-entry">
          <img src="images/hero_1.jpg" alt="Image" class="img-fluid rounded">
          <h2 class="font-size-regular"><a href="#" class="text-black">Many People Selling Online</a></h2>
          <div class="meta mb-3">by Mark Spiker<span class="mx-1">&bullet;</span> Jan 18, 2019 <span class="mx-1">&bullet;</span> <a href="#">News</a></div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
        </div>
      </div>

      <div class="col-12 text-center mt-4">
        <a href="#" class="btn btn-primary rounded py-2 px-4 text-white">View All Posts</a>
      </div>
    </div>
  </div>
</div>


<div class="newsletter bg-primary py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h2>Newsletter</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
      <div class="col-md-6">

        <form class="d-flex">
          <input type="text" class="form-control" placeholder="Email">
          <input type="submit" value="Subscribe" class="btn btn-white">
        </form>
      </div>
    </div>
  </div>
</div>
