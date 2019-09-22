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
@extends('index', ['title' => 'GP - Portofolio'])

@section('content')
<?php
  $m_title = "";
  $c_title = "";
  if ($id !== null) {
    if (count($portofolio) > 0) {
      foreach ($portofolio[0]->cover_blog as $items) {
        if ($items->app == 'cover_image') {
          $c_title = $items->path.$items->file;
        }
      }
      // $m_title = $portofolio[0]->group_blog->title;
      $m_title = $portofolio[0]->title;
    }else{
      $m_title = "Tidak Tersedia";
    }
  }
?>
<div class="site-blocks-cover inner-page-cover overlay" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">
      <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
        <div class="row justify-content-center mt-5">
          <div class="col-md-8 text-center">
            <h1>{{ $title.$m_title }}</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <?php //var_dump($portofolio[0]->group_blog->title); ?>
  <?php //var_dump($category[1]);die; ?>
  @if($id !== null && count( $portofolio) > 0)
  <div class="container" style="padding:10px;">
    <div class="row" style="position: relative;">
      <div class="col-3">
        @if($c_title == '' || $c_title == null)
          <img src="{{URL::to('/')}}/assets/images/no_image.jpg" alt="cover" class="img-thumbnail" width="400" height="400">
        @else
          <img src="{{URL::to('/')}}{{ $c_title }}" alt="cover" class="img-thumbnail" width="400" height="400">
        @endif
      </div>
      <div class="col-9"  style="">
        <small class="text-muted">
          Diposting oleh <b>{{ $portofolio[0]->blog_by_user->first_name." ".$portofolio[0]->blog_by_user->last_name }}</b>, pada {{ date_format(date_create($portofolio[0]->updated_at), 'd/M/Y') }}
          <div style="float:right;"><i class="fa fa-eye"></i> {{ $portofolio[0]->viewers }}</div>
        </small>
        <hr>
        {{ $portofolio[0]->description }}
        <br>
        <small>Support :
          @foreach($category as $row)
            <?php $_link = "pages/category/".$row->with_category->category; ?>
            <a href="{{URL::to('/')}}/{{$_link}}"><span class="badge badge-info"><font style="font-family:calibri;">{{ $row->with_category->category }}</font></span></a>
          @endforeach
        </small>
        <?php 
          // var_dump($package);
        ?>
      </div>
      <div style="position:absolute;bottom:0;right:0;">
        @if(count($package) > 0)
          Daftar harga : 
        @endif
        @foreach($package as $result)
          <!-- <button class="btn btn-primary btn-sm">{{ $result->title }}</button> -->
          <div class="_modal_package"></div>
        @endforeach
      </div>
    </div>
  </div>
  <script>
      window.reactInit = {
          url    : "{{URL::to('/')}}",
          id_blog: "<?php echo $id; ?>",
          csrf_token: "{{csrf_token()}}",
      };
  </script>
  <!-- ============================================= PORTOFOLIO ================================  -->
  <div id="_image_blog_list"></div>
  @elseif(count($portofolio) > 1)
    <div class="site-section">
      <div class="container">
      <div class="list-group">
        @foreach($portofolio as $row)
          <a href="{{URL::to('/')}}/pages/product/{{ $row->title }}" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">{{ $row->title }}</h5>
              <!-- <small>3 days ago</small> -->
            </div>
            <p class="mb-1">{{ $row->description }}</p>
            <small style="float:right;">Klik untuk lihat portofolio.</small>
          </a>
        @endforeach
      </div>

    </div>
  </div>
  @endif
@endsection
<!-- </div> -->
