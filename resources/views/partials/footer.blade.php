<footer id="footer">
    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          {{$paragraph1[0]}} <strong><span>{{$paragraph1[1]}}</span></strong>{{$paragraph1[2]}}
        </div>
        <div class="credits">
          {{$paragraph2[0]}} <a href="{{$DBnav[0]->linbkB}}">{{$paragraph2[1]}}</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        @foreach ($FooterBtn as $item)
          <a href="#" class="twitter"><i class="{{$item->button}}"></i></a>
        @endforeach
      </div>
    </div>
</footer>