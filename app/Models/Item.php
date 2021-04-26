<?php

namespace App\Models;

use Appstract\Stock\HasStock;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Item extends Model
{
    use HasStock;
    use Sluggable;
    
    protected $table='item';
    protected $fillable=['category_id','item_name','item_description','delivery_time','clicks'];

    public function category(){
        return $this->hasOne('App\Models\Category','id','category_id');
    }

    public function itemimage(){
        return $this->hasOne('App\Models\ItemImages','item_id','id')->select('item_images.id','item_images.item_id', 'item_images.image as image_name',\DB::raw("CONCAT('".url('/public/images/item/')."/', item_images.image) AS image"));
    }

    public function variation(){
        return $this->hasMany('App\Models\Variation','item_id','id')->select('variation.id','variation.item_id','variation.weight','variation.price','variation.stock');
    }

    public function itemimagedetails(){
        return $this->hasMany('App\Models\ItemImages','item_id','id')->select('item_id', 'item_images.image as image_name',\DB::raw("CONCAT('".url('/public/images/item/')."/', image) AS itemimage"));
    }

    public function ingredients(){
        return $this->hasMany('App\Models\Ingredients','item_id','id')->select('item_id',\DB::raw("CONCAT('".url('/public/images/ingredients/')."/', image) AS ingredients_image"));
    }

    public function addons(){
        return $this->hasMany('App\Models\Addons','item_id','id')->select('id','name','price','item_id')->where('is_available','=','1');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'category_name'
            ]
        ];
    }
}