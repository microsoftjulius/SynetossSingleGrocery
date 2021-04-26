<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    /**
     * Creating an instance of the client elements in cart so that we can access the showUsersCart method
     */
    public function __construct(){
        $this->users_elements_in_cart = new ClientShoppingCartController;
    }
    /**
     * this function gets the new product on a single page, it comes with the products details
     */
    protected function viewNewProductSingle($item_id, Request $request){
        $decoded_string = base64_decode($item_id);
        $item_id = $decoded_string / env('ID_MULTIPLIER');
        $item_details = Item::join('item_images','item_images.item_id','item.id')
        ->join('variation','item.id','variation.item_id')
        ->where('item.id',$item_id)
        ->where('item_status','available')->where('is_deleted','false')
        ->get();

        //update the number of clicks
        Item::where('id',$item_id)->update(array(
            'clicks' => Item::where('id',$item_id)->value('clicks') + 1
        ));

        $category_id = Item::where('id',$item_id)->value('category_id');
        $related_products = $this->getRelatedItems($category_id, $item_id);
        $id_multiplier = env('ID_MULTIPLIER');
        $random_string = sha1(base64_encode($this->generateRandomString()));

        $user_cart          = $this->users_elements_in_cart->showUsersCart($request->session()->getId());
        $items_in_cart      = $this->users_elements_in_cart->getUsersItemsInCart($request->session()->getId());
        $total_amount       = $this->users_elements_in_cart->calculateTotalAmount($request->session()->getId());
        $delivery_charges   = $this->users_elements_in_cart->getDeleveryCharges();
        $total_saving       = $this->users_elements_in_cart->calculateTotalSaving($request->session()->getId());

        return view('front_page.single-product-view',compact('item_details','related_products','id_multiplier','random_string',
        'user_cart','items_in_cart','total_amount','delivery_charges','total_saving'));
    }

    /**
     * this function gets the related items
     */
    private function getRelatedItems($category_id, $item_id){
        $related_products = Item::join('item_images','item_images.item_id','item.id')
        ->join('variation','item.id','variation.item_id')
        ->where('item.category_id',$category_id)
        // ->where('item.id','!=',$item_id)
        ->where('item_status','available')->where('is_deleted','false')
        ->select('item.*','item_images.image','variation.item_id','variation.price','variation.weight','variation.stock',
            'variation.variation_id','variation.discount')
        ->get();
        return $related_products;
    }

    /**
     * this function generates the random string
     */
    private function generateRandomString($length = 295) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

}
