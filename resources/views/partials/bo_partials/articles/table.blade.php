<table class="table mb-5">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Subtitle</th>
        <th scope="col">Preview</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($articles as $article)
      <tr>
        <th scope="row">{{$article->id}}</th>
        <td>{{$article->title}}</td>
        <td>{{$article->subtitle}}</td>
        <td>{{$article->preview}}</td>
        <td>
          <form action="/delete-article/{{$article->id}}" method="post">
            @csrf
            <button type="submit" class="btn btn-danger text-white">delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>