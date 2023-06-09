@extends('layouts.admin')
@section('sidebar')
  @include('layouts.sidebar')
@endsection
@section('content')
@section('title')
  Edit Post
@endsection
<div class="row">
  <div class="col-12 col-md-6 col-lg-6">
    <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" class="card">
      @csrf
      @method("PUT")
      <div class="card-header">
        <h4>Edit Post</h4>
      </div>
      <div class="card-body">

        <div class="form-group">
          <label>Title</label>
          <div class="input-group">
            <input required value="{{ $post->title }}" type="text" name="title" class="form-control">
          </div>
          @error('title')
            {{ $message }}
          @enderror
        </div>
        <div class="form-group">
          <label>body</label>
          <div class="input-group">
            <textarea required value="{{ $post->body }}" type="text" name="body" class="form-control">{{ $post->body }}</textarea>
          </div>
          @error('body')
            {{ $message }}
          @enderror
        </div>
        <div class="form-group">
          <label>Image</label>
          <div class="input-group">
            <input required value="{{ $post->image }}" type="text" name="image" class="form-control">
          </div>
          @error('image')
            {{ $message }}
          @enderror
        </div>
        <div class="form-group">
          <label>Slug</label>
          <div class="input-group">
            <input required value="{{ $post->slug }}" type="text" name="slug" class="form-control">
          </div>
          @error('slug')
            {{ $message }}
          @enderror
        </div>

        <div class="form-group">
          <label>Select Category</label>
          <select class="form-control" name="category_id">
            @foreach ($categories as $category)
              <option @if ($post->category_id == $category->id) selected @endif value="{{ $category->id }}">
                {{ $category->name }}</option>
            @endforeach
          </select>
          @error('category_id')
            {{ $message }}
          @enderror
        </div>
        <div class="form-group">
          <label>Select Tag</label>
          <select class="form-control" name="tag_id[]" multiple>
            @foreach ($tags as $tag)
              <option @php
$ids = $post->tags->pluck('id')->toArray() @endphp
                @if (in_array($tag->id, $ids)) selected @endif value="{{ $tag->id }}">{{ $tag->name }}
              </option>
            @endforeach
          </select>
          @error('tag_id')
            {{ $message }}
          @enderror
        </div>
        <button class="btn btn-success w-100" type="submit">Edit</button>
      </div>
    </form>
  </div>
</div>
@endsection
