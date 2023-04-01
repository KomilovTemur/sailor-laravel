@extends('layouts/crud')
@section('content')
    <div class="d-flex align-items-center justify-content-between py-5">
        <h2>Teachers</h2>
        <div class="col-lg-2">
            <a href="{{ route('teacher.create') }}" class="btn btn-primary">Add Teacher</a>
        </div>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Science</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($teachers as $teacher)
            <tr>
                <th scope="row">{{ $teacher->id }}</th>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->address }}</td>
                <td>{{ $teacher->email }}</td>
                <td>{{ $teacher->phone }}</td>
                <td>{{ $teacher->science }}</td>
                <td>
                    <a href="#" class="btn btn-info">View</a>
                    <a href="#" class="btn btn-warning">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
