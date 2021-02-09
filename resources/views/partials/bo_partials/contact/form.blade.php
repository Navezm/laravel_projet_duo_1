<div class="bg-primary rounded text-white p-5 mt-3">

    <h5 class="my-5 text-underline">Add an info</h5>
      <form action="{{$storePath}}" method="post" >
        @csrf
        <div class="form-group">
            <label>New info to add:</label>
            <input type="text" class="form-control" name="info">
          </div>
          <button type="submit" class="btn btn-light text-primary">Add</button>
    </form>
</div>