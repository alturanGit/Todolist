@extends('main')

@section('title', 'Регистрация')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-6">
    <h2 class="text-center">Регистрация</h2>
    
    <form action="{{ route('register') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Имя</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Электронная почта</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Пароль</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <div class="mb-3">
        <label for="password_confirmation" class="form-label">Подтверждение пароля</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
      </div>
      <button type="submit" class="btn btn-primary w-100">Зарегистрироваться</button>
    </form>
    
    <p class="mt-3 text-center">Уже есть аккаунт? <a href="{{ route('login') }}">Вход</a></p>
  </div>
</div>
@endsection