<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ItemCategory;
use App\Models\Item;

class FunctionsController extends Controller
{
    public function visibleFullwat() {
        /* ----- Reiniciamos el campo a 0 ----- */
        DB::table('Item_Category')
            ->update(['Visible_Fullwat' => 0]);

        /* ----- Seleccionamos las categorias que tienen productos directamente ----- */
        $categories = DB::table('Item_Category')
                    ->where('Has_Children', 0)
                    ->get();
        $contCategories = $categories->count();

        /* ----- Recorremos las categorias ----- */
        for ($i = 0; $i < $contCategories; $i++) {
            /* ----- Analizando si tienen productos FULLWAT ----- */
            $itemsFullwat = DB::table('Item')
                        ->where('Marca', 'FULLWAT')
                        ->where('Item_Category_Code', $categories[$i]->Code)
                        ->get();
            $contItemsFullwat = $itemsFullwat->count();
            if ($contItemsFullwat > 0) {
                /* ----- Si los tiene la marcamos visible ----- */
                DB::table('Item_Category')
                    ->where('Code', $categories[$i]->Code)
                    ->update(['Visible_Fullwat' => 1]);
                /* ----- Almacenamos el codigo del padre ----- */
                $parentCategory = $categories[$i]->Parent_Category;
                /* ----- Repetimos tantas veces como sea la indentacion para marcar los "padres", "abuelos"... ----- */
                for ($j = 0; $j < $categories[$i]->Indentation; $j++) {
                    /* ----- Marcamos visible al padre ----- */
                    DB::table('Item_Category')
                        ->where('Code', $parentCategory)
                        ->update(['Visible_Fullwat' => 1]);
                    /* ----- Lo seleccionamos y almacenamos a su vez el valor de su padre ----- */
                    $parentCategoryMod = DB::table('Item_Category')
                                        ->where('Code', $parentCategory)
                                        ->get();
                    $parentCategory = $parentCategoryMod[0]->Parent_Category;
                }
            }
        }

        /* ----- Volcamos las categorias Fullwat ----- */
        $categories = DB::table('Item_Category')
            ->where('Visible_Fullwat', 1)
            ->orderBy('Presentation_Order')
            ->get();
        $contCategories = $categories->count();
        return view('task.rdo_visible_fullwat', compact('categories', 'contCategories'));
    }

    public function urlCategorias() {
        $categorias = obtenerCategorias();
        $contadorCategorias = obtenerNumeroCategorias();

        for ($i = 0; $i < $contadorCategorias; $i++) {
            $urlGenerada = cadenaUrl($categorias[$i]->Description);
            guardarUrl($categorias[$i]->Code, $urlGenerada);
        }

        $categorias = obtenerCategorias();
        $contadorCategorias = obtenerNumeroCategorias();

        return view('task.rdo_generar_url_item_category', compact('categorias', 'contadorCategorias'));
    }
}
