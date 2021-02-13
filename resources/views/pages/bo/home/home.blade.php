@extends('template.backoffice')
@section('content_bo')
<h1 class="text-center mt-5 pt-5">Home Bullet</h1>
    <section class="container mt-2">
        @include('partials.bo_partials.home.table')
        @include('partials.bo_partials.home.form')
    </section>
    <section class="container mt-4">
        @include('partials.bo_partials.about.table')
        @include('partials.bo_partials.about.form')
    </section>
@endsection