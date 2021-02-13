<div class="container mt-5 pt-5">
  <div class="rounded p-5 mt-3">
    <form method="POST" action="/updateNav/{{$show->id}}">
      @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">Change Link :</label>
        <input type="text" name="link" class="form-control" value="{{$show->link}}">
      </div>
      <button type="submit" class="btn btn-light text-primary">Submit</button>
    </form>
  </div>
</div>