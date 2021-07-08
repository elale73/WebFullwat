<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ItemCategory;

function setActive($nombreRuta, $clase) {
    return request()->routeIs($nombreRuta) ? 'active' . $clase : '';
}

function obtenerCategorias() {
    $categories = DB::table('Item_Category')
                ->where('Visible_Fullwat', 1)
                ->orderBy('Presentation_Order')
                ->get();
    return $categories;
}

function obtenerNumeroCategorias() {
    $contadorCategorias = obtenerCategorias()->count();
    return $contadorCategorias;
}

function obtenerUnaCategoria($code) {
    $categoria = DB::table('Item_Category')
                ->where('Code', $code)
                ->get();
    return $categoria;
}

function obtenerProductos($code) {
    $productos = DB::table('Item')
                ->where('Item_Category_Code', $code)
                ->where('Marca', 'FULLWAT')
                ->orderBy('No_')
                ->get();
    return $productos;
}

function cadenaUrl($url) {
    $url = strtolower($url);
    $url = str_replace(' ', '-', $url);
    $url = str_replace(',', '-', $url);
    $url = str_replace('/', '-', $url);
    $url = str_replace('á', 'a', $url);
    $url = str_replace('é', 'e', $url);
    $url = str_replace('í', 'i', $url);
    $url = str_replace('ó', 'o', $url);
    $url = str_replace('ú', 'u', $url);
    $url = str_replace('ñ', 'n', $url);

    $url = str_replace('--', '-', $url);

    return $url;
}

function guardarUrl($code, $url) {
    DB::table('Item_Category')
        ->where('Code', $code)
        ->update(['Url' => $url]);
}

?>