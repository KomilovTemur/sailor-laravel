@extends('layouts.admin')
@section('sidebar')
  @include('layouts.sidebar')
@endsection
@section('content')
@section('title')
  Posts
@endsection
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header d-flex justify-content-between">
        <h4>Posts Table</h4>
        <a href="{{ route('admin.posts.create') }}" class="ml-2 btn btn-success">Create Post</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-md">
            <tbody>
              <tr>
                <th>id</th>
                <th>Title</th>
                <th>Body</th>
                <th>Category</th>
                <th>Image</th>
                <th>Slug</th>
                <th>Action</th>
              </tr>
              @foreach ($posts as $post)
                <tr>
                  <td>{{ $post->id }}</td>
                  <td>{{ \Str::limit($post->title, 10) }}</td>
                  <td>{{ \Str::limit($post->body, 30) }}</td>
                  <td>{{ $post->category->name }}</td>
                  <td>
                    <img style="width: 50px" class="shadow rounded-sm" src="{{ $post->image }}"
                      alt="{{ $post->title }}">
                  </td>
                  <td>{{ \Str::limit($post->slug, 10) }}</td>
                  <td><a href="" class="btn btn-primary">Detail</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer text-right">
        <nav class="d-inline-block">
          <ul class="pagination mb-0">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1 <span
                  class="sr-only">(current)</span></a></li>
            <li class="page-item">
              <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>
@endsection
