<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('tittle')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <script src="js/app.js" defer></script>
</head>
<body>
    <header class="container-fluid">
        <div id="pre_cabecera" class="container-lg d-flex justify-content-between align-items-center">
            <div id="logo">
                <a href="{{ route('home_ruta') }}"><img src="img/fullwat-logo.png" alt="Logotipo de FULLWAT"></a>
            </div>
            <div id="enlaces_cabecera" class="d-flex flex-end align-items-center">
                <ul class="d-flex flex-end m-0 p-0">
                    <li class="d-block m-2"><a href="{{ route('quienes_somos') }}">Quienes somos</a></li>
                    <li class="d-block m-2"><a href="{{ route('news') }}">News</a></li>
                    <li class="d-block m-2"><a href="{{ route('blog') }}">Blog</a></li>
                    <li class="d-block m-2"><a href="{{ route('contacto') }}">Contacto</a></li>
                </ul>
                <div id="busqueda" class="m-2" style="background-image: url('img/buscar.png');">
                    <input type="text" id="input_busqueda" name="input_busqueda" value="">
                </div>
            </div>
            
        </div>
        <div id="cabecera" class="container-fluid bg-dark">
            <nav class="container-lg">
                <ul class="d-flex flex-end m-0 p-0">
                    <span id="enlace_productos" class="d-block"><li class="d-block m-3">Productos</li></span>
                    <div id="enlaces">
                        <ul>
                            <li class="enlace">{{ $categories[0]->Code }} - {{ $categories[0]->Description }}</li>                
                            @for ($i = 1; $i < $contadorCategorias; $i++)
                                @if ($categories[$i]->Indentation == $categories[$i-1]->Indentation)
                                    <li class="enlace">{{ $categories[$i]->Code }} - {{ $categories[$i]->Description }}</li>                
                                @else
                                    @php($difIndentation = $categories[$i-1]->Indentation - $categories[$i]->Indentation)
                                    @if ($difIndentation > 0)
                                        @for ($j = 0; $j < $difIndentation; $j++)
                                            </ul>
                                        @endfor                            
                                    @else
                                        <ul>
                                    @endif
                                    <li class="enlace">{{ $categories[$i]->Code }} - {{ $categories[$i]->Description }}</li>
                                @endif
                            @endfor
                        </ul>
                    </div>    
                    <a href="" class="d-block"><li class="d-block m-3" >Novedades</li></a>
                    <a href="" class="d-block"><li class="d-block m-3" >Catálogos</li></a>
                    <a href="" class="d-block"><li class="d-block m-3" >Zona OUTLET</li></a>
                </ul>    
            </nav>
        </div>    
    </header>    

    @yield('main')
    
</body>
</html>