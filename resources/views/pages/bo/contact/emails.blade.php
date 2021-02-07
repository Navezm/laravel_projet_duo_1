@extends('template.backoffice')
@section('content_bo')
<section class="container my-5">
    <h1 class="bo-title text-center">
        Emails
    </h1>
    <table class="table mb-5">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Infos</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($emails as $email)
          <tr>
            <th scope="row">{{$email->id}}</th>
            <td>{{$email->info}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    
      <div class="bg-primary rounded text-white p-5 mt-3">

          <h5 class="my-5 text-underline">Add an email</h5>
            <form action="/add-email" method="post" >
              @csrf
              <div class="form-group">
                  <label >New email to add:</label>
                  <input type="text" class="form-control" name="info">
                </div>
                <button type="submit" class="btn btn-light text-primary">Add</button>
          </form>
      </div>
</section>
@endsection