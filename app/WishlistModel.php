<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WishlistModel extends Model
{
    public $table = 'wishlist';
    public $timestamps = false;
    public function Pro_product(){
    	return $this->belongsTo("App\ProductModel", "product_id");
    }

  	public function User(){
    	return $this->belongsTo('App\UserModel', 'user_id');
    }
}
