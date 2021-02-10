<h1 class="bo-title text-center">
    {{$pageTitle}}
</h1>
<table class="table mb-5">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Infos</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($infos as $info)
      <tr>
        <th scope="row">{{$info->id}}</th>
        <td>{{$info->info}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>