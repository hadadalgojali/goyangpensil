@extends('index', ['title' => 'GP - Kontak'])
<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url({{URL::to('/')}}/template/public/images/banner-min.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">
      <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
        <div class="row justify-content-center mt-5">
          <div class="col-md-8 text-center">
            <h1>kontak kami</h1>
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
                  <input type="text" id="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label>
                  <input type="email" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label>
                  <input type="subject" id="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label>
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary py-2 px-4 text-white">
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
