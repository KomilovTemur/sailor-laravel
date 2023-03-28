<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css">
</head>

<body>

  <div class="container my-5">
    <h2>Create Teacher</h2>
    <form action="{{ route('store') }}" method="POST">
      @csrf
      <input placeholder="name" type="text" class="form-control" name="name" />
      <input placeholder="address" type="text" class="form-control my-2" name="address" />
      <input placeholder="science" type="text" class="form-control" name="science" />
      <input placeholder="email" type="email" class="form-control my-2" name="email" />
      <input placeholder="phone" type="number" class="form-control" name="phone" />
      <button class="btn btn-success my-2" type="submit">Submit</button>
    </form>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">name</th>
          <th scope="col">Address</th>
          <th scope="col">Science</th>
          <th scope="col">Email</th>
          <th scope="col">Phone</th>
          <th scope="col">Status</th>
          <th scope="col">actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($all as $one)
          <tr>
            <th scope="row">{{ $one->id }}</th>
            <td>{{ $one->name }}</td>
            <td>{{ $one->address }}</td>
            <td>{{ $one->science }}</td>
            <td>{{ $one->email }}</td>
            <td>{{ $one->phone }}</td>
            <td>{{ $one->status }}</td>
            <td>
              <a href="/edit/{{ $one->id }}" class="btn btn-success">
                Edit
              </a>
              <a href="/delete/{{ $one->id }}" class="btn btn-danger">
                Delete
              </a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>

</html>
