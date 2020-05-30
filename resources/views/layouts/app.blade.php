<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Arsha Bootstrap Template - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">


  @include('layouts.includes.style')

</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">

    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="{{ url('/') }}">Arsha</a></h1>
      

  @include('layouts.includes.nav')

       <a href="#about" class="get-started-btn scrollto">Get Started</a>
    </div>
  </header><!-- End Header -->
  @include('layouts.includes.hero')
  @yield('content')
  @include('layouts.includes.footer')

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  @include('layouts.includes.script')

</body>

</html>
