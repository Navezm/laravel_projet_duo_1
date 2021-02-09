<form method="POST" action="/addHomeBullet">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">New Bullet :</label>
      <input type="text" name="bullet" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>