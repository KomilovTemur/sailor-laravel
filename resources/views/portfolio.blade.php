@extends('layouts.site')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<main id="main">
@endsection

    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portolio</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Portolio</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    @include("sections/portfolio")
  </main>
  <!-- End #main -->
