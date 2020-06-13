@extends('layouts.app')

@section('content')


<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="{{ url('/') }}">Home</a></li>
      <li>Category Details</li>
    </ol>
    <h2>Category Details</h2>
    @include('admins.categories.includes.table',['categories' => $categories])
  </div>
</section><!-- End Breadcrumbs -->



</main><!-- End #main -->


@endsection