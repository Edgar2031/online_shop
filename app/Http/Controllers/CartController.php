<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CartModel;
use App\ProductModel;
use App\PhotoModel;
use App\WishlistModel;
use Session;

class CartController extends Controller
{
	// <= === Cart === =>
    function g_page_cart(){
        $wishlist = WishlistModel::where('user_id', Session::get('id'))->get();
    	$cart_product = CartModel::where('user_id', Session::get('id'))->get();
                foreach($cart_product as $cart_p){     
                    $cart_p['wishlist'] = 0;   
                    foreach ($wishlist as $w) {
                        if ($cart_p->product_id == $w->product_id) {
                            $cart_p['wishlist'] = 1;
                        }
                    }
                }
    	return view('page_cart')->with('cart_product',$cart_product);
    }	
    
    // <= === Add Cart === =>
    function g_page_cart_add(Request $r){
    	$cart_add = new CartModel;
    	$cart_add->product_id = $r->cart_id;
    	$cart_add->user_id = Session::get('id');
    	$cart_add->count = 1;
    	$cart_add->save();
    }

    // <= === All Product Remove From Cart === =>
    function g_page_cart_remove(Request $r){
        CartModel::where('product_id', $r->cart_id_remove)
                    ->where('user_id', Session::get('id'))
                    ->delete();
    }

    // <= === Cart Remove From Cart === =>
    function g_page_cart_remove_this(Request $r){
        CartModel::where('product_id', $r->cart_remove_this_id)
                    ->where('user_id', Session::get('id'))
                    ->delete();
    }

    // <= === Cart Minus === =>
    function g_page_cart_this_count_minus_0(Request $r){
        CartModel::where('product_id', $r->cart_count_this_id)
                    ->where('user_id', Session::get('id'))
                    ->delete();
    }

    function g_page_cart_this_count_minus_1(Request $r){
        CartModel::where('product_id', $r->cart_count_this_id)
                    ->where('user_id', Session::get('id'))
                    ->update([
                        'count' => $r->cart_count_val
                    ]);
    }
    
    // <= === Cart Plus === =>
    function g_page_cart_this_count_plus_0(Request $r){
        $cart_add = new CartModel;
        $cart_add->product_id = $r->cart_count_this_id;
        $cart_add->user_id = Session::get('id');
        $cart_add->count = 1;
        $cart_add->save();
    }

    function g_page_cart_this_count_plus_1(Request $r){
        CartModel::where('product_id', $r->cart_count_this_id)
                    ->where('user_id', Session::get('id'))
                    ->update([
                        'count' => $r->cart_count_val
                    ]);
    }

    // <= === Cart Add Wish List === =>
    function g_page_cart_wish_list_this_add_cart(Request $r){
        $wishlist_add = new WishlistModel;
        $wishlist_add->product_id = $r->wish_list_this_id;
        $wishlist_add->user_id = Session::get('id');
        $wishlist_add->save();
    }

    // <= === Cart Remove From Wish List === =>
    function g_page_cart_wish_list_this_remove_cart(Request $r){
        WishlistModel::where('product_id', $r->wish_list_this_id)
                    ->where('user_id', Session::get('id'))
                    ->delete();
    }
}
