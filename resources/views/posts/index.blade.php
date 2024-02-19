@extends('layouts.app')
@section('title')
    Posts
@endsection
@section('content')
    @include('partials.header')

    <div class="container overflow-hidden text-center">
        <div class="row gy-5">
            @foreach($posts as $post)
                <div class="col-6">
                    <div class="p-3">
                        title: {{$post->title}} <br>
                        description: {{$post->description}} <br>
                        preview: {{$post->preview}} <br>
                        thumbnail: <a href="{{route('posts.show', $post->id)}}"><img
                                src="storage/posts/{{$post->thumbnail}}"
                                alt=""></a><br>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="my-nav">{{$posts->links()}}/div>
        <style>
            .my-nav svg {
                width: 20px;
            }
        </style>
@endsection
