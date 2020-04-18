<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserModel;
use App\ProductModel;
use Session;

class AdminController extends Controller
{
	// < === admin show === >
    function admin_show(){
    	return view('admin');
    }

    // < === profile show === >
    function get_profile(){
        $user = UserModel::where('id', Session::get('id'))->first();
        return $user;
    }

    // < === Users show === >
    function get_users(){
    	return UserModel::where('type', 0)->get();
    }

    // < === Products show === >
    function get_products(){
    	return ProductModel::where('status', 0)->get();
    }

    // < === Update products status === >
    function status($id){
    	ProductModel::where('id', $id)->update(['status' => 1]);
    }

    // < === Delete product === >
    function delete($id){
    	ProductModel::where('id', $id)->delete();
    }
}
