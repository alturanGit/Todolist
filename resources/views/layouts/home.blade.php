@extends('main')

@section('title', 'Главная страница')

@section('content')
  <h1 class="text-center">Добро пожаловать на главную страницу TodoList!</h1>

  <div class="text-center mt-4">
    <a href="{{ route('demo') }}" class="btn btn-primary">Демо версия</a>
  </div>
@endsection