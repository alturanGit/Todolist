{{-- <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список задач</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Добро пожаловать, {{ Auth::user()->name }}!</h1>

        <form method="POST" action="{{ route('tasks.store') }}" class="mb-4">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <input type="text" name="task" class="form-control" placeholder="Введите название задачи" required>
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary">Добавить задачу</button>
                </div>
            </div>
        </form>

        <h3>Ваши задачи:</h3>
        <ul class="list-group">
            @foreach ($tasks as $task)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $task->name }}
                    <form method="POST" action="{{ route('tasks.destroy', $task->id) }}" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html> --}}

@extends('main')

@section('title', 'Главная страница')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Демо версия</h1>
        <form method="POST" action="#" class="mb-4">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <input type="text" name="task" class="form-control" placeholder="Введите название задачи" required>
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary">Добавить задачу</button>
                </div>
            </div>
        </form>
        <h3>Ваши задачи:</h3>
        <ul class="list-group">
           {{-- @foreach ($tasks as $task)--}}
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{-- $task->name --}}
                    <form method="POST" action="#" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
                    </form>
                </li>
           {{-- @endforeach --}}
        </ul>
    </div>
@endsection