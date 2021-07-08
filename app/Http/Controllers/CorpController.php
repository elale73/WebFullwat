<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ItemCategory;

class CorpController extends Controller {

    public function home() {
        $categories = obtenerCategorias();
        $contadorCategorias = obtenerNumeroCategorias();

        return view('home', compact('categories', 'contadorCategorias'));
    }

    public function about() {
        $categories = obtenerCategorias();
        $contadorCategorias = obtenerNumeroCategorias();

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
}
