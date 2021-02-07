<div class="col-lg-6">
  
    <div class="row">
      @foreach ($cards as $card)
      <div class="{{$loop->iteration === 1 ? 'col-md-12' : 'col-md-6'}}">
        <div class="info-box {{$loop->iteration === 1 ? '' : 'mt-4'}}">
          <i class="{{$card->icon}}"></i>
          <h3>{{$card->subtitle}}</h3>
          <p>
            @foreach ($infos[$loop->iteration -1] as $item)
                @if ($item->id ==1)
                    {{$item->info}}
                @else 
                    <br>{{$item->info}}
                @endif
            @endforeach

            </p>
        </div>
      </div>
      @endforeach

    </div>

  </div>