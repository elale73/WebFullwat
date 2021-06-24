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

Route::view('/quienes_somos', 'quienes_somos')->name('quienes_somos');
Route::view('/productos', 'productos')->name('productos');
Route::view('/news', 'news')->name('news');
Route::view('/blog', 'blog')->name('blog');
Route::view('/contacto', 'contacto')->name('contacto');



?>