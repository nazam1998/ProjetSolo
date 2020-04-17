<!-- section featured -->
<section id="featured">

    <!-- slideshow start here -->

    <div class="camera_wrap" id="camera-slide">
      @foreach ($headers as $header)
          
      
      <div data-src="{{asset('storage/'.$header->image1)}}">
        <div class="camera_caption fadeFromLeft">
          <div class="container">
            <div class="row">
              <div class="span6">
              <h2 class="animated fadeInDown">{!!App\Helpers\ColorChanger::black($header->titre)!!}</h2>
              <p class="animated fadeInUp">{!!App\Helpers\ColorChanger::black($header->description)!!}</p>
                <a href="#" class="btn btn-success btn-large animated fadeInUp">
                                          <i class="icon-link"></i> Read more
                                      </a>
                <a href="#" class="btn btn-theme btn-large animated fadeInUp">
                                          <i class="icon-download"></i> Download
                                      </a>
              </div>
              <div class="span6">
                <img src="{{asset('storage/'.$header->image2)}}" alt="" class="animated bounceInDown delay1" />
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach

    <!-- slideshow end here -->

  </section>
