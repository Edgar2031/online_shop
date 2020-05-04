<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReviewModel;
use Session;
use Validator;
use Response;
use App\UserModel;

class ReviewController extends Controller
{
    // <= === add review === =>
	function add_review(Request $r){
		$validator = Validator::make(
		   $r->all(),
		    array(
		        'text' => 'required|min:20|max:200'
		    )
		);

		if ($validator->fails()) {
			// Переданные данные не прошли проверку
			return Response::json(array(
							        'success' => false,
							        'errors' => $validator->getMessageBag()->toArray()
							    ), 400); // 400 being the HTTP code for an invalid request.	
		}else {
			$review = new ReviewModel();
			$review->user_id = Session::get('id');
			$review->product_id = $r->id;
			$review->review = $r->text;
			$review->star = $r->star_count;
			$review->save();
			$user = UserModel::where('id', Session::get('id'))->first();
			return Response::json(array(
							        'success' => true,
							        'id' => $user->id,
							        'name' => $user->name,
							        'surname' => $user->surname,
							    ), 200); // 200 being the HTTP code for an invalid request.	
		}
	}


	// <= === remove review === =>
	function remove_review(Request $r){
		ReviewModel::where('id', $r->id)->where('user_id', Session::get('id'))->delete();
	}

}
