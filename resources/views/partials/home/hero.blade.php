<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-2 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>{{$DBhome[0]->title}}</h1>
          <ul>
            @foreach ($BulletHome as $item)
              <li><i class="{{$BulletHome[0]->icon}}"></i>{{$item->bullet}}</li>
            @endforeach
          </ul>
          <div class="mt-3">
            <a href="#about" class="btn-get-started scrollto">{{$DBhome[0]->btn1}}</a>
            <a href="" class="btn-get-quote">{{$DBhome[0]->btn2}}</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="{{asset($DBhome[0]->src1)}}" class="img-fluid" alt="">
        </div>
      </div>
    </div>
</section><!-- End Hero -->