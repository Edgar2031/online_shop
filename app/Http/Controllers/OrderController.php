<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\OrderModel;
use Session;
use App\OrderDetailModel;
use App\FeedbackModel;
use Response;
use Validator;

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
			$key['feedback'] = '';
			foreach ($feedback as $k) {
				if ($key->order_id == $k->order_id && $key->product_id == $k->product_id) {
					$key['feedback'] = FeedbackModel::where('order_id', $key->order_id)->first('feedback');
				}
			}
			
		}
		return view('my_history_this')->with('order_this', $order_this);
	}

	//<= === Add feedback === =>
	function add_feedback(Request $r){
		$validator = Validator::make(
		   $r->send,
		    array(
		        'feedback' => 'required|min:50|max:200'
		    )
		);
		if ($validator->fails()) {
			// Переданные данные не прошли проверку
			return Response::json(array(
							        'success' => false,
							        'errors' => $validator->getMessageBag()->toArray()
							    ), 400); // 400 being the HTTP code for an invalid request.	
		}else {
			$feedback = new FeedbackModel();
			$feedback->product_id = $r->send['product_id'];
			$feedback->order_id = $r->send['order_id'];
			$feedback->user_id = Session::get('id');
			$feedback->feedback = $r->send['feedback'];
			$feedback->save();
			return Response::json(array(
							        'success' => true
							    ), 200); // 200 being the HTTP code for an invalid request.	
		}
	}

	//<= === Change feedback === =>
	function change_feedback(Request $r){
		$validator = Validator::make(
		   $r->send,
		    array(
		        'feedback' => 'required|min:50|max:200'
		    )
		);
		if ($validator->fails()) {
			// Переданные данные не прошли проверку
			return Response::json(array(
							        'success' => false,
							        'errors' => $validator->getMessageBag()->toArray()
							    ), 400); // 400 being the HTTP code for an invalid request.	
		}else {
			FeedbackModel::where('product_id', $r->send['product_id'])
						 ->where('order_id', $r->send['order_id'])
						 ->where('user_id', Session::get('id'))
						 ->update(['feedback' => $r->send['feedback']]);
			return Response::json(array(
							        'success' => true
							    ), 200); // 200 being the HTTP code for an invalid request.	
		}
	}
}
