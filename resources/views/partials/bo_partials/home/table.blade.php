<h3>Add Bullet Home</h3>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Content</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($BulletHome as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->bullet}}</td>
            <td>
              <form action="/deleteHome/{{$item->id}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
        </tr>
      @endforeach
    </tbody>
</table>