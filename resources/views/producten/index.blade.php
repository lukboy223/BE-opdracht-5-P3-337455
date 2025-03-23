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
    <form action="{{route('producten.index')}}" method="post" class="w-3/4 m-auto">
        @csrf
        <label for="start_date">Start datum</label>
        <input type="date" name="start_date" id="start_date" class="w-full p-2 border border-gray-300 mb-2">
        <label for="end_date">Eind datum</label>
        <input type="date" name="end_date" id="end_date" class="w-full p-2 border border-gray-300 mb-2">
        <button type="submit" class="w-full p-2 bg-blue-500 text-white">Zoeken</button>
        
        
    </form>
    @if (session('error'))
        <p class="m-auto w-3/4 bg-red-700 text-white">{{session('error')}}</p>
    @endif
    <table class="w-3/4 bg-white dark:bg-gray-800 m-auto mt-5 mb-5">
        <thead class="bg-gray-200">
            <tr>
                <th class="px-4 py-2 border-b-2 border-r border-gray-300 text-left leading-4  tracking-wider"
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
            @if(is_null($products))
                <tr class="bg-white">  
                    <td colspan="5">Geen producten gevonden</td>
                </tr>
                @else
            @foreach ($products as $product)
                <tr class="bg-white">
                    <td class="px-4 py-2 border-b border-gray-300 border-r">{{ $product->Leverancier }}</td>
                    <td class="px-4 py-2 border-b border-gray-300 border-r">{{ $product->contact_persoon }}</td>
                    <td class="px-4 py-2 border-b border-gray-300 border-r">{{ $product->Naam }}</td>
                    <td class="px-4 py-2 border-b border-gray-300 border-r">{{ $product->Aantal }}</td>
                    <td class="px-4 py-2 border-b border-gray-300 border-r"><a href="">?</a></td>
                </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</body>
</html>