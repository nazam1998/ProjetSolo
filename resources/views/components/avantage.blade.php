
          <div class="row">
            <div class="span12">
              <div class="row">
                {{-- foreach --}}
                @foreach ($avantages as $item)
                    
                <div class="span4">
                    <div class="box flyLeft">
                        <div class="icon">
                            <i class="ico icon-circled icon-bgdark {{$item->icone}} active icon-3x"></i>
                        </div>
                        <div class="text">
                        <h4>{!!$item->titre!!}</h4>
                            <p>
                                Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                            </p>
                            
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- endforeach --}}
              </div>
            </div>
          </div>