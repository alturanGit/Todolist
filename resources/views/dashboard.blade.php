@extends('main')

@section('title', 'dashboard')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добро пожаловать на Dashboard</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
    <div class="container">
        <h1>Добро пожаловать!</h1>
        <p>Поздравляем с успешной регистрацией. Мы рады вас видеть.</p>
        <a href="{{ route('task.index') }}" class="start-button">Начать</a> 
    </div>
</body>
@endsection