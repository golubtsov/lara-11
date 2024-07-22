<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('APP_NAME')}}</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-gray-800">
<div class="space-y-4">
    <header class="container p-3 rounded-lg mt-3">
        <ul class="flex justify-center items-center space-x-4">
            <li class="text-white font-bold">Слова</li>
            <li><a href="{{ route('words.index') }}" class="text-white hover:text-gray-300">Список слов</a></li>
            <li><a href="{{ route('words.create') }}" class="text-white hover:text-gray-300">Добавить новое слово</a>
            </li>
        </ul>
    </header>

    <div class="container rounded-lg">
        @yield('content')
    </div>
</div>
</body>
</html>
