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
  if ($id !== null) {
    if (count($portofolio) > 0) {
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
  @if($id !== null && count( $portofolio) > 0)
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
