<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table='shopping_cart';
    protected $fillable=['user_id','item_id','quantity','session_id'];

    public function itemimage(){
        return $this->hasOne('App\ItemImages','item_id','item_id')->select('item_images.id','item_images.item_id',\DB::raw("CONCAT('".url('/public/images/item/')."/', item_images.image) AS image"));
    }
}
