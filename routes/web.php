<?php

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

Route::get('/', function () {
    return view('welcome');

});

Route::get('usuarios', function () {

    return DB::table('users')->get();

});

Route::get('usuario/{id}',function ($id){
    $usuarios = App\User::find($id);
    return $usuarios;
})->where(['id' => '[\d]+']);



Auth::routes();

Route::get('/categorias','CategoryController@index')->name('catall');
Route::get('/home', 'HomeController@index')->name('home');
