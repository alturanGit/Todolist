@extends('main')

@section('title', 'Список задач')

@section('content')
<body>
    <div class="container mt-5">
        <h1 class="text-center">Список задач</h1>
        
        <form action="{{ route('tasks.store') }}" method="POST" class="mt-4">
            @csrf
            <div class="form-group">
                <label for="title">Название задачи</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Описание задачи</label>
                <textarea name="description" id="description" class="form-control" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="due_date">Дата выполнения</label>
                <input type="date" name="due_date" id="due_date" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Добавить задачу</button>
        </form>

        @if(session('status'))
            <div class="alert alert-success mt-4">
                {{ session('status') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger mt-4">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h2 class="mt-5">Текущие задачи</h2>
        <ul class="list-group mt-3">
            @foreach($tasks as $task)
                <li class="list-group-item">
                    <h5>{{ $task->title }} <small class="text-muted">({{ $task->due_date }})</small></h5>
                    <p>{{ $task->description }}</p>
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="float-right">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
</body>
@endsection