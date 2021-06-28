<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ItemCategory;

function setActive($nombreRuta, $clase) {
    return request()->routeIs($nombreRuta) ? 'active' . $clase : '';
}

function obtenerCategorias() {
    $categories = DB::table('Item_Category')
                ->orderBy('Presentation_Order')
                ->get();
    return $categories;
}

function obtenerNumeroCategorias() {
    $contadorCategorias = obtenerCategorias()->count();
    return $contadorCategorias;
}

?>