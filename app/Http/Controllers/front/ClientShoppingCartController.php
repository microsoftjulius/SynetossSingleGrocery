<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Cart;
use Auth;

class ClientShoppingCartController extends Controller
{
    /**
     * this function adds the item to cart, it takes the item id
     */
    protected function addItemToCart(Request $request, $item_id){
        @$user_id = Auth::user()->id;
        if(Cart::where('session_id',$request->session()->getId())->where('item_id',$item_id)->exists()){
            return $this->incrementUserCart($item_id, $request->session()->getId());
        }else{
            return $this->createNewItemToCart($item_id, $request->session()->getId());
        }
    }

    /**
     * this function creates a new item to cart
     */
    private function createNewItemToCart($item_id, $session_id){
        $cart_item = array(
            'user_id'       => @$user_id,
            'session_id'    => $session_id,
            'item_id'       => $item_id,
            'quantity'      => 1
        );
        Cart::create($cart_item);
        return redirect()->back()->with('msg','New Item Added to Cart Successfully');
    }

    /**
     * this function increments the users cart, 
     * the cart can only be incremented when the product already exists for this user
     */
    private function incrementUserCart($item_id, $session_id){
        $increment = request()->value;
        if(empty($increment)){
            $increment = 1;
        }
        $incremented_cart_quantity = Cart::where('session_id',$session_id)->where('item_id',$item_id)->value('quantity') + $increment;
        Cart::where('session_id',$session_id)->where('item_id',$item_id)->update(
            array(
                'user_id' => @auth()->user()->id,
                'quantity' => $incremented_cart_quantity
            )
        );
        return redirect()->back()->with('msg','Number Of Items in your cart incremented successfully');
    }


    /**
     * this function gets the sum of products in users cart, 
     * this function is public because it can bew viewed from every where
     */
    public function showUsersCart($session_id){
        $items_in_cart = Cart::where('session_id',$session_id)->sum('quantity');
        return $items_in_cart;
    }
    
    /**
     * this function gets the Items in cart for the current user, its public because it can be accessed from other classes
     */
    public function getUsersItemsInCart($session_id){
        $user_items_in_Cart = Cart::where('session_id',$session_id)
        ->join('item','item.id','shopping_cart.item_id')
        ->join('variation','variation.item_id','item.id')
        ->join('item_images','item_images.item_id','item.id')
        ->get();
        return $user_items_in_Cart;
    }

    /**
     * this function calculates the amount of money a client is to pay for the items, ts public because it can be accessed from other classes
     */
    public function calculateTotalAmount($session_id){
        $total_amount = 0;
        foreach($this->getUsersItemsInCart($session_id) as $items_in_cart){
            if($items_in_cart->discount == 0){
                $total_amount = $total_amount + ($items_in_cart->price * $items_in_cart->quantity);
            }else{
                $total_amount = $total_amount + (($items_in_cart->price - ($items_in_cart->price 
                    * $items_in_cart->discount)) * $items_in_cart->quantity);
            }
        }
        return $total_amount;
    }

    /**
     * this function gets the delivery charges of the products
     */
    public function getDeleveryCharges(){
        return 1;
    }

    /**
     * this function calculates the total saving a customer has made
     */
    public function calculateTotalSaving($session_id){
        $total_saving = 0;
        foreach($this->getUsersItemsInCart($session_id) as $items_in_cart){
            if($items_in_cart->discount == 0){
                $total_saving = 0;
            }else{
                $total_saving = $total_saving + (($items_in_cart->price 
                    * $items_in_cart->discount) * $items_in_cart->quantity);
            }
        }
        return $total_saving;
    }
    
}
