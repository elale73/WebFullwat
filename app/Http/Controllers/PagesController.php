<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ItemCategory;

class PagesController extends Controller
{
    public function home() {
        $categories = obtenerCategorias();
        $contadorCategorias = obtenerNumeroCategorias();

        return view('home', compact('categories', 'contadorCategorias'));
    }

    public function about() {
        $categories = obtenerCategorias();
        $contadorCategorias = obtenerNumeroCategorias();

        return $categories;

        return view('corp.quienes_somos', compact('categories', 'contadorCategorias'));
    }

    public function news() {
        $categories = obtenerCategorias();
        $contadorCategorias = obtenerNumeroCategorias();

        return view('corp.news', compact('categories', 'contadorCategorias'));
    }

    public function blog() {
        $categories = obtenerCategorias();
        $contadorCategorias = obtenerNumeroCategorias();

        return view('corp.blog', compact('categories', 'contadorCategorias'));
    }

    public function contacto() {
        $categories = obtenerCategorias();
        $contadorCategorias = obtenerNumeroCategorias();

        return view('corp.contacto', compact('categories', 'contadorCategorias'));
    }

    public function productos() {
        $categories = obtenerCategorias();
        $contadorCategorias = obtenerNumeroCategorias();

        return view('producto.productos', compact('categories', 'contadorCategorias'));
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
