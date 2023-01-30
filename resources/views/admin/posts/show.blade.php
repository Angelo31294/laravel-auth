@extends('layout.admin')

@section('content')
<div class="container">
    <div class="py-4">
        <h1>{{$post->title}}</h1>
        <div class="mt-4">
            <div class="text-center">
                @if ($post->cover_image)
                <img class="w-25" src="{{asset("storage/$post->cover_image")}}" alt="{{$post->title}}">    
                @endif
            </div>
            {{$post->content}}
        </div>
    </div>
</div>
@endsection