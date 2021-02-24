@extends('template.backoffice')
@section('content_bo')
<section class="container my-5">
    <h1 class="bo-title text-center">
        Articles - Page Content
    </h1>
   
    <h5 class="text-primary mt-5"><span class="p text-secondary"> Current Title :  </span>{{$pageContent->title}}</h5>  

    <div class="container mt-3 p-5">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
         @endif
        
        <form action="/bo/articles/content/update" method="post" class="bg-warning text-white rounded p-3">
            @csrf
            <div class="form-group">
                <label >New Title : </label>
                <input type="text" class="form-control" name="title" value="{{$pageContent->title}}"/>
              </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

</section>
@endsection