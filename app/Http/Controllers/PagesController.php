<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ItemCategory;

class PagesController extends Controller
{
    public function home() {
        $categories = DB::table('Item_Category')
                    ->orderBy('Presentation_Order')
                    ->get();
        $contadorCategorias = $categories->count();
        return view('home', compact('categories', 'contadorCategorias'));
    }
}
