<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test-if</title>
</head>
<body>
    @if (count($numbers) == 0)
        <h2>Array Vuoto</h2>
    @elseif (count($numbers) == 1)  
        <h2>L'array ha solo un numero</h2>
    @else 
        <h2>L'array contiene i seguenti numeri:</h2>
        
        @foreach ($numbers as $number)
            <ul>
                <li>{{ $number }}</li>
            </ul>
        @endforeach
    @endif
</body>
</html>