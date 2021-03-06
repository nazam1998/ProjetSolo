<div class="row" id="testimonials">
    <div class="span12 aligncenter">
      <h3 class="title">What people <strong>saying</strong> about us</h3>
      <div class="blankline30"></div>

      <ul class="bxslider">
        @foreach ($testimonials as $item)
            
        <li>
          <blockquote>
            {!!App\Helpers\ColorChanger::black($item->texte)!!}
          </blockquote>
          <div class="testimonial-autor">
          <img src="{!!'storage/'.$item->photo!!}" alt="" />
          <h4>{!!App\Helpers\ColorChanger::black($item->nom.' '.$item->prenom)!!}</h4>
            <a href="#">{!!App\Helpers\ColorChanger::black($item->lien)!!}</a>
          </div>
        </li>
        @endforeach
      </ul>

    </div>
  </div>

</div>
</section>

