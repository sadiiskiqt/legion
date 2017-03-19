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
Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/myprofile/{id}/Спортен клуб ЛЕГИОНЪ Пловдив - муай тай, кикбокс, мма, самозащита', 'UserController@index');
Route::post('/mypost', 'UserController@myPost');
Route::get('/legion', 'UserController@legion');
Route::get('/fbgallery', 'UserController@fbgallery');
Route::post('/my', 'UserController@myProfile');
