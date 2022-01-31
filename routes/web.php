<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function(){

    Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

    Route::resource('products', ProductController::class);

    Route::get('showprod/{id}', 'ProductController@show'); //afisare pagina de start

    Route::get('/', 'ProductsController@index'); //afisare pagina de start
    Route::get('cart', 'ProductsController@cart'); //cos
    Route::get('add-to-cart/{id}', 'ProductsController@addToCart');//adaug in cos
    Route::patch('update-cart', 'ProductsController@update'); //modific cos
    Route::delete('remove-from-cart', 'ProductsController@remove');//sterg din cos
});


