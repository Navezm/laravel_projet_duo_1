<!-- ======= Why Us Section ======= -->


<section id="why-us" class="why-us">
  <div class="container">
      <h1 class="text-primary mb-5 text-uppercase text-center">Why Us?</h1>

      <div class="row">
        @foreach ($articles as $article)
        <div class="col-lg-4">
          <h1 class="text-primary">{{$article->title}}</h1>
            <div class="box">
              <span>{{($article->id > 9 ? '' : '0').($article->id)}}</span>
              <h4>{{$article->subtitle}}</h4>
              <p>{{$article->preview}}</p>
            </div>
          </div>

          @if ($loop->iteration % 3 === 0)
            </div>              
            <div class="row mt-5">
          @endif
        @endforeach

      </div>

    </div>
  </section><!-- End Why Us Section -->