<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Resi.</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="{{Route::getCurrentRoute()->uri() == '/'? 'active' : ''}}"><a href="/">Home</a></li>
          <li class="{{Route::getCurrentRoute()->uri() == 'articles'? 'active' : ''}}"><a href="{{route('articles')}}">Articles</a></li>
          <li class="{{Route::getCurrentRoute()->uri() == 'contact'? 'active' : ''}}"><a href="#">Contact</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header>