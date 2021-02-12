<div class="bg-primary rounded text-white p-5 mt-3">

    <h5 class="my-5 text-underline">{{$values? 'Edit an Info' : 'Add an Info'}}</h5>
      <form action="{{$storePath}}" method="post" >
        @csrf
        <div class="form-group">
            <label>{{$values? 'Edit an Info' : 'New Info to add :'}}</label>
            <input type="text" class="form-control" name="info" value="{{$values? $info->info : null}}">
          </div>
          <button type="submit" class="btn btn-light text-primary">{{$values? 'Edit': 'Add'}}</button>
    </form>
</div>