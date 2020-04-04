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
// < === Users show === >
Route::get('/admin/getUsers', 'AdminController@get_users');

// < === Products show === >
Route::get('/admin/getProducts', 'AdminController@get_products');

// < === Update products status === >
Route::get('/admin/confirm_prod/{id}', 'AdminController@status');

// < === Delete product === >
Route::get('/admin/delete_prod/{id}', 'AdminController@delete');