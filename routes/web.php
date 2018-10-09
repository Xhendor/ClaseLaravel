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

    //DB::table('users')->insert(['name'=> 'Rosendo', 'email' => 'rosendo@rosendo.com','password'=>'123123']);
    //    //return view('welcome');
    //    return 'Creando registros';
    //});
    //return 'Hola rutas!!';
    return view('welcome');
    //DB::table('users')->get()

    //return view('welcome');
  //  DB::table('categories')->insert([
  //      'name'=>'Frutas','user_id'=>1

   // ]);
    //return DB::table('categories')->get();

});

Route::get('categories',function (){

    DB::table('categories')->get();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
