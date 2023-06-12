@extends('layouts.admin')
@section('sidebar')
  @include('layouts.sidebar')
@endsection
@section('content')
@section('title')
  Services
@endsection
<div class="row">
  <div class="col-12">
    <div class="card p-2">
      <div class="card-header d-flex justify-content-between">
        <h4>Services Table</h4>
        <a href="{{ route('admin.service.create') }}" class="ml-2 btn btn-success">Create Service</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-md">
            <tbody>
              <tr>
                <th>id</th>
                <th>
                  <img src="{{ asset('assets/img/flags/uzbekistan.png') }}" alt="uzb"
                    style="width: 25px; margin-right: 10px" />title_uz
                </th>
                <th>description_uz</th>
                <th><img src="{{ asset('assets/img/flags/russia.png') }}" alt="rus"
                    style="width: 25px; margin-right: 10px" />title_ru</th>
                <th>description_ru</th>
                <th><img src="{{ asset('assets/img/flags/united-kingdom.png') }}" alt="eng"
                    style="width: 25px; margin-right: 10px" />title_en</th>
                <th>description_en</th>
                <th>icon</th>
                <th>Action</th>
              </tr>
              @foreach ($services as $service)
                <tr>
                  <td>{{ $service->id }}</td>
                  <td>{{ $service->title_uz }}</td>
                  <td>{{ $service->description_uz }}</td>
                  <td>{{ $service->title_ru }}</td>
                  <td>{{ $service->description_ru }}</td>
                  <td>{{ $service->title_en }}</td>
                  <td>{{ $service->description_en }}</td>
                  <td>{{ $service->icon }}</td>
                  <td class="d-grid gap-2">
                    <a href="{{ route('admin.service.show', $service->id) }}" class="btn btn-success">Show</a>
                    <a href="{{ route('admin.service.edit', $service->id) }}" class="btn btn-info my-2">Edit</a>
                    <form action="{{ route('admin.service.destroy', $service->id) }}" method="post" class="d-inline">
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
