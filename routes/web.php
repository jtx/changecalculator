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

Route::get('/', ['as' => 'web.root', 'uses' => 'App\Http\Controllers\ChangeController@index']);
Route::post('/', ['as' => 'web.root.show', 'uses' => 'App\Http\Controllers\ChangeController@show']);
