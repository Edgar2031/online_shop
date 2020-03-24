<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Redirect;
use App\UserModel;
use App\ProductModel;
use App\PhotoModel;
use Hash;
use Session;

class EditController extends Controller
{
	// <= === Edit User === =>
    function u_edit(Request $r) {
    	$validator = Validator::make(
		   $r->all(),
		    array(
		        'name' => 'required|string|min:3|max:12',
		        'surname' => 'required|string|min:5|max:12',
		        'email' => 'required|email',
		        'age' => 'required|integer|min:18'
		    )
		);

    	$data = UserModel::where('id', Session::get('id'))->first();
    	$user = UserModel::where('email', $r->email)->where('email', '!=', $data->email)->first();
		$validator->after( function($validator) use($data, $user, $r) {
			if ($user) {
				$validator->errors()->add('email','porceq urish mail');		
			}
		});

		if ($validator->fails()) {
			// Переданные данные не прошли проверку
			return Redirect::to('/g_profile/my_account_settings')
							->withErrors($validator)
							->withInput();
		}else {
			UserModel::where('id', Session::get('id'))
						->update(
							[
								'name' => $r->name, 
								'surname' => $r->surname, 
								'email' => $r->email, 
								'age' => $r->age
							]
						);
			return Redirect::to('/g_profile/my_account_settings');
		}
    }

    // <= === My Product Modify === =>
	function g_product_item_modify($id, Request $r){
		$validator = Validator::make(
		   $r->all(),
		    array(
		        'pro_name_my' => 'required|min:3|max:25',
		        'pro_count_my' => 'required|integer|min:1|max:10000',
		        'pro_price_my' => 'required|integer|min:500|max:12000',
		        'pro_description_my' => 'required|min:6|max:200',
		        'pro_photo_my' => 'max:2000' 
		    )
		);
		if ($validator->fails()) {
			// Переданные данные не прошли проверку
			return Redirect::to('g_profile/my_product/product_item/'.$id)
							->withErrors($validator)
							->withInput();
		}else {
			ProductModel::where('id', $id)
						->update(
							[
								'name' => $r->pro_name_my, 
								'count' => $r->pro_count_my, 
								'price' => $r->pro_price_my, 
								'description' => $r->pro_description_my
							]
						);		
			if ($r->hasfile('pro_photo_my')) {
				foreach ($r->file('pro_photo_my') as $img) {
					$address = time().$img->getClientOriginalName();
					$img->move(public_path().'/product_photo', $address);
					$ph = new PhotoModel();
					$ph->photo = $address;
					$ph->product_id = $id;
					$ph->save();
				}
			}
			return Redirect::to('g_profile/my_product/product_item/'.$id);
		}
	}
	
}
