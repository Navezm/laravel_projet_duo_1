<h3>Add Bullet About</h3>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Content</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($DBparagraph as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->paragraph}}</td>
            <td>
              <a class="btn btn-success" href="/editPara/{{$item->id}}">Edit</a>
            </td>
        </tr>
      @endforeach
    </tbody>
</table>