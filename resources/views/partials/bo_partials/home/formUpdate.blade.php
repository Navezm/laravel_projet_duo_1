<div class="container mt-5 pt-5">
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $item)
              <li>{{$item}}</li>
          @endforeach
      </ul>
  </div>
  @endif
    <div class="rounded bg-warning p-5 mt-3">
        <form method="POST" action="/updateHome/{{$show->id}}">
          @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Change Bullet :</label>
            <input type="text" name="bullet" class="form-control" value="{{$show->bullet}}">
          </div>
          <button type="submit" class="btn btn-light text-primary">Submit</button>
        </form>
    </div>
    <a class="btn btn-warning mt-3" href="/bo/home">Back</a>
  </div>