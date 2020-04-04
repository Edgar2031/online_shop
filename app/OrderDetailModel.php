<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetailModel extends Model
{
    public $table = 'order_details';
    public $timestamps = false;

    public function order_pro(){
    	return $this->belongsTo("App\ProductModel", "product_id");
    }
}
