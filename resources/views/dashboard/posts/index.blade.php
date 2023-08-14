@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Posts</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
  {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-8">
  <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create New Post</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
            
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->category->name }}</td>
            <td>
                <a href="posts/{{ $post->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline" onclick="return confirm('Apakah anda yakin untuk menghapus postingan ini?')">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0">
                    <span data-feather="x-circle"></span>
                  </button>
                </form>
            </td>
            <td>
              @if ($post->is_publish)
              <form method="POST" action="/dashboard/publish/{{ $post->slug }}" class="d-inline">
                @csrf
                @method('PATCH')
                <button type="submit" class="badge bg-success text-decoration-none border-0" onclick="return confirm('Apakah anda yakin untuk mengubah postingan ini menjadi not publish?')"><span data-feather="check-square"></span> Published</button>
              </form>
              @else
              <form method="POST" action="/dashboard/publish/{{ $post->slug }}" class="d-inline">
                @csrf
                @method('PATCH')
                <button type="submit" class="badge bg-secondary text-decoration-none border-0" onclick="return confirm('Apakah anda yakin untuk publish postingan ini?')"><span data-feather="x-square"></span> Not Published</button>
              </form>
              @endif
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection