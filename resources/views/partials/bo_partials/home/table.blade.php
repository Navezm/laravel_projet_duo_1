<h3>Add Bullet Home</h3>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Content</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($BulletHome as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->bullet}}</td>
        </tr>
      @endforeach
    </tbody>
</table>