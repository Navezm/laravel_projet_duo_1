<div class="container mt-5 pt-5">
    <div class="rounded p-5 mt-3">
        <form method="POST" action="/updateHome/{{$show->id}}">
          @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Change Bullet :</label>
            <input type="text" name="bullet" class="form-control" value="{{$show->bullet}}">
          </div>
          <button type="submit" class="btn btn-light text-primary">Submit</button>
        </form>
    </div>
</div>