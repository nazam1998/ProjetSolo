<footer>
    <div class="container">
      <div class="row">
        <div class="span4">
          <div class="widget">
            <h5 class="widgetheading">Browse pages</h5>
            <ul class="link-list">
              <li><a href="#">Our company</a></li>
              <li><a href="#">Terms and conditions</a></li>
              <li><a href="#">Privacy policy</a></li>
              <li><a href="#">Press release</a></li>
              <li><a href="#">What we have done</a></li>
              <li><a href="#">Our support forum</a></li>
            </ul>

          </div>
        </div>
        <div class="span4">
          <div class="widget">
            @foreach ($contact as $item)
            <h5 class="widgetheading">Get in touch</h5>
                
            
            <address>
            <strong>{{$item->nom}}</strong><br>
            {{$item->adresse}}<br>
                          {{$item->ville}}
                      </address>
            <p>
              <i class="icon-phone"></i> {{$item->phone}} <br>
              <i class="icon-envelope-alt"></i> {{$item->email}}
            </p>
            @endforeach
          </div>
        </div>
        <div class="span4">
          <div class="widget">
            <h5 class="widgetheading">Subscribe newsletter</h5>
            <p>
              Keep updated for new releases and freebies. Enter your e-mail and subscribe to our newsletter.
            </p>
          <form class="subscribe" method="POST" action="{{route('newsletter.subscribe')}}">
            @csrf
              <div class="input-append">
                @error('email')
                {{$message}}
                @enderror
                <input class="span2" id="appendedInputButton" type="text" name="email">
                <button class="btn btn-theme" type="submit">Subscribe</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div id="sub-footer">
      <div class="container">
        <div class="row">
          <div class="span6">
            <div class="copyright">
              <p><span>&copy; Eterna company. All right reserved</span></p>
            </div>

          </div>

          <div class="span6">
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Eterna
              -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
