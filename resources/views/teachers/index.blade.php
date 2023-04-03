@extends('layouts/crud')
@section('content')
    @if($massage = Session::get('success'))
        <div class="alert alert-success">{{ $massage }}</div>
    @endif
    @if($massage = Session::get('error'))
        <div class="alert alert-danger">{{ $massage }}</div>
    @endif
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
                <td class="d-flex gap-2">
                    <a href="{{ route('teacher.show', $teacher->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('teacher.edit', $teacher->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route("teacher.destroy", $teacher->id) }}" method="post">
                        @csrf
                        @method("delete")
                        <button class="btn btn-danger" type="submit">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
