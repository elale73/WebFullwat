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
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::view('/', 'home')->name('home'); */
Route::get('/', 'App\Http\Controllers\PagesController@home')->name('home_ruta');

Route::get('/quienes-somos', 'App\Http\Controllers\PagesController@about')->name('quienes_somos_ruta');

Route::get('/news', 'App\Http\Controllers\PagesController@news')->name('news_ruta');

Route::get('/blog', 'App\Http\Controllers\PagesController@blog')->name('blog_ruta');

Route::get('/contacto', 'App\Http\Controllers\PagesController@contacto')->name('contacto_ruta');

Route::get('/productos', 'App\Http\Controllers\PagesController@productos')->name('productos_ruta');

Route::get('/novedades', 'App\Http\Controllers\PagesController@novedades')->name('novedades_ruta');

Route::get('/catalogos', 'App\Http\Controllers\PagesController@catalogos')->name('catalogos_ruta');

Route::get('/outlet', 'App\Http\Controllers\PagesController@outlet')->name('outlet_ruta');

?>