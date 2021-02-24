<div class="bg-primary rounded text-white p-5 mt-3">
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
    <h5 class="my-5 text-underline">{{$values? 'Edit an Article' : 'Add an Article'}}</h5>
      <form action="{{$values? '/update-article/'.$article->id : '/add-article'}}" method="post" >
        @csrf
        <div class="form-group">
            <label >Title: </label>
            <input type="text" class="form-control" name="title" value="{{$values?  $article->title : null}}">
          </div>
        <div class="form-group">
            <label >Subtitle: </label>
            <input type="text" class="form-control" name="subtitle" value="{{$values?  $article->subtitle : null}}">
          </div>
        <div class="form-group">
            <label >Preview: </label>
            <input type="text" class="form-control" name="preview" value="{{$values?  $article->preview : null}}">
          </div>
          <button type="submit" class="btn btn-light text-primary">{{$values?  'edit' : 'add'}}</button>
    </form>
</div>