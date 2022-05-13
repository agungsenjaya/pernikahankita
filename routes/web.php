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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes([
    'register' => false,
    'login' => false
]);

Route::GET('/','ClientController@index')->name('index');

Route::GET('/dita-dika', 'ClientController@dita')->name('client.dita');
Route::GET('/rifha-haerul', 'ClientController@rifha')->name('client.rifha');
Route::GET('/lala-andri', 'ClientController@lala')->name('client.lala');
Route::GET('/lena-michel', 'ClientController@lena')->name('client.lena');
Route::GET('/ngunduh-mantu/lala-andri', 'ClientController@lala_mantu')->name('client.lala_mantu');
Route::GET('/client_view', 'ClientController@client_view')->name('client.view');

Route::get('/home', 'HomeController@index')->name('home');
