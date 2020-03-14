<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\OrderModel;
use Session;

class OrderController extends Controller
{
	function g_profile_my_orders_history(){
		$orders = OrderModel::where('user_id', Session::get('id'))->get();
		return view('my_order_history')->with('orders', $orders);
	}
}
