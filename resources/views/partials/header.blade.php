<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="#">{{$DBnav[0]->title}}</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>

          @foreach ($NavLink as $item)
              @if ($item->link === "home")
                <li class="{{Route::getCurrentRoute()->uri()== '/'? 'active' : ''}}"><a class='text-capitalize' href="{{route($item->link)}}">{{$item->link}}</a></li>

              @elseif($loop->iteration <4 && $loop->iteration >1)
                <li class="{{Route::getCurrentRoute()->uri()== $item->link? 'active' : ''}}"><a class='text-capitalize' href="{{route($item->link)}}">{{$item->link}}</a></li>

              @else 
                <li class="{{Route::getCurrentRoute()->uri()== $item->link? 'active' : ''}}"><a class='text-capitalize text-warning' href="/{{$item->link}}">{{$item->link}}</a></li>
              @endif
          @endforeach
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header>