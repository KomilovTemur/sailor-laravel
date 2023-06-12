@extends('layouts.admin')
@section('sidebar')
  @include('layouts.sidebar')
@endsection
@section('content')
@section('title')
  Lessons
@endsection
<div class="row">
  <div class="col-12">
    <div class="card p-2">
      <div class="card-header d-flex justify-content-between">
        <h4>Lessons Table</h4>
        <a href="{{ route('admin.service.create') }}" class="ml-2 btn btn-success">Create Service</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-md">
            <tbody>
              <tr>
                <th>id</th>
                <th>title_uz</th>
                <th>title_ru</th>
                <th>title_en</th>
                <th>name_uz</th>
                <th>name_ru</th>
                <th>name_en</th>
                <th>Action</th>
              </tr>
              @foreach ($lessons as $lesson)
                <tr>
                  <td>{{ $lesson->id }}</td>
                  <td>{{ $lesson->title_uz }}</td>
                  <td>{{ $lesson->title_ru }}</td>
                  <td>{{ $lesson->title_en }}</td>
                  <td>{{ $lesson->name_uz }}</td>
                  <td>{{ $lesson->name_ru }}</td>
                  <td>{{ $lesson->name_en }}</td>
                  <td class="d-grid gap-2">
                    <a href="{{ route('admin.lessons.show', $lesson->id) }}" class="btn btn-success">Show</a>
                    <a href="{{ route('admin.lessons.edit', $lesson->id) }}" class="btn btn-info my-2">Edit</a>
                    <form action="{{ route('admin.lessons.destroy', $lesson->id) }}" method="post" class="d-inline">
                      @csrf
                      @method('delete')
                      <button onclick="return confirm('are you delete?')" type="submit" class="btn btn-danger">Delete
                      </button>
                    </form>
                  </td>
                <tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer text-right">
        <nav class="d-inline-block">
          <ul class="pagination mb-0">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1 <span
                  class="sr-only">(current)</span></a></li>
            <li class="page-item">
              <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>
@endsection
