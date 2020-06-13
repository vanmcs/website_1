@extends('layouts.app')

@section('content')


<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="index.html">Home</a></li>
      <li>Edit Category</li>
    </ol>
    <h2>Editing Details of Categories</h2>
    <form action="{{ route('admin.category.update', $category->id) }}" method = "post">
        @csrf
        @method('put')
        @include('admins.categories.includes.field', ['category' => $category])
    </form>
  </div>
</section><!-- End Breadcrumbs -->



</main><!-- End #main -->


@endsection