@extends('layouts.app')
@section('title')
    Posts
@endsection
@section('content')
    @include('partials.header')
        <div class="container m-3">
            title: {{$post->title}} <br>
            description: {{$post->description}} <br>
            preview: {{$post->preview}} <br>
            thumbnail: <img src="/storage/posts/{{$post->thumbnail}}" alt=""><br>
        </div>
@endsection
