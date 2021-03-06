<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <script src="{{ URL::asset('js/app.js') }}" defer></script>
</head>
<body>
    <header class="container-fluid">
        <div id="pre_cabecera" class="container-lg d-flex justify-content-between align-items-center">
            <div id="logo">
                <a href="{{ route('home_ruta') }}"><img src="{{ URL::asset('img/fullwat-logo.png') }}" alt="Logotipo de FULLWAT"></a>
            </div>
            <div id="enlaces_cabecera" class="d-flex flex-end align-items-center">
                <ul class="d-flex flex-end m-0 p-0">
                    <li class="d-block m-2"><a class="{{ setActive('quienes_somos_ruta', '') }}" href="{{ route('quienes_somos_ruta') }}">Quienes somos</a></li>
                    <li class="d-block m-2"><a class="{{ setActive('news_ruta', '') }}" href="{{ route('news_ruta') }}">News</a></li>
                    <li class="d-block m-2"><a class="{{ setActive('blog_ruta', '') }}" href="{{ route('blog_ruta') }}">Blog</a></li>
                    <li class="d-block m-2"><a class="{{ setActive('contacto_ruta', '') }}" href="{{ route('contacto_ruta') }}">Contacto</a></li>
                </ul>
                <div id="busqueda" class="m-2" style="background-image: url({{ URL::asset('img/buscar.png') }});">
                    <input type="text" id="input_busqueda" name="input_busqueda" value="">
                </div>
            </div>
            
        </div>
        <div id="cabecera" class="container-fluid bg-dark">
            <nav class="container-lg">
                <ul class="menu">
                    <li class="has-dropdown">
                        <a class="{{ setActive('productos_ruta.*', 'nav') }}" href="{{ route('productos_ruta.index') }}" class="menu-link">Productos
                            <span class="flecha"></span>    
                        </a>

                        @php($finalIndentation = 0)
                        @php($prevIndentation = -1)
                        @foreach ($categories as $categoria)
                            @if ($prevIndentation == -1)
                                <ul class="submenu">
                                    <li class="has-dropdown">
                                        <a href="{{ route('productos_ruta.lista', [$categoria->Code, $categoria->Url]) }}" class="menu-link">{{ $categoria->Description }}
                                            <span class="flecha"></span>
                                        </a>
                                        <ul class="submenu">                                
                            @else
                                @php($difIndentation = $prevIndentation - $categoria->Indentation)

                                @if ($difIndentation > 0)
                                    @for ($j = 0; $j < $difIndentation; $j++)
                                            </ul>
                                        </li>
                                    @endfor  
                                @endif

                                @if ($categoria->Has_Children)
                                    <li class="has-dropdown">
                                        <a href="{{ route('productos_ruta.lista', [$categoria->Code, $categoria->Url]) }}" class="menu-link">{{ $categoria->Description }}
                                            <span class="flecha"></span>
                                        </a>
                                        <ul class="submenu">
                                @else
                                    <li><a href="{{ route('productos_ruta.lista', [$categoria->Code, $categoria->Url]) }}" class="menu-link">{{ $categoria->Description }}</a></li>
                                @endif

                            @endif
                            
                            @php($prevIndentation = $categoria->Indentation)    
                            @php($finalIndentation = $categoria->Indentation)
                            
                        @endforeach

                        @for ($j = 0; $j < $finalIndentation; $j++)
                                </ul>
                            </li>
                        @endfor  

                        </ul>
                    </li>
                    <li><a class="{{ setActive('novedades_ruta', 'nav') }}" href="{{ route('novedades_ruta') }}" class="menu-link">Novedades</a></li>
                    <li><a class="{{ setActive('catalogos_ruta', 'nav') }}" href="{{ route('catalogos_ruta') }}" class="menu-link">Cat??logos</a></li>
                    <li><a class="{{ setActive('outlet_ruta', 'nav') }}" href="{{ route('outlet_ruta') }}" class="menu-link">Zona OUTLET</a></li>
                </ul>
            </nav>
        </div>    
    </header>    

    @yield('main')
    
</body>
</html>