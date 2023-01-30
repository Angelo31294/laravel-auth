@extends('layout.admin')

@section('content')
<div class="container">
    <div class="py-4">
        <h1>Crea Post</h1>
 
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
            <form action="{{route('admin.posts.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="inserisci il titolo" value="{{ old('title')}}">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="content" name="content" rows="10" placeholder="inserisci il contenuto">{{ old('content')}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="cover_image" class="form-label">Immagine</label>
                    <input type="file" class="form-control" id="cover_image" name="cover_image" placeholder="cerca un immagine sul tuo dispositivo" value="{{ old('cover_image')}}">
                </div>
                <button type="submit" class="btn btn-primary">Crea</button>
            </form>
        </div>
    </div>
</div>
@endsection