<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ItemCategory;
use App\Models\Item;

class ProductoController extends Controller {

    public function productos() {
        $categories = obtenerCategorias();
        $contadorCategorias = obtenerNumeroCategorias();

        return view('producto.productos', compact('categories', 'contadorCategorias'));
    }

    public function listaProductos ($code, $url) {

        $categories = obtenerCategorias();
        $contadorCategorias = obtenerNumeroCategorias();

        $categoria = ItemCategory::findOrFail($code);

        $productos = null;
        $encontradoIndentacion = null;
        foreach ($categories as $category) {
            if (is_null($encontradoIndentacion)) {
                if ($category->Code == $code) {
                    $encontradoIndentacion = $category->Indentation;
                    if (!$category->Has_Children) {
                        $productos = obtenerProductos($code);
                        break;
                    }
                }        
            } else {
                if ($category->Indentation > $encontradoIndentacion) {
                    if (!$category->Has_Children) {
                        $masProductos = obtenerProductos($category->Code);
                        if(is_null($productos)) {
                            $productos = $masProductos;
                        } else {
                            $tempProductos = $productos->merge($masProductos);
                            $productos = $tempProductos;
                        }
                    }
                } else {
                    break;
                }
            }
        }

        return view('producto.listado_productos', compact('categories', 'contadorCategorias', 'categoria', 'productos'));
    }

    public function novedades() {
        $categories = obtenerCategorias();
        $contadorCategorias = obtenerNumeroCategorias();

        return view('producto.novedades', compact('categories', 'contadorCategorias'));
    }

    public function catalogos() {
        $categories = obtenerCategorias();
        $contadorCategorias = obtenerNumeroCategorias();

        return view('producto.catalogos', compact('categories', 'contadorCategorias'));
    }

    public function outlet() {
        $categories = obtenerCategorias();
        $contadorCategorias = obtenerNumeroCategorias();

        return view('producto.outlet', compact('categories', 'contadorCategorias'));
    }
}
