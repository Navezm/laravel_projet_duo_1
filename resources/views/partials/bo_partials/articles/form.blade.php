<div class="bg-primary rounded text-white p-5 mt-3">

    <h5 class="my-5 text-underline">Add an Article</h5>
      <form action="/add-address" method="post" >
        @csrf
        <div class="form-group">
            <label >Title: </label>
            <input type="text" class="form-control" name="title">
          </div>
        <div class="form-group">
            <label >Subtitle: </label>
            <input type="text" class="form-control" name="subtitle">
          </div>
        <div class="form-group">
            <label >Preview: </label>
            <input type="text" class="form-control" name="preview">
          </div>
          <button type="submit" class="btn btn-light text-primary">Add</button>
    </form>
</div>