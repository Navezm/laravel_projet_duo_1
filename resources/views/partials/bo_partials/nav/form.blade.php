<form method="POST" action="/addNavLink">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">New Link :</label>
      <input type="text" name="link" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>