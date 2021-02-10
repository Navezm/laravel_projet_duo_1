<h3>Add a Nav Link</h3>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Content</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($NavLink as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->link}}</td>
            <td>
              <form action="/deleteNav/{{$item->id}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
        </tr>
      @endforeach
    </tbody>
</table>