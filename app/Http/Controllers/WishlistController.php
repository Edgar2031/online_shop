<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\WishlistModel;
use App\ProductModel;
use App\PhotoModel;
use App\CartModel;
use Session;

class WishlistController extends Controller
{
	// <= === Wishlist === =>
    function g_page_wishlist(){
        $cart = CartModel::where('user_id', Session::get('id'))->get();
        $wishlist_product = WishlistModel::where('user_id', Session::get('id'))->get();
                foreach($wishlist_product as $wishlist_p){     
                    $wishlist_p['cart'] = 0;   
                    foreach ($cart as $c) {
                        if ($wishlist_p->product_id == $c->product_id) {
                            $wishlist_p['cart'] = 1;
                        }
                    }
                }
    	return view('page_wishlist')->with('wishlist_product',$wishlist_product);
    }

    // <= === Add Wishlist === =>
    function g_page_wishlist_add(Request $r){
    	$wishlist_add = new WishlistModel;
    	$wishlist_add->product_id = $r->wishlist_id;
    	$wishlist_add->user_id = Session::get('id');
    	$wishlist_add->save();
    }

    // <= === All Product Remove From Wishlist === =>
    function g_page_wishlist_remove(Request $r){
        WishlistModel::where('product_id', $r->wishlist_id_remove)
                    ->where('user_id', Session::get('id'))
                    ->delete();
    }

    // <= === Wishlist Remove From Wishlist === =>
    function g_page_wishlist_remove_this(Request $r){
        WishlistModel::where('product_id', $r->wishlist_remove_this_id)
                    ->where('user_id', Session::get('id'))
                    ->delete();
    }

    // <= === Wish List Add Cart === =>
    function g_page_cart_cart_this_add_cart(Request $r){
        $cart_add = new CartModel;
        $cart_add->product_id = $r->cart_this_id;
        $cart_add->user_id = Session::get('id');
        $cart_add->count = 1;
        $cart_add->save();
    }

    // <= === Wish List Remove From Cart === =>
    function g_page_cart_cart_this_remove_cart(Request $r){
        CartModel::where('product_id', $r->cart_this_id)
                    ->where('user_id', Session::get('id'))
                    ->delete();
    }

    // 
    function g_page_cart_remove_this_wish_list(Request $r){
        WishlistModel::where('product_id', $r->wish_list_remove_this_id)
                    ->where('user_id', Session::get('id'))
                    ->delete();
    }

}
