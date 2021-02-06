<section class="container my-4">
    <h1 class="mb-4">Add elements</h1>
    <form method="POST" action="/addNav">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">New Link :</label>
          <input type="text" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>