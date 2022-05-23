<x-website-layout>
    <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('{{ $about->banner }}');">
        <div class="container">
          <div class="row same-height justify-content-center">
            <div class="col-md-12 col-lg-10">
              <div class="post-entry text-center">
                <h1 class="">About Us</h1>
                <p class="lead mb-4 text-white">{{ $about->description }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="site-section bg-light">
        <div class="container">
          <div class="row">
            <div class="col-md-6 order-md-2">
              <img src="{{ $about->image1 }}" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-5 mr-auto order-md-1">
              <h2>{{ $about->title1 }}</h2>
              <p>{{ $about->description1 }}</p>
            </div>
          </div>
        </div>
      </div>

      <div class="site-section">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-md-5 text-center">
              <h2>{{ $about->team_title }}</h2>
              <p>{{ $about->team_description }}</p>
            </div>
          </div>
          <div class="row">
              @foreach ($users as $user)
              <div class="col-md-6 col-lg-4 mb-5 text-center">
                <img src="{{ $user->image }}" alt="Image" class="img-fluid w-50 rounded-circle mb-4">
                <h2 class="mb-3 h5">{{ $user->name }}</h2>
                <p>{{ $user->about }}</p>

                <p class="mt-5">
                  <a href="{{ $user->facebook }}" class="p-3"><span class="icon-facebook"></span></a>
                  <a href="{{ $user->instagram }}" class="p-3"><span class="icon-instagram"></span></a>
                  <a href="{{ $user->twitter }}" class="p-3"><span class="icon-twitter"></span></a>
                </p>
              </div>
              @endforeach

          </div>
        </div>
      </div>

      <div class="site-section bg-light">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <img src="{{ $about->image2 }}" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-5 ml-auto">
              <h2>{{ $about->title2 }}</h2>
              <p class="mb-4">{{ $about->description2 }}</p>
            </div>
          </div>
        </div>
      </div>


      <div class="site-section bg-white">
        <div class="container">
          <div class="row justify-content-center text-center">
            <div class="col-md-5">
              <div class="subscribe-1 ">
                <h2>Subscribe to our newsletter</h2>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nesciunt error illum a explicabo, ipsam nostrum.</p>
                <form action="#" class="d-flex">
                  <input type="text" class="form-control" placeholder="Enter your email address">
                  <input type="submit" class="btn btn-primary" value="Subscribe">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
</x-website-layout>
