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

    @if (session('error'))
    <p class="m-auto w-3/4 bg-red-700 text-white">{{session('error')}}</p>
    @endif
    <ul class="w-3/4 m-auto mt-10">
        <li>Naam {{$data[0]->Naam}}</li>
        <li>Start datum {{$data[0]->Eerste_levering}}</li>
        <li>Eind datum {{$data[0]->Laatste_levering}}</li>
        <li>Allergenen {{$data[0]->Allergeen}}</li>
    </ul>
    <table class="w-3/4 bg-white dark:bg-gray-800 m-auto mt-5 mb-5">
        <thead class="bg-gray-200">
            <tr>
                <th class="px-4 py-2 border-b-2 border-x border-gray-300 text-left leading-4  tracking-wider">
                    Datum levering</th>
                <th class="px-4 py-2 border-b-2 border-r border-gray-300 text-left leading-4  tracking-wider">
                    Aantal</th>
                
            </tr>
        </thead>
        <tbody>
            @if(collect($data)->isEmpty())
            <tr class="bg-red-500 text-center text-white">
                <td colspan="5">Er zijn geen leveringen geweest</td>
            </tr>
            @else
            @foreach ($data as $item)
            <tr class="bg-white">
                <td class="px-4 py-2 border-b border-gray-300 border-x">{{ $item->Levering_Datum }}</td>
                <td class="px-4 py-2 border-b border-gray-300 border-r">{{ $item->Aantal_per_Datum }}</td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
    <a href="{{route('producten.index')}}" class="m-auto w-3/4">terug</a>
</body>

</html>