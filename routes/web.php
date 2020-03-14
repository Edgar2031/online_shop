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
// <= =============== Login =============== =>
Route::get('/', function () {
    return view('login');
})->middleware('checkLogin:login');

// <= =============== Register =============== =>
Route::post('/register', "UserController@r_register");

// <= =============== Verify =============== =>
Route::get('/account/verify/{hash}/{id}', "UserController@g_verify");

// <= =============== Forgot password =============== =>
Route::get('/user_verify', "UserController@g_user_verify");
Route::post('/user_verify/verify_password', "UserController@g_verify_password");
Route::post('/user_verify/verify_password_send', "UserController@g_verify_password_send");
Route::post('/user_verify/verify_password_send/if', "UserController@g_verify_password_send_if");
Route::post('/user_verify/name_surname_check', "UserController@g_verify_name_surname_check");
Route::post('/user_verify/change_password', "UserController@g_verify_change_password");

// <= =============== Login Check =============== =>
Route::post('/login_check', "UserController@g_login_check");

// <= =============== Logout =============== =>
Route::get('/g_logout', "UserController@g_logout");

// <= =============== Profile =============== =>
Route::get('/g_profile', "UserController@profile")->middleware('checkLogin:profile');

// <= =============== Profile Settings =============== =>
Route::get('/g_profile/my_account_settings', "UserController@g_my_account")->middleware('checkLogin:profile');

// <= =============== Edit User =============== =>
Route::post('/g_edit', "EditController@u_edit")->middleware('checkLogin:profile');

// <= =============== Orders History =============== =>
Route::get('g_profile/my_orders_history', "OrderController@g_profile_my_orders_history")->middleware('checkLogin:profile');

// <= =============== All Product =============== =>
Route::get('/g_profile/page_shop', 'ProductContoller@g_page_shop')->middleware('checkLogin:profile');
Route::post('/g_profile/page_shop/page', 'ProductContoller@g_profile_page_shop_page')->middleware('checkLogin:profile');

// <= =============== Sort Product =============== =>
Route::post('/g_profile/page_shop/page/sort_pro', 'ProductContoller@g_profile_page_shop_page_sort_pro')->middleware('checkLogin:profile');

// <= =============== My Product =============== =>
Route::get('/g_profile/my_product', "ProductContoller@g_my_product")->middleware('checkLogin:profile');
Route::get('g_profile/my_product/product_item/{id}', "ProductContoller@g_product_item")->middleware('checkLogin:profile');

// <= =============== My Product Modify =============== =>
Route::post('g_profile/product_item/{id}/modify', "EditController@g_product_item_modify")->middleware('checkLogin:profile');

// <= =============== Add Product =============== =>
Route::get('g_profile/product', "ProductContoller@product")->middleware('checkLogin:profile');
Route::post('/add_product', "ProductContoller@u_product")->middleware('checkLogin:profile');

// <= =============== Product Remove =============== =>
Route::post('/deletpro', "ProductContoller@deletpro")->middleware('checkLogin:profile');

// <= =============== My Product Delete Photo =============== =>
Route::post('g_profile/my_product/product_item/delete_photo', "ProductContoller@g_product_delete_photo")->middleware('checkLogin:profile');

// <= =============== Cart =============== =>
Route::get('/g_profile/page_cart', "CartController@g_page_cart")->middleware('checkLogin:profile');

// <= =============== Add Cart =============== =>
Route::post('/g_profile/page_cart/add', "CartController@g_page_cart_add")->middleware('checkLogin:profile');

// <= =============== All Product Remove From Cart =============== =>
Route::post('/g_profile/page_cart/remove', "CartController@g_page_cart_remove")->middleware('checkLogin:profile');
// <= =============== Cart Add Wish List =============== =>
Route::post('/g_profile/page_cart/wish_list_this_add_cart', "CartController@g_page_cart_wish_list_this_add_cart")->middleware('checkLogin:profile');

// <= =============== Cart Remove from Wish List =============== =>
Route::post('/g_profile/page_cart/wish_list_this_remove_cart', "CartController@g_page_cart_wish_list_this_remove_cart")->middleware('checkLogin:profile');

// <= =============== Cart Remove From Cart =============== =>
Route::post('/g_profile/page_cart/remove_this', "CartController@g_page_cart_remove_this")->middleware('checkLogin:profile');

// <= =============== Cart Minus =============== =>
Route::post('/g_profile/page_cart/this_count_minus_0', "CartController@g_page_cart_this_count_minus_0")->middleware('checkLogin:profile');
Route::post('/g_profile/page_cart/this_count_minus_1', "CartController@g_page_cart_this_count_minus_1")->middleware('checkLogin:profile');

// <= =============== Cart Plus =============== =>
Route::post('/g_profile/page_cart/this_count_plus_0', "CartController@g_page_cart_this_count_plus_0")->middleware('checkLogin:profile');
Route::post('/g_profile/page_cart/this_count_plus_1', "CartController@g_page_cart_this_count_plus_1")->middleware('checkLogin:profile');

// <= =============== Cart Stripe =============== =>
Route::get('/g_profile/page_cart/stripe', "StripeController@stripe")->middleware('checkLogin:profile');
Route::post('stripe', 'StripeController@stripePost')->name('stripe.post');

// <= =============== Wishlist =============== =>
Route::get('/g_profile/page_wishlist', "WishlistController@g_page_wishlist")->middleware('checkLogin:profile');

// <= =============== Add Wishlist =============== =>
Route::post('/g_profile/page_wishlist/add', "WishlistController@g_page_wishlist_add")->middleware('checkLogin:profile');

// <= =============== All Product Remove From Wishlist =============== =>
Route::post('/g_profile/page_wishlist/remove', "WishlistController@g_page_wishlist_remove")->middleware('checkLogin:profile');

// <= =============== Wish List Remove From wish list =============== =>
Route::post('/g_profile/page_cart/remove_this_wish_list', "WishlistController@g_page_cart_remove_this_wish_list")->middleware('checkLogin:profile');

// <= =============== Wish List Add Cart =============== =>
Route::post('/g_profile/page_cart/cart_this_add_cart', "WishlistController@g_page_cart_cart_this_add_cart")->middleware('checkLogin:profile');

// <= =============== Wish List Remove from Cart =============== =>
Route::post('/g_profile/page_cart/cart_this_remove_cart', "WishlistController@g_page_cart_cart_this_remove_cart")->middleware('checkLogin:profile');

// <= =============== Add Wishlist =============== =>
Route::post('/g_profile/page_wishlist/cart_this_add', "WishlistController@g_page_wishlist_this_add")->middleware('checkLogin:profile');




// php -S localhost:8000 -t public
