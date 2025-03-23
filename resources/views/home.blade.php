<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1 class="m-auto text-5xl w-full text-center p-4">Jamin</h1>
    @if (session('error'))
        <p class="m-auto w-3/4 bg-red-700 text-white p-2 text-center">{{session('error')}}</p>
    @endif

    <ul>
        <li class="m-2">
            <a href="{{route('producten.index')}}">Overzicht geleverde producten</a>
        </li>
    </ul>
</body>
</html>