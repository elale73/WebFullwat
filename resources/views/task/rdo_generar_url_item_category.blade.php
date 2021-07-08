<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultado generar URL's en Item Category</title>
</head>
<body>
    <h1>Resultado generar URL's en Item Category</h1>
    <ul>
        @foreach ($categorias as $categoria)
            <li>
                {{ $categoria->Code }} // {{ $categoria->Url }}
            </li>
        @endforeach
    </ul>
        
</body>
</html>