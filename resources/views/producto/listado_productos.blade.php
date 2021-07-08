@extends('layout')

@section('title', $categoria->Description)

@section('main')

    <h1>{{ $categoria->Description }}</h1>

    <table>
        <tr>
            <td>Referencia</td>
            <td>Descripción</td>
            <td>Código EAN</td>
            <td>Marca</td>
            <td>Categoría</td>
        </tr>
        @foreach ($productos as $producto)
            <tr>
                <td>{{ $producto->No_ }}</td>
                <td>{{ $producto->Description }} {{ $producto->Description_2 }}</td>
                <td>{{ $producto->EAN13 }}</td>
                <td>{{ $producto->Marca }}</td>
                <td>{{ $producto->Item_Category_Code }}</td>
            </tr>
        @endforeach
    </table>
    
@endsection