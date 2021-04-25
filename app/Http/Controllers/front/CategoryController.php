<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;

class CategoryController extends Controller
{
    protected function getAllCategoryItems($category_id){
        $decoded_string = base64_decode($category_id);
        $category_id = $decoded_string / env('ID_MULTIPLIER');
        $all_items_of_similar_category = Item::join('item_images','item_images.item_id','item.id')
        ->join('variation','item.id','variation.item_id')
        ->where('item.category_id',$category_id)
        ->where('item_status','available')->where('is_deleted','false')
        ->get();
        $category_name = Category::where('id',$category_id)->value('category_name');
        return view('front_page.category_products',compact('all_items_of_similar_category','category_name'));
    }
}
