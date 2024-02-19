@extends('layouts.app')
@section('title')
    Register
@endsection
@section('content')
    @include('partials.header')
    <form action="{{'register_process'}}" method="POST">
        @csrf
        @error('name')
        {{$message}}
        @enderror
        <div class="mb-3">
            <label for="name" class="form-label">имя</label>
            <input name="name" class="form-control" id="name">
        </div>
        @error('email')
        {{$message}}
        @enderror
    <div class="mb-3">
        <label for="email" class="form-label">почта/логин</label>
        <input name="email" class="form-control" id="email">
    </div>
        @error('password')
        {{$message}}
        @enderror
    <div class="mb-3">
        <label for="password" class="form-label">пароль</label>
        <input name="password" type="password" class="form-control" id="password">
    </div>
        @error('password_confirmation')
        {{$message}}
        @enderror
    <div class="mb-3">
        <label for="password_confirmation" class="form-label">подтвердите пароль</label>
        <input name="password_confirmation" type="password" class="form-control" id="password_confirmation">
    </div>
        <button type="submit" class="btn btn-success">Зарегистрироваться</button>
    </form>
@endsection
