@extends('template.backoffice')
@section('content_bo')
<section class="container my-5">
    <h1 class="bo-title text-center">
        Articles
    </h1>
   
    @include('partials.bo_partials.articles.table')
    @include('partials.bo_partials.articles.form')
      
</section>
@endsection