@extends('main')

@section('title', 'Авторизация')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-6">
    <h2 class="text-center">Авторизация</h2>
    
    <form action="{{ route('login') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="email" class="form-label">Электронная почта</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Пароль</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <button type="submit" class="btn btn-primary w-100">Войти</button>
    </form>
    
    <p class="mt-3 text-center">Нет аккаунта? <a href="{{ route('register') }}">Регистрация</a></p>
  </div>
</div>
@endsection