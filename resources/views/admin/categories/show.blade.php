@extends('layouts.admin')
@section('sidebar')
  @include('layouts.sidebar')
@endsection
@section('content')
@section('title')
  Show Categories
@endsection
<div class="row">
  <div class="col-12 col-md-12 col-lg-12">
    <div class="card">
      <div class="card-header">
        <h2>{{ $category->name }}</h2>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-md">
            <tbody>
              <tr>
                <th>id</th>
                <th>Title</th>
                <th>Body</th>
                <th>Slug</th>
                <th>Action</th>
              </tr>
              @foreach ($category->posts as $post)
                <tr>
                  <td>{{ $post->id }}</td>
                  <td>{{ \Str::limit($post->title, 20) }}</td>
                  <td>{{ \Str::limit($post->body, 50) }}</td>
                  <td>{{ \Str::limit($post->slug, 40) }}</td>
                  <td><a href="" class="btn btn-primary">Detail</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <ul>

      </ul>
    </div>
  </div>
</div>
@endsection
