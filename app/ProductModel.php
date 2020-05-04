<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    public $table = 'products';
    public $timestamps = false;
    public function Seller(){
    	return $this->belongsTo('App\UserModel', 'user_id');
    													// 3 id
    }
    
    public function p_photo(){
    	return $this->hasMany("App\PhotoModel", "product_id");
    }

    public function review(){
    	return $this->hasMany("App\ReviewModel", "product_id");
    }

    public function feedback(){
    	return $this->hasMany("App\FeedbackModel", "product_id");
    }
}
