<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//List Article
Route::get('articles','ArticleController@index')->name('list_all');
Route::get('article/{id}','ArticleController@show')->name('single');
Route::post('article','ArticleController@store')->name('save');
Route::put('article','ArticleController@store')->name('update');
Route::delete('article/{id}','ArticleController@destroy')->name('delete');
