<table class="table mb-5">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($articles as $article)
      <tr>
        <td>{{$article->title}}</td>
        <td><a class="btn btn-info" href="/article-show/{{$article->id}}">Details</a></td>
        
      </tr>
      @endforeach
    </tbody>
  </table>