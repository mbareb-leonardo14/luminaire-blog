@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-md-nowrap align-items-center border-bottom mb-3 flex-wrap pt-3 pb-2">
    <h1 class="h2">My Posts</h1>
  </div>

  @if (session()->has('lolos'))
    <div class="alert alert-success alert-dismissible fade show col-lg-6" role="alert">
      <strong>Holy guacamole</strong> {{ session('lolos') }}.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  @if (session()->has('failed'))
    <div class="alert alert-danger alert-dismissible fade show col-lg-6" role="alert">
      <strong>Holy guacamole</strong> {{ session('failed') }}.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <div class="table-responsive col-lg-6">
    <a href="/dashboard/categories/create" class="btn btn-primary"><i class="bi bi-plus"></i>Add Category</a>
    <table class="table-striped table-sm my-3 table">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Category Name</th>
          <th scope="col">Act</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $category->name }}</td>
            <td>
              <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-dark"><i
                  class="bi bi-eye-fill"></i></a>
              <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning"><i
                  class="bi bi-pencil-square"></i></a>
              <form action="/dashboard/categories/{{ $category->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('r u sure?')">
                  <i class="bi bi-trash-fill"></i>
                </button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
