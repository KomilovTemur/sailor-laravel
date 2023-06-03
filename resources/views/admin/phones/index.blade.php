@extends('layouts.admin')
@section('content')
@section('title')
  Phones
@endsection
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header d-flex justify-content-between">
        <h4>Phones Table</h4>
        <a href="{{ route('phones.create') }}" class="ml-2 btn btn-success">Create phone</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-md">
            <tbody>
              <tr>
                <th>#</th>
                <th>user_id</th>
                <th>Phone</th>
                <th>Ism</th>
                <th>Action</th>
              </tr>
              @foreach ($phones as $phone)
                <tr>
                  <td>{{ $phone->id }}</td>
                  <td>{{ $phone->user_id }}</td>
                  <td>{{ $phone->phone }}</td>
                  <td>{{ $phone->user->name ?? "bog'lanmagan" }}</td>
                  <td><a href="#" class="btn btn-primary">Detail</a></td>
                </tr>
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
