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
    <h1 class="w-full text-center text-5xl p-4">Overzicht producten per periode</h1>
    <ul class="w-3/4 m-auto mt-10">
        <li class="m-2">
            <a href="{{route('home')}}">Home</a>
        </li>
    </ul>

    <form action="{{route('producten.indexFilter')}}" method="post" class="w-3/4 m-auto">
        @csrf
        <label for="dateFrom">Start datum</label>
        <input type="date" name="dateFrom" id="dateFrom" class="w-full p-2 border border-gray-300 mb-2">
        <label for="dateTo">Eind datum</label>
        <input type="date" name="dateTo" id="dateTo" class="w-full p-2 border border-gray-300 mb-2">
        <button type="submit" class="w-full p-2 bg-blue-500 text-white">Zoeken</button>
    </form>

    @if (session('error'))
        <p class="m-auto w-3/4 bg-red-700 text-white">{{session('error')}}</p>
    @endif
    <table class="w-3/4 bg-white dark:bg-gray-800 m-auto mt-5 mb-5">
        <thead class="bg-gray-200">
            <tr>
                <th class="px-4 py-2 border-b-2 border-x border-gray-300 text-left leading-4  tracking-wider"
                >Naam leverancier</th>
                <th class="px-4 py-2 border-b-2 border-r border-gray-300 text-left leading-4  tracking-wider">
                Contact persoon</th>
                <th class="px-4 py-2 border-b-2 border-r border-gray-300 text-left leading-4  tracking-wider">
                    Product naam</th>
                <th class="px-4 py-2 border-b-2 border-r border-gray-300 text-left leading-4  tracking-wider">
                    Aantal producten</th>
                <th class="px-4 py-2 border-b-2 border-r border-gray-300 text-left leading-4  tracking-wider">
                    Specificatie</th>
            </tr>
        </thead>
        <tbody>
            @if(collect($products)->isEmpty())
                <tr class="bg-red-500 text-center text-white">  
                    <td colspan="5">Er zijn geen leveringen geweest van producten in deze periode</td>
                </tr>
                @else
            @foreach ($products as $product)
                <tr class="bg-white">
                    <td class="px-4 py-2 border-b border-gray-300 border-x">{{ $product->Leverancier }}</td>
                    <td class="px-4 py-2 border-b border-gray-300 border-r">{{ $product->contact_persoon }}</td>
                    <td class="px-4 py-2 border-b border-gray-300 border-r">{{ $product->Naam }}</td>
                    <td class="px-4 py-2 border-b border-gray-300 border-r">{{ $product->Aantal }}</td>
                    <td class="px-4 py-2 border-b border-gray-300 border-r"><a href="{{route('producten.view' , $product->Naam)}}">?</a></td>
                </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</body>
</html>