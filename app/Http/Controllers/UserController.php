<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Redirect;
use App\UserModel;
use Hash;
use Session;
use Mail;

class UserController extends Controller
{
	// <= === Register === =>
 	function r_register(Request $r) {
 		// dd($r->all());
 		$validator = Validator::make(
		   $r->all(),
		    array(
		        'name' => 'required|string|min:3',
		        'surname' => 'required|string|min:5',
		        'email' => 'required|email',
		        'age' => 'required|integer|min:16',
		        'password' => 'required|min:6',
		        'confirm' => 'required|same:password|min:6'
		    ),
		    array(
		    	'name.required' => 'datark',
		    	'email' => 'address error'
		    )
		);

 		$user = UserModel::where('email', $r->email)->first();
		$validator->after(function($validator) use($user){
			if ($user) {
				$validator->errors()->add('email', 'urish mail');		
			}
		});

		if ($validator->fails()) {
			// Переданные данные не прошли проверку
			return Redirect::to('/')
							->withErrors($validator)
							->withInput();
		}else {
			$user = new UserModel();
			$user->name = $r->name;
			$user->surname = $r->surname;
			$user->email = $r->email;
			$user->age = $r->age;
			$user->password =  Hash::make($r->password);
			$user->active = 0;
			$user->code = 0;
			$user->save();
			$url = array('name' => $user->name, 'id' => $user->id, 'hash' => md5($user->email . $user->id));
			Mail::send('mail', $url, function($m) use($user){
				$m->from('ed.arm.2000@gmail.com', 'Arduxi Admin');
				$m->to($user->email, "$user->name $user->surname")
					->subject('Account verification');
			});
			return Redirect::to('/');
		}
 	}

	// <= === Verify === =>
 	function g_verify($hash, $id){
 		$user = UserModel::where('id', $id)->first();
 		if ($user) {
 			if (md5($user->email . $user->id) == $hash) {
 				UserModel::where('id', $id)->update(['active' => 1]);
 				return Redirect::to('/');
 			}
 		}
 	}

	// <= === Forgot password === =>
	function g_user_verify(){
		return view('user_verify');
	}
	
 	function g_verify_password(Request $r){
 		$validator = Validator::make(
		   $r->all(),
		    array(
		        'verify_email' => 'email',
		    )
		);
		if ($validator->fails()) {
			// Переданные данные не прошли проверку
			return 1;
		}else {
			return '';
		}
 	}

 	function g_verify_password_send(Request $r){
 		$validator = Validator::make(
		   $r->all(),
		    array(
		        'verify_email_send' => 'email',
		    )
		);
		$user = UserModel::where('email', $r->verify_email_send)->first();
		$validator->after(function($validator) use($user){
			if (!$user) {
				$validator->errors()->add('email', 'urish email');	
			}
		});

		if ($validator->fails()) {
			// Переданные данные не прошли проверку
			return 1;
		}else {
			// Available alpha caracters
			$characters_large = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$characters_small = 'abcdefghijklmnopqrstuvwxyz';

			// generate a pin based on 2 * 1 digits + a random character
			$pin = mt_rand(0, 9)
			    	. $characters_large[rand(0, strlen($characters_large) - 1)]
			       	. mt_rand(0, 9)
			    	. $characters_small[rand(0, strlen($characters_small) - 1)]
			       	. mt_rand(0, 9);

			// shuffle the result
			$string = str_shuffle($pin);

			$url = array('name' => $user->name, 'id' => $user->id, 'code' => $string, 'hash' => md5($user->email . $user->id));
			Mail::send('code', $url, function($m) use($user){
				$m->from('ed.arm.2000@gmail.com', 'Arduxi Admin');
				$m->to($user->email, "$user->name $user->surname")
					->subject('Password');
			});

			UserModel::where('email', $user->email)
						->update(
							[
								'hash' => $string, 
							]
						);
		}
 	}

 	function g_verify_password_send_if(Request $r){
 		$user = UserModel::where('email', $r->email)->first();
 		if ($user->hash == $r->code) {
 			return '';
 		}else {
 			return 1;
 		}
 	}
	
	function g_verify_name_surname_check(Request $r){
		$user = UserModel::where('email', $r->email)->first();
 		if ($user->name == $r->name && $user->surname == $r->surname) {
 			return '';
 		}else {
 			return 'Wrong name and last name.';
 		}
	}

	function g_verify_change_password(Request $r){
		$validator = Validator::make(
		   $r->all(),
		    array(
		        'new_password' => 'required|min:6',
		        'new_password_confirm' => 'required|same:new_password|min:6'
		    )
		);
		if ($validator->fails()) {
			// Переданные данные не прошли проверку
			return 'Please try a different password';
		}else {
	 		UserModel::where('email', $r->email)
							->update(
								[
									'password' => Hash::make($r->new_password), 
								]
							);
		}
	}
	
	// <= === Login Check === =>
	function g_login_check(Request $r) {
		$validator = Validator::make(
		   $r->all(),
		    array(
		        'l_email' => 'required',
		        'l_password' => 'required|min:6',
		    )
		);
			
		$user = UserModel::where('email', $r->l_email)->first();
		$validator->after(function($validator) use($user, $r){
			if (!$user) {
				$validator->errors()->add('l_email', 'chka tenc mail');		
			}
			else if (!Hash::check($r->l_password, $user['password'])){
				$validator->errors()->add('l_password', 'sxal password');		
			}
			else if ($user->active == 0) {
				$validator->errors()->add('l_verification', 'verify your account');
			}
		});

		if ($validator->fails()) {
			// Переданные данные не прошли проверку
			return Redirect::to('/')->withErrors($validator)->withInput();
		}else {
			Session::put('id',$user['id']);
			return Redirect::to('/g_profile');
		}		
	}

	// <= === Profile === =>
	function profile() {
		$user = UserModel::where('id',Session::get('id'))->first();
		return view('g_profile')->with('user', $user);
	}

	// <= === Logout === =>
	function g_logout() {
		Session::flush();
		return Redirect::to('/');
	}

	// <= === My account Settings === =>
	function g_my_account() {
		$user = UserModel::where('id',Session::get('id'))->first();
		return view('my_account_settings')->with('user', $user);
	}
}
