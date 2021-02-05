<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">{{$DBnav[0]->title}}</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>

          @foreach ($DBnav as $item)
              @if ($item->link === "home")
                <li class="{{Route::getCurrentRoute()->uri()== '/'? 'active' : ''}}"><a href="{{route($item->link)}}">{{$item->link}}</a></li>

                @else
                <li class="{{Route::getCurrentRoute()->uri()== $item->link? 'active' : ''}}"><a href="{{route($item->link)}}">{{$item->link}}</a></li>

              @endif
          @endforeach
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header>