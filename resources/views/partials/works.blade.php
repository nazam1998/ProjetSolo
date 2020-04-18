<section id="works">
    <div class="container">
      <div class="row">
        <div class="span12">
          <h4 class="title">Recent <strong>Works</strong></h4>
          <div class="row">

            <div class="grid cs-style-4">
              @foreach ($works as $item)
                  
              <div class="span3">
                <div class="item">
                  <figure>
                    <div><img src="{{asset('storage/'.$item->image)}}" alt="" /></div>
                    <figcaption>
                      <div>
                        <span>
                          <a href="{{asset('storage/'.$item->image)}}" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
                              </span>
                              <span>
                              <a href="{{route('work.show',$item)}}"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
                              </span>
                            </div>
                          </figcaption>
                        </figure>
                      </div>
                    </div>
                    
                    @endforeach
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
