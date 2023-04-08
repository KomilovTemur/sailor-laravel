@extends('layouts/crud')

@section('content')
    <h2>Edit teacher's data</h2>
    <ul>
        @if($errors->any())
            @foreach($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        @endif
    </ul>
    <form action="{{ route("teacher.update", $teacher->id) }}" method="post">
        @csrf
        @method('PUT')
        <input class="form-control" placeholder="name" type="text" name="name" value="{{ $teacher->name }}">
        <input class="form-control my-2" placeholder="address" type="text" name="address"
               value="{{ $teacher->address }}">
        <input class="form-control" placeholder="science" type="text" name="science" value="{{ $teacher->science }}">
        <input class="form-control my-2" placeholder="email" type="text" name="email" value="{{ $teacher->email }}">
        <input class="form-control mb-2" placeholder="phone" type="number" name="phone" value="{{ $teacher->phone }}">
        <button type="submit" class="btn btn-success">Submit</button>
        <a href="{{ route("teacher.index") }}" class="btn btn-info">Go Back</a>
    </form>
@endsection
