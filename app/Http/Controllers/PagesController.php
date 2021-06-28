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

        return view('quienes_somos', compact('categories', 'contadorCategorias'));
    }

    public function news() {
        $categories = obtenerCategorias();
        $contadorCategorias = obtenerNumeroCategorias();

        return view('news', compact('categories', 'contadorCategorias'));
    }

    public function blog() {
        $categories = obtenerCategorias();
        $contadorCategorias = obtenerNumeroCategorias();

        return view('blog', compact('categories', 'contadorCategorias'));
    }

    public function contacto() {
        $categories = obtenerCategorias();
        $contadorCategorias = obtenerNumeroCategorias();

        return view('contacto', compact('categories', 'contadorCategorias'));
    }

    public function productos() {
        $categories = obtenerCategorias();
        $contadorCategorias = obtenerNumeroCategorias();

        return view('productos', compact('categories', 'contadorCategorias'));
    }

    public function novedades() {
        $categories = obtenerCategorias();
        $contadorCategorias = obtenerNumeroCategorias();

        return view('novedades', compact('categories', 'contadorCategorias'));
    }

    public function catalogos() {
        $categories = obtenerCategorias();
        $contadorCategorias = obtenerNumeroCategorias();

        return view('catalogos', compact('categories', 'contadorCategorias'));
    }

    public function outlet() {
        $categories = obtenerCategorias();
        $contadorCategorias = obtenerNumeroCategorias();

        return view('outlet', compact('categories', 'contadorCategorias'));
    }

}
