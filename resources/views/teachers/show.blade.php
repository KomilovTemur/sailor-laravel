@extends('layouts/crud')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Science</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">{{ $teacher->id }}</th>
            <td>{{ $teacher->name }}</td>
            <td>{{ $teacher->address }}</td>
            <td>{{ $teacher->email }}</td>
            <td>{{ $teacher->phone }}</td>
            <td>{{ $teacher->science }}</td>
        </tr>
        </tbody>
    </table>
    <a href="{{ route("teacher.index") }}" class="btn btn-success">Go Back</a>
@endsection
