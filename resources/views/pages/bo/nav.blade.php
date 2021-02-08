@extends('template.backoffice')
@section('content_bo')
<h1 class="text-center mt-5 pt-5">Navbar</h1>
    <section class="container">
        @include('partials.bo_partials.nav.table')
        @include('partials.bo_partials.nav.form')
    </section>
@endsection