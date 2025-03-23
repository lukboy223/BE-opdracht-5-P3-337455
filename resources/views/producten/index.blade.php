<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Overzicht producten per periode</h1>
    @if (session('error'))
        <p class="m-auto w-3/4 bg-red-700 text-white">{{session('error')}}</p>
    @endif
    <table>
        <thead>
            <tr>
                <th>Naam leverancier</th>
                <th>Contact persoon</th>
                <th>Product naam</th>
                <th>Aantal producten</th>
                <th>Specificatie</th>
            </tr>
        </thead>
        <tbody>
            @if($products->isEmpty())
                <tr>
                    <td colspan="5">Geen producten gevonden</td>
                </tr>
                @else
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->Leverancier }}</td>
                    <td>{{ $product->contact_persoon }}</td>
                    <td>{{ $product->Naam }}</td>
                    <td>{{ $product->Id }}</td>
                </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</body>
</html>