<div class="container mt-5 pt-5">
  <div class="rounded bg-warning p-5 mt-3">
    <form method="POST" action="/updateParagraph/{{$DBparagraph->id}}">
      @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">Change Paragraph :</label>
        <textarea cols="30" rows="4" name="paragraph" class="form-control">{{$DBparagraph->paragraph}}</textarea>
      </div>
      <button type="submit" class="btn btn-light text-primary">Submit</button>
    </form>
  </div>
  <a class="btn btn-warning mt-3" href="/bo/home/paraPg">Back</a>
</div>