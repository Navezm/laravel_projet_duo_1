<h3>Add a Nav Link</h3>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Content</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($NavLink as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->link}}</td>
        </tr>
      @endforeach
    </tbody>
</table>