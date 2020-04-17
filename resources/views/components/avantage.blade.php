
          <div class="row">
            <div class="span12">
              <div class="row">
                {{-- foreach --}}
                @foreach ($avantages as $index=>$item)
                    
                <div class="span4">
                  @if ($index%3==1)
                  <div class="box flyIn">
                    @elseif($index%3==2)
                    <div class="box flyRight">
                    @else
                        <div class="box flyLeft">
                  @endif
                        <div class="icon">
                            <i class="ico icon-circled icon-bgdark {{$item->icone}} active icon-3x"></i>
                        </div>
                        <div class="text">
                        <h4>{!!App\Helpers\ColorChanger::black($item->titre)!!}</h4>
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