<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;

class CategoryController extends Controller
{

    /**
     * Creating an instance of the client elements in cart so that we can access the showUsersCart method
     */
    public function __construct(){
        $this->users_elements_in_cart = new ClientShoppingCartController;
    }

    /**
     * this function gets all items of the category that is passed as a parameter
     */
    protected function getAllCategoryItems($category_id, Request $request){
        $decoded_string = base64_decode($category_id);
        $category_id = $decoded_string / env('ID_MULTIPLIER');
        $all_items_of_similar_category = Item::join('item_images','item_images.item_id','item.id')
        ->join('variation','item.id','variation.item_id')
        ->where('item.category_id',$category_id)
        ->where('item_status','available')->where('is_deleted','false')
        ->get();
        $category_name = Category::where('id',$category_id)->value('category_name');
        $user_cart          = $this->users_elements_in_cart->showUsersCart($request->session()->getId());
        $items_in_cart      = $this->users_elements_in_cart->getUsersItemsInCart($request->session()->getId());
        $total_amount       = $this->users_elements_in_cart->calculateTotalAmount($request->session()->getId());
        $delivery_charges   = $this->users_elements_in_cart->getDeleveryCharges();
        $total_saving       = $this->users_elements_in_cart->calculateTotalSaving($request->session()->getId());
        return view('front_page.category_products',compact('all_items_of_similar_category','category_name','user_cart',
        'items_in_cart','total_amount','delivery_charges','total_saving'));
    }
}
