@extends('main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Подтверждение электронной почты') }}</div>

                <div class="card-body text-center">
                    {{ __('Успешно!') }}

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="GET" action="{{ route('verification.send') }}">
                        @csrf
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Начать') }}
                            </button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

