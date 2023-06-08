@extends('layouts.admin')
@section('sidebar')
  @include('layouts.sidebar')
@endsection
@section('content')
@section('title')
  Create Post
@endsection
<div class="row">
  <div class="col-12 col-md-6 col-lg-6">
    <form action="{{ route('admin.posts.store') }}" method="POST" class="card">
      @csrf
      <div class="card-header">
        <h4>Create Post</h4>
      </div>
      <div class="card-body">

        <div class="form-group">
          <label>Title</label>
          <div class="input-group">
            <input required value="{{ old('title') }}" type="text" name="title" class="form-control">
          </div>
          @error('title')
            {{ $message }}
          @enderror
        </div>
        <div class="form-group">
          <label>body</label>
          <div class="input-group">
            <textarea required value="{{ old('body') }}" type="text" name="body" class="form-control"></textarea>
          </div>
          @error('body')
            {{ $message }}
          @enderror
        </div>
        <div class="form-group">
          <label>Image</label>
          <div class="input-group">
            <input required value="{{ old('image') }}" type="text" name="image" class="form-control">
          </div>
          @error('image')
            {{ $message }}
          @enderror
        </div>
        <div class="form-group">
          <label>Slug</label>
          <div class="input-group">
            <input required value="{{ old('slug') }}" type="text" name="slug" class="form-control">
          </div>
          @error('slug')
            {{ $message }}
          @enderror
        </div>

        <div class="form-group">
          <label>Select Category</label>
          <select class="form-control" name="category_id">
            @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select>
          @error('category_id')
            {{ $message }}
          @enderror
        </div>
        <button class="btn btn-success w-100" type="submit">Create</button>
      </div>
    </form>
  </div>
</div>
@endsection
