<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\OrderModel;
use Session;
use App\OrderDetailModel;
use App\FeedbackModel;
use Response;

class OrderController extends Controller
{
	//<= === Orders History === =>
	function g_profile_my_orders_history(){
		$orders = OrderModel::where('user_id', Session::get('id'))->get();
		return view('my_order_history')->with('orders', $orders);
	}

	//<= === Orders Remove === =>
	function g_profile_my_orders_history_remove(Request $r){
		OrderModel::where('id', $r->order_id)->where('user_id', Session::get('id'))->delete();
		return Response::json(array('success' => true), 200); 
		// 200 being the HTTP code for an invalid request.
	}

	//<= === Orders History this show === =>
	function g_profile_my_orders_history_this($id){
		$feedback = FeedbackModel::where('order_id', $id)->get();
		$order_this = OrderDetailModel::where('order_id', $id)->get();
		foreach ($order_this as $key) {
			$f = FeedbackModel::where('order_id', $key->order_id)->get();
			if ($f) {
				$key['feedback'] = FeedbackModel::where('order_id', $key->order_id)->get();
			}else {
				$key['feedback'] = true;
			}
		}
		return view('my_history_this')->with('order_this', $order_this)->with('feedback', $feedback);
	}
}
