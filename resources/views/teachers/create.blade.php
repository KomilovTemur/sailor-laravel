@extends('layouts/crud')
@section('content')
    <h2>Create Teacher</h2>
    <form action="{{ route('teacher.store') }}" method="POST">
        @csrf
        @method('POST')
        <input placeholder="name" type="text" class="form-control" name="name"/>
        <input placeholder="address" type="text" class="form-control my-2" name="address"/>
        <input placeholder="science" type="text" class="form-control" name="science"/>
        <input placeholder="email" type="email" class="form-control my-2" name="email"/>
        <input placeholder="phone" type="number" class="form-control" name="phone"/>
        <button class="btn btn-success my-2" type="submit">Submit</button>
    </form>
@endsection
