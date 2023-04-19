@extends('layouts.site')
@section('content')

  @include('sections.slider')

  <main id="main">

    @include('sections.about');

    @include('sections.clients')
    @include('sections.services')
    @include('sections.portfolio')
    
  </main>
  <!-- End #main -->
@endsection
