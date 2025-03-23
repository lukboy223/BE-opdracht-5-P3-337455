<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Jamin</h1>
    @if (session('error'))
        <p class="m-auto w-3/4 bg-red-700 text-white">{{session('error')}}</p>
    @endif
    <ul>
        <li><a href="{{route('producten.index')}}">Overzicht geleverde producten</a></li>
    </ul>
</body>
</html>