<!-- ======= About Section ======= -->
<section id="about" class="about">
      <div class="container">
        <div class="row content">
          <div class="col-lg-6">
            <h2>{{$DBhome[0]->subtitle}}</h2>
            <h3>{{$DBparagraph[0]->paragraph}}</h3>
            <div>
                <img class="rounded" src="{{$DBhome[0]->src2}}" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              {{$DBparagraph[1]->paragraph}}
            </p>
            <ul>
              @foreach ($BulletAbout as $item)
                <li><i class="{{$BulletAbout[0]->icon}}"></i>{{$item->bullet}}</li>
              @endforeach
            </ul>
            <p class="font-italic">
              {{$DBparagraph[2]->paragraph}}
            </p>
          </div>
        </div>
      </div>
</section><!-- End About Section -->