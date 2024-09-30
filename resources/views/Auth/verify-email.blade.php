@extends('main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Подтверждение электронной почты') }}</div>

                <div class="card-body text-center">
                    {{ __('Спасибо за регистрацию! Пожалуйста, подтвердите свою электронную почту, прежде чем продолжить.') }}

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Если вы не получили письмо с подтверждением, вы можете запросить его повторную отправку.') }}

                    <form method="POST" action="#">
                        @csrf
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Отправить новое письмо с подтверждением') }}
                            </button>
                        </div>
                    </form>

                    <div class="mt-4">
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Выйти') }}
                        </a>

                        <form id="logout-form" action="#" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

