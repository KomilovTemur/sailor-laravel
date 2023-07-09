@extends('layouts.admin')
@section('sidebar')
  @include('layouts.sidebar')
@endsection
@section('content')
@section('title')
  Create Category
@endsection
<div class="row">
  <div class="col-12 col-md-6 col-lg-6">
    <form action="{{ route('admin.categories.store') }}" method="POST" class="card">
      @csrf
      <div class="card-header">
        <h4>Create Category</h4>
      </div>
      <div class="card-body">

        <div class="form-group">
          <label>Category name</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fas fa-align-center"></i>
              </div>
            </div>
            <input required value="{{ old('name') }}" type="text" name="name" class="form-control">
          </div>
          @error('name')
            {{ $message }}
          @enderror
        </div>
       
        <button class="btn btn-success w-100" type="submit">Create</button>
      </div>
    </form>
  </div>
</div>
@endsection
