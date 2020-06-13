@extends('layouts.app')

@section('content')


<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="index.html">Home</a></li>
      <li>Creating Category</li>
    </ol>
    <h2>New Category</h2>


    <form action="{{ route('admin.category.store') }}" method = "post">
        @csrf
        @include('admins.categories.includes.field')
    </form>


  </div>
</section><!-- End Breadcrumbs -->



</main><!-- End #main -->


@endsection 