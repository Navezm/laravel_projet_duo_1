<section class="container my-4">
    <h1 class="text-center">Add elements</h1>
    <form method="POST" action="/addBullet">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">New bullet point Home :</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">New bullet point About :</label>
            <input type="text" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>