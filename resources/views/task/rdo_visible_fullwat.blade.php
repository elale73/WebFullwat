<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultado actualización de Visible Fullwat</title>
</head>
<body>
    <h1>Resultado actualización de Visible Fullwat</h1>

    <ul>
    @foreach ($categories as $category)
        <li>
            @for ($i = 0; $i < $category->Indentation; $i++)
                -----     
            @endfor
            {{ $category->Indentation }} // {{ $category->Description }}
        </li>
    @endforeach
    </ul>

</body>
</html>