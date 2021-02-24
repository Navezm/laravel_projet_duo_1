<div class="bg-primary rounded text-white p-5 mt-3">
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $item)
              <li>{{$item}}</li>
          @endforeach
      </ul>
  </div>
  @endif
  <form method="POST" action="/addNavLink">
      @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">New Link :</label>
        <input type="text" name="link" class="form-control">
      </div>
      <button type="submit" class="btn btn-light text-primary">Submit</button>
  </form>
</div>