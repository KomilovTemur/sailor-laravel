@extends('layouts.admin')
@section('sidebar')
  @include('layouts.sidebar')
@endsection
@section('content')
@section('title')
  Create Phones
@endsection
<div class="row">
  <div class="col-12 col-md-6 col-lg-6">
    <form action="{{ route('admin.phones.store') }}" method="POST" class="card">
      @csrf
      <div class="card-header">
        <h4>Create Phones</h4>
      </div>
      <div class="card-body">

        <div class="form-group">
          <label>Phone Number (US Format)</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fas fa-phone"></i>
              </div>
            </div>
            <input required value="{{ old('phone') }}" type="text" name="phone" class="form-control phone-number">
          </div>
          @error('phone')
            {{ $message }}
          @enderror
        </div>


        <div class="form-group">
          <label>Select</label>
          <select class="form-control" name="user_id">
            @foreach ($users as $user)
              <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
          </select>
          @error('user_id')
            {{ $message }}
          @enderror
        </div>
        <button class="btn btn-success w-100" type="submit">Create</button>
      </div>
    </form>
  </div>
</div>
@endsection
