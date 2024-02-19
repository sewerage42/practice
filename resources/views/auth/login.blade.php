@extends('layouts.app')
@section('title')
    Login
@endsection
@section('content')
    @include('partials.header')
    <form action="{{route('login_process')}}" method="POST">
        @csrf
    <div class="mb-3">
        @error('email')
        {{$message}}
        @enderror
        <label for="email" class="form-label">почта/логин</label>
        <input name="email" type="email" class="form-control" id="email">
    </div>
    <div class="mb-3">
        @error('password')
        {{$message}}
        @enderror
        <label for="password" class="form-label">пароль</label>
        <input name="password" type="password" class="form-control" id="password">
    </div>
    <button type="submit" class="btn btn-success">Войти в аккаунт</button>
    </form>
@endsection
