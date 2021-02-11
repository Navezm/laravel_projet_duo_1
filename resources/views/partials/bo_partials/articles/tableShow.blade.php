<div class="container mt-5 pt-5">
    <h1 class="text-center">{{$show->title}}</h1>
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
            <tr>
                <th scope="row">{{$show->id}}</th>
                <td>{{$show->title}}</td>
            <td>{{$show->subtitle}}</td>
            <td>{{$show->preview}}</td>
            <td>
                <form action="/delete-article/{{$show->id}}" method="post">
                @csrf
                <button type="submit" class="btn btn-danger text-white">delete</button>
            </form>
        </td>
    </tr>
</tbody>
</table>
<a class="btn btn-outline-secondary" href="/bo/articles">Back to Articles</a>
</div>