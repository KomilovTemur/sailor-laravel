@extends('layouts.admin')
@section('sidebar')
  @include('layouts.sidebar')
@endsection
@section('content')
@section('title')
  Create Service
@endsection
<div class="row">
  <div class="col-12 col-md-6 col-lg-6">
    <form action="{{ route('admin.service.store') }}" method="POST" class="card">
      @csrf
      <div class="card-header">
        <h4>Create Service</h4>
      </div>
      <div class="card-body">

        <div class="d-flex justify-content-center">
          <img src="{{ asset('assets/img/flags/uzbekistan.png') }}" alt="uzb" style="width: 50px" />
        </div>

        <div class="form-group">
          <label>Title_uz</label>
          <div class="input-group">
            <input required value="{{ old('title_uz') }}" type="text" name="title_uz" class="form-control">
          </div>
          @error('title_uz')
            {{ $message }}
          @enderror
        </div>
        <div class="form-group">
          <label>Description_uz</label>
          <div class="input-group">
            <input required value="{{ old('description_uz') }}" type="text" name="description_uz"
              class="form-control">
          </div>
          @error('description_uz')
            {{ $message }}
          @enderror
        </div>

        <div class="d-flex justify-content-center">
          <img src="{{ asset('assets/img/flags/russia.png') }}" alt="uzb" style="width: 50px" />
        </div>

        <div class="form-group">
          <label>Title_ru</label>
          <div class="input-group">
            <input required value="{{ old('title_ru') }}" type="text" name="title_ru" class="form-control">
          </div>
          @error('title_ru')
            {{ $message }}
          @enderror
        </div>
        <div class="form-group">
          <label>Description_ru</label>
          <div class="input-group">
            <input required value="{{ old('description_ru') }}" type="text" name="description_ru"
              class="form-control">
          </div>
          @error('description_ru')
            {{ $message }}
          @enderror
        </div>

        <div class="d-flex justify-content-center">
          <img src="{{ asset('assets/img/flags/united-kingdom.png') }}" alt="uzb" style="width: 50px" />
        </div>

        <div class="form-group">
          <label>Title_en</label>
          <div class="input-group">
            <input required value="{{ old('title_en') }}" type="text" name="title_en" class="form-control">
          </div>
          @error('title_en')
            {{ $message }}
          @enderror
        </div>
        <div class="form-group">
          <label>Description_en</label>
          <div class="input-group">
            <input required value="{{ old('description_en') }}" type="text" name="description_en"
              class="form-control">
          </div>
          @error('description_en')
            {{ $message }}
          @enderror
        </div>


        {{-- Icon --}}
        <div class="form-group">
          <label>Icon</label>
          <div class="input-group">
            <input required value="{{ old('icon') }}" type="text" name="icon" class="form-control">
          </div>
          @error('icon')
            {{ $message }}
          @enderror
        </div>
        {{-- end Icon --}}
        <button class="btn btn-success w-100" type="submit">Create</button>
      </div>
    </form>
  </div>
</div>
@endsection
