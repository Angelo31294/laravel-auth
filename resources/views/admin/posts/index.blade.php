@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Lista Post</h1>
        @if (session('message'))
          <div class="alert alert-success">
            {{session('message')}}
          </div>
        @endif
      <div class="my-4">
        <a href="{{route('admin.posts.create')}}" class="btn btn-primary">Crea Post</a>
      </div>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Slug</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->slug }}</td>
                    <td>
                      <a href="{{ route('admin.posts.show', $post) }}" class="btn btn-success"><i class="fa-solid fa-eye"></i></a>
                      <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-warning"><i class="fa-solid fa-pen"></i></a>
                      <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection