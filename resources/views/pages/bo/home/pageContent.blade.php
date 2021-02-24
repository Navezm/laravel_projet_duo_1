@extends('template.backoffice')

@section('content_bo')
    <section class="container my-5">
        <h1 class="text-center">Home - Page Content</h1>
        <div>
            <h5 class="text-primary mt-5"><span class="p text-secondary"> Current Title :  </span><p>{{$DBhome[0]->title}}</p></h5>

            <h5 class="text-primary mt-5"><span class="p text-secondary"> Current Buttons :  </span>
                <p>{{$DBhome[0]->btn1}}</p>
                <p>{{$DBhome[0]->btn2}}</p>
            </h5>

            <h5 class="text-primary mt-5"><span class="p text-secondary"> Current Subtitle :  </span><p>{{$DBhome[0]->subtitle}}</p></h5>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $item)
                        <li>{{$item}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <div class="container mt-3 p-5">
            <form action="/updateContent" method="post" class="bg-warning text-white rounded p-3">
                @csrf
                <div class="form-group">
                    <label >New Title : </label>
                    <input type="text" class="form-control" name="title" value="{{$DBhome[0]->title}}"/>
                  </div>
                <div class="form-group">
                    <label >New Subtitle : </label>
                    <input type="text" class="form-control" name="subtitle" value="{{$DBhome[0]->subtitle}}"/>
                  </div>
                <div class="form-group">
                    <label >New Buttons : </label>
                    <div class="mb-2">
                        <input type="text" class="form-control" name="btn1" value="{{$DBhome[0]->btn1}}"/>
                    </div>
                    <input type="text" class="form-control" name="btn2" value="{{$DBhome[0]->btn2}}"/>
                  </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </section>
@endsection