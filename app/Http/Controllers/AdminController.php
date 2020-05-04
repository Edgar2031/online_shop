<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\UserModel;
use App\ProductModel;
use App\PhotoModel;
use Session;

class AdminController extends Controller
{

	// < === admin show === >
    function admin_show(){
    	return view('admin');
    }

    function profile($id){
        $arr = [];
        $user = UserModel::where('id', $id)->first();
        $arr['name'] = $user->name;
        $arr['surname'] = $user->surname;
        return $arr;
    }

    // < === user online offline === >
    function user_online_offline(){
        $user_online_offline = [];
        $online = UserModel::where('type', 0)->where('online_offline', 1)->count();
        $offline = UserModel::where('type', 0)->where('online_offline', 0)->count();
        $user_online_offline['online'] = $online;
        $user_online_offline['offline'] = $offline;
        return $user_online_offline;
    }
    // < === refresh === >
    function refresh_user_online_offline(){
        $refresh_user_online_offline = [];
        $online = UserModel::where('type', 0)->where('online_offline', 1)->count();
        $offline = UserModel::where('type', 0)->where('online_offline', 0)->count();
        $refresh_user_online_offline['online'] = $online;
        $refresh_user_online_offline['offline'] = $offline;
        return $refresh_user_online_offline;
    }

    // < === admin online offline === >
    function admin_online_offline(){
        $admin_online_offline = [];
        $online = UserModel::where('type', 1)->where('online_offline', 1)->count();
        $offline = UserModel::where('type', 1)->where('online_offline', 0)->count();
        $admin_online_offline['online'] = $online;
        $admin_online_offline['offline'] = $offline;
        return $admin_online_offline;
    }
    // < === refresh === >
    function refresh_admin_online_offline(){
        $refresh_admin_online_offline = [];
        $online = UserModel::where('type', 1)->where('online_offline', 1)->count();
        $offline = UserModel::where('type', 1)->where('online_offline', 0)->count();
        $refresh_admin_online_offline['online'] = $online;
        $refresh_admin_online_offline['offline'] = $offline;
        return $refresh_admin_online_offline;
    }

    // < === profile show === >
    function get_profile(){
        // Session::get('admin_id')
        return UserModel::where('id', 26)->first();;
    }

    // < === Users show === >
    function get_users(){
    	return UserModel::where('type', 0)->get();
    }
    // < === refresh === >
    function refresh_user(){
        return UserModel::where('type', 0)->get();
    }

    // < === user block === >
    function block_3_day($id){
        date_default_timezone_set('Asia/Yerevan');
        $date = date('d-m-Y'); 
        $next_date = date('d-m-Y', strtotime($date. ' +3 days'));
        UserModel::where('id', $id)->update(['block' => $next_date]);
        return UserModel::where('type', 0)->get();
    }

    function block_one_week($id){
        $date = date('d-m-Y'); 
        $next_date = date('d-m-Y', strtotime($date. ' +7 days'));
        UserModel::where('id', $id)->update(['block' => $next_date]);
        return UserModel::where('type', 0)->get();
    }

    function block_1_month($id){
        $date = date('d-m-Y'); 
        $next_date = date('d-m-Y', strtotime($date. ' +30 days'));
        UserModel::where('id', $id)->update(['block' => $next_date]);
        return UserModel::where('type', 0)->get();
    }

    function block_permanent($id){
        UserModel::where('id', $id)->update(['block' => 'permanent']);
        return UserModel::where('type', 0)->get();
    }

    function remove_block($id){
        UserModel::where('id', $id)->update(['block' => 0]);
        return UserModel::where('type', 0)->get();
    }

    // < === user search === >
    function user_search($search){
        $user = UserModel::where('type', 0)
                        ->where('name', 'like', '%' . $search . '%')
                        ->get();
        return $user;
    }

    // < === Products show === >
    function get_products(){
    	$product = ProductModel::where('status', 0)->get();
        foreach ($product as $p) {
            $p->p_photo['0']->photo;
        }
        return $product;
    }

    // < === Update products status === >
    function status($id){
    	ProductModel::where('id', $id)->update(['status' => 1]);
    }

    // < === Delete product === >
    function delete($id){
        $photo = PhotoModel::where('product_id', $id)->get();
        if ($photo) {
            foreach ($photo as $key) {
                unlink(public_path().'/product_photo/'.$key->photo);
            }
        }
    	ProductModel::where('id', $id)->delete();
    }

    // < === product search === >
    function product(){
        $product = ProductModel::where('status', 0)->get();
                    foreach ($product as $p) {
                        $p->p_photo['0']->photo;
                    }
        return $product;
    }

    function product_search($search){
        $product = ProductModel::where('status', 0)
                        ->where('name', 'like', '%' . $search . '%')
                        ->get();
                        foreach ($product as $p) {
                            $p->p_photo['0']->photo;
                        }
        return $product;
    }
}
