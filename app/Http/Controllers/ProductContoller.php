<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\ProductModel;
use App\PhotoModel;
use App\CartModel;
use App\WishlistModel;
use Validator;
use Session;

class ProductContoller extends Controller
{
	// <= === Add Product === =>
    function product() {
    	return view('g_product');
    }

    function u_product(Request $r){
      	$validator = Validator::make(
		   $r->all(),
		    array(
		        'p_name' => 'required|min:3|max:25',
		        'p_count' => 'required|integer|min:1|max:10000',
		        'p_price' => 'required|integer|min:500|max:12000',
		        'p_description' => 'required|min:6|max:200',
		        'p_category' => 'required',
		        'p_photo' => 'max:2000' 
		    )
		);
		if ($validator->fails()) {
			// Переданные данные не прошли проверку
			return Redirect::to('g_profile/product')
							->withErrors($validator)
							->withInput();
		}else {
			$product = new ProductModel();
			$product->name = $r->p_name;
			$product->count = $r->p_count;
			$product->price = $r->p_price;
			$product->description = $r->p_description;
			$product->user_id = Session::get('id');
			$product->category = $r->p_category;
			$product->save();
			if (empty($r->p_photo)){
				$address = '15827316644_strokes_of_fun_900x400.jpg';
				$ph = new PhotoModel();
				$ph->photo = $address;
				$ph->product_id = $product->id;
				$ph->save();
			}else {			
				if ($r->hasfile('p_photo')) {
					foreach ($r->file('p_photo') as $img) {
						$address = time().$img->getClientOriginalName();
						$img->move(public_path().'/product_photo',$address);
						$ph = new PhotoModel();
						$ph->photo = $address;
						$ph->product_id = $product->id;
						$ph->save();
					}
				}
			}
			return Redirect::to('g_profile/product');
		}
    }

	// <= === All Product === =>
    function g_page_shop(){
    	return view('page_shop');
    }

    function g_profile_page_shop_page(){
	    $arr = [];
	    $cart = CartModel::where('user_id', Session::get('id'))->get();
	    $wishlist = WishlistModel::where('user_id', Session::get('id'))->get();
	    $product = ProductModel::where('user_id', '<>', Session::get('id'))
	    						->orderBy('time','DESC')
	    						->get();
	    						// ->paginate();
								foreach($product as $p){		
									$p['cart'] = 0;
									$p['wishlist'] = 0;
									foreach ($cart as $c) {
										if ($p->id == $c->product_id) {
											$p['cart'] = 1;
										}
									}
									foreach ($wishlist as $w) {
										if ($p->id == $w->product_id) {
											$p['wishlist'] = 1;
										}
									}
									$p->p_photo;
									array_push($arr, $p);	
								}
	    echo json_encode($arr);
    }

	// <= === Sort Product === =>
    function g_profile_page_shop_page_sort_pro(Request $r){
    	$arr = [];
    	$pro_sort = 0;
		$cart = CartModel::where('user_id', Session::get('id'))->get();
	    $wishlist = WishlistModel::where('user_id', Session::get('id'))->get();
    	if (!empty($r->product_val)) {
    		switch ($r->category) {
    			case 'all':
    					$pro_sort = ProductModel::where('user_id', '<>', Session::get('id'))
						    					->where('price', '>=', $r->range_start)
									            ->where('price', '<=', $r->range_end)
									            ->where('name', 'like', '%' . $r->product_val . '%')
									            ->orWhere('description', 'like', '%' . $r->product_val . '%')
									            ->orderBy($r->sort_pro, $r->sort_az)
									            ->get();	
									            foreach($pro_sort as $p){		
													$p['cart'] = 0;
													$p['wishlist'] = 0;
													foreach ($cart as $c) {
														if ($p->id == $c->product_id) {
															$p['cart'] = 1;
														}
													}
													foreach ($wishlist as $w) {
														if ($p->id == $w->product_id) {
															$p['wishlist'] = 1;
														}
													}
													$p->p_photo;
													array_push($arr, $p);	
												}
    				break;
    			case 'grocery':
    					$pro_sort = ProductModel::where('user_id', '<>', Session::get('id'))
						    					->where('category', 'grocery')
						    					->where('price', '>=', $r->range_start)
									            ->where('price', '<=', $r->range_end)
									            ->where('name', 'like', '%' . $r->product_val . '%')
									            ->orWhere('description', 'like', '%' . $r->product_val . '%')
									            ->orderBy($r->sort_pro, $r->sort_az)
									            ->get();	
									            foreach($pro_sort as $p){		
													$p['cart'] = 0;
													$p['wishlist'] = 0;
													foreach ($cart as $c) {
														if ($p->id == $c->product_id) {
															$p['cart'] = 1;
														}
													}
													foreach ($wishlist as $w) {
														if ($p->id == $w->product_id) {
															$p['wishlist'] = 1;
														}
													}
													$p->p_photo;
													array_push($arr, $p);	
												}
    				break;
    			case 'apparel':
    					$pro_sort = ProductModel::where('user_id', '<>', Session::get('id'))
						    					->where('category', 'apparel')
						    					->where('price', '>=', $r->range_start)
									            ->where('price', '<=', $r->range_end)
									            ->where('name', 'like', '%' . $r->product_val . '%')
									            ->orWhere('description', 'like', '%' . $r->product_val . '%')
									            ->orderBy($r->sort_pro, $r->sort_az)
									            ->get();	
									            foreach($pro_sort as $p){		
													$p['cart'] = 0;
													$p['wishlist'] = 0;
													foreach ($cart as $c) {
														if ($p->id == $c->product_id) {
															$p['cart'] = 1;
														}
													}
													foreach ($wishlist as $w) {
														if ($p->id == $w->product_id) {
															$p['wishlist'] = 1;
														}
													}
													$p->p_photo;
													array_push($arr, $p);	
												}
    				break;
    			case 'electronics':
    					$pro_sort = ProductModel::where('user_id', '<>', Session::get('id'))
						    					->where('category', 'electronics')
						    					->where('price', '>=', $r->range_start)
									            ->where('price', '<=', $r->range_end)
									            ->where('name', 'like', '%' . $r->product_val . '%')
									            ->orWhere('description', 'like', '%' . $r->product_val . '%')
									            ->orderBy($r->sort_pro, $r->sort_az)
									            ->get();	
									            foreach($pro_sort as $p){		
													$p['cart'] = 0;
													$p['wishlist'] = 0;
													foreach ($cart as $c) {
														if ($p->id == $c->product_id) {
															$p['cart'] = 1;
														}
													}
													foreach ($wishlist as $w) {
														if ($p->id == $w->product_id) {
															$p['wishlist'] = 1;
														}
													}
													$p->p_photo;
													array_push($arr, $p);	
												}
    				break;
    			case 'beauty':
    					$pro_sort = ProductModel::where('user_id', '<>', Session::get('id'))
						    					->where('category', 'beauty')
						    					->where('price', '>=', $r->range_start)
									            ->where('price', '<=', $r->range_end)
									            ->where('name', 'like', '%' . $r->product_val . '%')
									            ->orWhere('description', 'like', '%' . $r->product_val . '%')
									            ->orderBy($r->sort_pro, $r->sort_az)
									            ->get();	
									            foreach($pro_sort as $p){		
													$p['cart'] = 0;
													$p['wishlist'] = 0;
													foreach ($cart as $c) {
														if ($p->id == $c->product_id) {
															$p['cart'] = 1;
														}
													}
													foreach ($wishlist as $w) {
														if ($p->id == $w->product_id) {
															$p['wishlist'] = 1;
														}
													}
													$p->p_photo;
													array_push($arr, $p);	
												}
    				break;
    		}
	    	
    	}else {
    		switch ($r->category) {
    			case 'all':
    					$pro_sort = ProductModel::where('user_id', '<>', Session::get('id'))
						    					->where('price', '>=', $r->range_start)
									            ->where('price', '<=', $r->range_end)
									            ->orderBy($r->sort_pro, $r->sort_az)
									            ->get();	
									            foreach($pro_sort as $p){		
													$p['cart'] = 0;
													$p['wishlist'] = 0;
													foreach ($cart as $c) {
														if ($p->id == $c->product_id) {
															$p['cart'] = 1;
														}
													}
													foreach ($wishlist as $w) {
														if ($p->id == $w->product_id) {
															$p['wishlist'] = 1;
														}
													}
													$p->p_photo;
													array_push($arr, $p);	
												}
    				break;
    			case 'grocery':
    					$pro_sort = ProductModel::where('user_id', '<>', Session::get('id'))
						    					->where('category', 'grocery')
						    					->where('price', '>=', $r->range_start)
									            ->where('price', '<=', $r->range_end)
									            ->orderBy($r->sort_pro, $r->sort_az)
									            ->get();	
									            foreach($pro_sort as $p){		
													$p['cart'] = 0;
													$p['wishlist'] = 0;
													foreach ($cart as $c) {
														if ($p->id == $c->product_id) {
															$p['cart'] = 1;
														}
													}
													foreach ($wishlist as $w) {
														if ($p->id == $w->product_id) {
															$p['wishlist'] = 1;
														}
													}
													$p->p_photo;
													array_push($arr, $p);	
												}
    				break;
    			case 'apparel':
    					$pro_sort = ProductModel::where('user_id', '<>', Session::get('id'))
						    					->where('category', 'apparel')
						    					->where('price', '>=', $r->range_start)
									            ->where('price', '<=', $r->range_end)
									            ->orderBy($r->sort_pro, $r->sort_az)
									            ->get();	
									            foreach($pro_sort as $p){		
													$p['cart'] = 0;
													$p['wishlist'] = 0;
													foreach ($cart as $c) {
														if ($p->id == $c->product_id) {
															$p['cart'] = 1;
														}
													}
													foreach ($wishlist as $w) {
														if ($p->id == $w->product_id) {
															$p['wishlist'] = 1;
														}
													}
													$p->p_photo;
													array_push($arr, $p);	
												}
    				break;
    			case 'electronics':
    					$pro_sort = ProductModel::where('user_id', '<>', Session::get('id'))
						    					->where('category', 'electronics')
						    					->where('price', '>=', $r->range_start)
									            ->where('price', '<=', $r->range_end)
									            ->orderBy($r->sort_pro, $r->sort_az)
									            ->get();	
									            foreach($pro_sort as $p){		
													$p['cart'] = 0;
													$p['wishlist'] = 0;
													foreach ($cart as $c) {
														if ($p->id == $c->product_id) {
															$p['cart'] = 1;
														}
													}
													foreach ($wishlist as $w) {
														if ($p->id == $w->product_id) {
															$p['wishlist'] = 1;
														}
													}
													$p->p_photo;
													array_push($arr, $p);	
												}
    				break;
    			case 'beauty':
    					$pro_sort = ProductModel::where('user_id', '<>', Session::get('id'))
						    					->where('category', 'beauty')
						    					->where('price', '>=', $r->range_start)
									            ->where('price', '<=', $r->range_end)
									            ->orderBy($r->sort_pro, $r->sort_az)
									            ->get();	
									            foreach($pro_sort as $p){		
													$p['cart'] = 0;
													$p['wishlist'] = 0;
													foreach ($cart as $c) {
														if ($p->id == $c->product_id) {
															$p['cart'] = 1;
														}
													}
													foreach ($wishlist as $w) {
														if ($p->id == $w->product_id) {
															$p['wishlist'] = 1;
														}
													}
													$p->p_photo;
													array_push($arr, $p);	
												}
    				break;
    		}
    	}
    	echo json_encode($pro_sort);
    }

	// <= === My Product === =>
	function g_my_product(){
		$product = ProductModel::where('user_id', Session::get('id'))->get();
		return view('my_product')->with('product', $product);
	}

	function g_product_item($id){
		$my_product = ProductModel::where('id', $id)->get();
		return view('product_item')->with('my_product', $my_product);
	}

	// <= === Product Remove === =>
    function deletpro(Request $r){
    	ProductModel::where('id', $r->id)->delete();
    }

    // <= === My Product Delete Photo === =>
	function g_product_delete_photo(Request $r){
		$photo = PhotoModel::where('id', $r->photo_id)->first();
		unlink(public_path().'/product_photo/'.$photo->photo);
		PhotoModel::where('id', $r->photo_id)->delete();
	}
}
