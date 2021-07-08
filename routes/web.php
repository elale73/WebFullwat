<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

---------- EJEMPLOS ----------  
Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'home')->name('home'); */

/* ---------- RUTAS DE PAGINAS CORPORATIVAS ---------- */
Route::get('/', 'App\Http\Controllers\CorpController@home')->name('home_ruta');

Route::get('/quienes-somos', 'App\Http\Controllers\CorpController@about')->name('quienes_somos_ruta');

Route::get('/news', 'App\Http\Controllers\CorpController@news')->name('news_ruta');

Route::get('/blog', 'App\Http\Controllers\CorpController@blog')->name('blog_ruta');

Route::get('/contacto', 'App\Http\Controllers\CorpController@contacto')->name('contacto_ruta');

/* ---------- RUTAS DE PAGINAS DE PRODUCTOS ---------- */
Route::get('/productos', 'App\Http\Controllers\ProductoController@productos')->name('productos_ruta.index');

Route::get('/productos/{Code}/{Url}', 'App\Http\Controllers\ProductoController@listaProductos')->name('productos_ruta.lista');

Route::get('/novedades', 'App\Http\Controllers\ProductoController@novedades')->name('novedades_ruta');

Route::get('/catalogos', 'App\Http\Controllers\ProductoController@catalogos')->name('catalogos_ruta');

Route::get('/outlet', 'App\Http\Controllers\ProductoController@outlet')->name('outlet_ruta');

/* ---------- RUTA ACTUALIZAR VISIBLE FULLWAT ---------- */
Route::get('/actualizar-visible-fullwat', 'App\Http\Controllers\FunctionsController@visibleFullwat')->name('visible_fullwat_ruta');

Route::get('/generar_url_categorias', 'App\Http\Controllers\FunctionsController@urlCategorias')->name('url_categoria_ruta');

?>