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
            <form action="{{route('admin.posts.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="inserisci il titolo">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Titolo</label>
                    <textarea class="form-control" id="content" name="content" rows="10" placeholder="inserisci il contenuto"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Crea</button>
            </form>
        </div>
    </div>
</div>
@endsection