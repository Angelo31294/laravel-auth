@extends('layout.admin')

@section('content')
<div class="container">
    <div class="py-4">
        <h1>Modifica: {{$post->title}}</h1>
 
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mt-4">
            <form action="{{route('admin.posts.update', $post)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="inserisci il titolo" value="{{ old('title', $post->title)}}">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Titolo</label>
                    <textarea class="form-control" id="content" name="content" rows="10" placeholder="inserisci il contenuto">{{ old('content', $post->content)}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Crea</button>
            </form>
        </div>
    </div>
</div>
@endsection