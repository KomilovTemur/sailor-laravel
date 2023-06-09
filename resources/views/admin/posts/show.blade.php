@extends('layouts.admin')
@section('sidebar')
  @include('layouts.sidebar')
@endsection
@section('content')
@section('title')
  show Post
@endsection
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header d-flex justify-content-between">
        <h4>{{ $post->title }}</h4>
        <a href="{{ route('admin.posts.edit', $post->id) }}" class="ml-2 btn btn-success">Edit Post</a>
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
                <th>Tags</th>
              </tr>
              <tr>
                <td>{{ $post->id }}</td>
                <td>{{ \Str::limit($post->title, 10) }}</td>
                <td>{{ \Str::limit($post->body, 30) }}</td>
                <td>{{ $post->category->name }}</td>
                <td>
                  <img style="width: 50px" class="shadow rounded-sm" src="{{ $post->image }}" alt="{{ $post->title }}">
                </td>
                <td>{{ \Str::limit($post->slug, 10) }}</td>
                <td>
                  @if (count($post->tags))
                    @foreach ($post->tags as $tag)
                      <a href="">#{{ $tag->name }}</a>
                    @endforeach
                  @else
                    not connected
                  @endif


                </td>
                <td>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
