<x-layout.layout>
    <div class="mt-5">
    @auth
    <div class="mb-2">
    <a href="{{route('ads.create')}}" class="btn btn-outline-dark btn-lg background-primary color-detail" weight="45">Crea Annuncio</a>
    </div>
    @endauth



    <header>

        <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
        <div class="overlay"></div>
      
        <!-- The HTML5 video element that will create the background video on the header -->
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
          <source src="{{asset('video/AdobeStock_358217088_Video_HD_Preview.mov') }}" type="video/mp4">
        </video>
      
        <!-- The header content -->
        <div class="container h-100">
          <div class="d-flex h-100 text-center align-items-center">
            <div class="w-100 text-white">
              <h1 class="display-3"></h1>
              <p class="lead mb-0"></p>
            </div>
          </div>
        </div>
      </header>
      
      <!-- Page section example for content below the video header -->
      <section class="my-5">
        <div class="container">
          <div class="row">
            <div class="col-md-8 mx-auto">
              <p>The HTML5 video element uses an mp4 video as a source. Change the source video to add in your own background! The header text is vertically centered using flex utilities that are built into Bootstrap.</p>
              <p>The overlay color and opacity can be changed by modifying the <code>background-color</code> and <code>opacity</code> properties of the <code>.overlay</code> class in the CSS.</p>
              <p>Set the mobile fallback image in the CSS by changing the background image of the header element within the media query at the bottom of the CSS snippet.</p>
              <p class="mb-0">
                Created by <a href="https://startbootstrap.com">Start Bootstrap</a>
              </p>
            </div>
          </div>
        </div>
      </section>

        <div class="container">
            <div class="row">
                @foreach ($ads as $ad)
                  <x-ads-card :ad="$ad"/>
                @endforeach
            </div>
        </div>
</x-layout.layout>
