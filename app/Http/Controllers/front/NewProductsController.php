<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use Carbon\Carbon;

class NewProductsController extends Controller
{
    /**
     * Creating an instance of the client elements in cart so that we can access the showUsersCart method
     */
    public function __construct(){
        $this->users_elements_in_cart = new ClientShoppingCartController;
    }
    /**
     * this function gets the new products
     */
    protected function getNewProducts(Request $request){
        $new_products = Item::join('item_images','item_images.item_id','item.id')
        ->join('variation','variation.item_id','item.id')
        ->latest('item.id')
        ->select('item.*','item_images.image','variation.price','variation.discount','variation.weight','variation.stock')
        ->take('12')->get();
        $id_multiplier = env('ID_MULTIPLIER');
        $random_string = sha1(base64_encode($this->generateRandomString()));
        $user_cart          = $this->users_elements_in_cart->showUsersCart($request->session()->getId());
        $items_in_cart      = $this->users_elements_in_cart->getUsersItemsInCart($request->session()->getId());
        $total_amount       = $this->users_elements_in_cart->calculateTotalAmount($request->session()->getId());
        $delivery_charges   = $this->users_elements_in_cart->getDeleveryCharges();
        $total_saving       = $this->users_elements_in_cart->calculateTotalSaving($request->session()->getId());
        return view('front_page.new-products',compact('new_products','id_multiplier','random_string','user_cart','items_in_cart',
        'total_amount','delivery_charges','total_saving'));
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
