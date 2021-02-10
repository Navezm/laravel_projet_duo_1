@extends('template.backoffice')
@section('content_bo')
<section class="container my-5">
    @include('partials.bo_partials.contact.table')
    @include('partials.bo_partials.contact.form')
      
</section>
@endsection