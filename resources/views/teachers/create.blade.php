@extends('layouts/crud')
@section('content')
    <h2>Create Teacher</h2>
    <form action="{{ route('teacher.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <input value="{{ old('name') }}" placeholder="name" type="text" class="form-control" name="name"/>
        @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif
        <input value="{{ old('address') }}" placeholder="address" type="text" class="form-control my-2" name="address"/>
        @if ($errors->has('address'))
            <span class="text-danger">{{ $errors->first('address') }}</span>
        @endif
        <input value="{{ old('science') }}" placeholder="science" type="text" class="form-control" name="science"/>
        @if ($errors->has('science'))
            <span class="text-danger">{{ $errors->first('science') }}</span>
        @endif
        <input value="{{ old('email') }}" placeholder="email" type="email" class="form-control my-2" name="email"/>
        @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
        <input value="{{ old('phone') }}" placeholder="phone" type="number" class="form-control" name="phone"/>
        @if ($errors->has('phone'))
            <span class="text-danger">{{ $errors->first('phone') }}</span>
        @endif
        <input value="{{ old('image') }}" placeholder="image" type="file" class="form-control mt-2" name="image"/>
        @if ($errors->has('image'))
            <span class="text-danger">{{ $errors->first('image') }}</span>
        @endif
        <div class="d-flex gap-2 align-items-center justify-content-center">
            <button class="btn btn-success my-2 w-50" type="submit">Submit</button>
            <a href="{{ route('teacher.index') }}" class="btn btn-primary w-50">Back to home</a>
        </div>
    </form>
@endsection
