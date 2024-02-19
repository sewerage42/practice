@extends('layouts.app')
@section('title')
    Welcome
@endsection
@section('content')
    @include('partials.header')
    {{session('success') ?? NULL}}
    <div class="container m-3">
        Home Page
    </div>
    <div class="container m-3">
        <a href="{{route('posts.index')}}">Посты</a>
    </div>
@endsection
