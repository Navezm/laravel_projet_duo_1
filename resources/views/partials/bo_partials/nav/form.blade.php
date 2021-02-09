<div class="bg-primary rounded text-white p-5 mt-3">
  <form method="POST" action="/addNavLink">
      @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">New Link :</label>
        <input type="text" name="link" class="form-control">
      </div>
      <button type="submit" class="btn btn-light text-primary">Submit</button>
  </form>
  
</div>