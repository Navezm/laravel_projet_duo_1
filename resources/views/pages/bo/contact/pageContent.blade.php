@extends('template.backoffice')
@section('content_bo')
<section class="container my-5">
    <h1 class="bo-title text-center">
        Contact - Page Content
    </h1>
    
    <div class="my-3 container">
        <h5 class="text-primary"><span class="p text-secondary"> Current Title :  </span><br>
            {{$pageContent->title1}}</h5>  
        <h5 class="text-primary"><span class="p text-secondary"> Current Header :  </span><br>
            {{$pageContent->p}}</h5>  
        <h5 class="text-primary"><span class="p text-secondary"> Current Loading Message :  </span><br>
            {{$pageContent->loading}}</h5>  
        <h5 class="text-primary"><span class="p text-secondary"> Current Sent Confirmation :  </span><br>
            {{$pageContent->sent}}</h5>  
        <h5 class="text-primary"><span class="p text-secondary"> Current Send Button :  </span><br>
            {{$pageContent->btn}}</h5>  
    </div>

    <div class="container mt-3 p-5">

        
        <form action="/bo/contact/content/update" method="post" class="bg-warning text-white rounded p-3">
            @csrf
            <div class="form-group">
                <label >New Title : </label>
                <input type="text" class="form-control" name="title1" value="{{$pageContent->title1}}"/>
              </div>
            <div class="form-group">
                <label >New Header : </label>
                <textarea cols="30" rows="5" class="form-control" name="p">{{$pageContent->p}}</textarea>
              </div>
            <div class="form-group">
                <label >New Loading Message : </label>
                <input type="text" class="form-control" name="loading" value="{{$pageContent->loading}}"/>
              </div>
            <div class="form-group">
                <label >New Sent Confirmation : </label>
                <input type="text" class="form-control" name="sent" value="{{$pageContent->sent}}"/>
              </div>
            <div class="form-group">
                <label >New Send Button : </label>
                <input type="text" class="form-control" name="btn" value="{{$pageContent->btn}}"/>
              </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

</section>
<hr>
<section class="container my-5">
    <h1 class="bo-title text-center">
        Contact - Cards
    </h1>
    
    @foreach ($cards as $card)
        <h5 class="text-primary"> Card #{{$loop->iteration}}</h5>
        <div class="my-3 container">
            <h5 class="text-primary"><span class="p text-secondary"> Current Subtitle :  </span><br>
                {{$card->subtitle}}</h5>  
            <h5 class="text-primary"><span class="p text-secondary"> Current Icon :  </span><br>
                <i class="{{$card->icon}}"></i></h5>  
             
        </div>
    
        <div class="container mt-1 p-5">
            <form action="/bo/contact/content/update-card/{{$card->id}}" method="post" class="bg-warning text-white rounded p-3">
                @csrf
                <div class="form-group">
                    <label >New Subtitle : </label>
                    <input type="text" class="form-control" name="subtitle" value="{{$card->subtitle}}"/>
                  </div>
                <div class="form-group">
                    <label >New Icon : </label>
                    <input type="text" class="form-control" name="icon" value="{{$card->icon}}"/>

                  </div>
               
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    @endforeach

</section>
<hr>

<section class="container my-5">
    <h1 class="bo-title text-center">
        Form
    </h1>
    
    @foreach ($pageContentForms as $pageContentForm)
        @if ($loop->iteration == 1)
            <h1>Form PlaceHolders</h1>
        @else
            <h1>Form Data Messages</h1>
        @endif    
        <div class="my-3 container">
            <h5 class="text-primary"><span class="p text-secondary"> Current Name :  </span><br>
                {{$pageContentForm->name}}</h5>  
            <h5 class="text-primary"><span class="p text-secondary"> Current Email :  </span><br>
                {{$pageContentForm->email}}</h5>  
            <h5 class="text-primary"><span class="p text-secondary"> Current Subject :  </span><br>
                {{$pageContentForm->subject}}</h5>  
            <h5 class="text-primary"><span class="p text-secondary"> Current Message :  </span><br>
                {{$pageContentForm->message}}</h5>  
        </div>

        <div class="container mt-3 p-5">

            
            <form action="/bo/contact/content/update-form/{{$pageContentForm->id}}" method="post" class="bg-warning text-white rounded p-3">
                @csrf
                <div class="form-group">
                    <label >Name: </label>
                    <input type="name" class="form-control" name="name" value="{{$pageContentForm->name}}"/>
                </div>
                <div class="form-group">
                    <label >Email : </label>
                    <input type="text" class="form-control" name="email" value="{{$pageContentForm->email}}"/>
                </div>
                <div class="form-group">
                    <label >Subject : </label>
                    <input type="text" class="form-control" name="subject" value="{{$pageContentForm->subject}}"/>
                </div>
                <div class="form-group">
                    <label >Message : </label>
                    <input type="text" class="form-control" name="message" value="{{$pageContentForm->message}}"/>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>

        <hr>
    @endforeach


</section>
@endsection