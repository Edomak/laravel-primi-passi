<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=+, initial-scale=1.0">
        <title>Music</title>
    </head>
    <body>
        <h1>Music</h1>
        <ul>
            @foreach ($genres as $genre)
                <li> 
                    @if ($loop->last)
                        <strong>
                    @endif
                    {{ $genre }} 
                    @if ($loop->last)
                        </strong>
                    @endif
                </li>
            @endforeach
        </ul>
    
    </body>
</html>