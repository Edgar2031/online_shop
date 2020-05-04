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

// < === profile === >
Route::get('/admin/profile/{id}', 'AdminController@profile');

// < === user Online offline === >
Route::get('/admin/user_online_offline', 'AdminController@user_online_offline');
// < === refresh === >
Route::get('/admin/refresh_user_online_offline', 'AdminController@refresh_user_online_offline');

// < === admin Online offline === >
Route::get('/admin/admin_online_offline', 'AdminController@admin_online_offline');
// < === refresh === >
Route::get('/admin/refresh_admin_online_offline', 'AdminController@refresh_admin_online_offline');

// < === Profile show === >
Route::get('/admin/getProfile', 'AdminController@get_profile');

// < === Users show === >
Route::get('/admin/getUsers', 'AdminController@get_users');
// < === refresh === >
Route::get('/admin/refresh_user', 'AdminController@refresh_user');

// < === user block === >
Route::get('/admin/block_3_day/{id}', 'AdminController@block_3_day');
Route::get('/admin/block_one_week/{id}', 'AdminController@block_one_week');
Route::get('/admin/block_1_month/{id}', 'AdminController@block_1_month');
Route::get('/admin/block_permanent/{id}', 'AdminController@block_permanent');
Route::get('/admin/remove_block/{id}', 'AdminController@remove_block');

// < === user search === >
Route::get('/admin/user_search/{search}', 'AdminController@user_search');

// < === Products show === >
Route::get('/admin/getProducts', 'AdminController@get_products');

// < === user search === >
Route::get('/admin/product', 'AdminController@product');
Route::get('/admin/product_search/{search}', 'AdminController@product_search');

// < === Update products status === >
Route::get('/admin/confirm_prod/{id}', 'AdminController@status');

// < === Delete product === >
Route::get('/admin/delete_prod/{id}', 'AdminController@delete');

