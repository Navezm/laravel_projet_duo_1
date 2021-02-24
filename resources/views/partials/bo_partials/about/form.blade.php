<div class="bg-primary rounded text-white p-5 mt-3">
  @if ($errors->bullet2->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->bullet2->all() as $item)
              <li>{{$item}}</li>
          @endforeach
      </ul>
  </div>
  @endif
  <form method="POST" action="/addAboutBullet">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">New Bullet :</label>
      <input type="text" name="bullet" class="form-control">
    </div>
    <button type="submit" class="btn btn-light text-primary">Submit</button>
</form>
</div>