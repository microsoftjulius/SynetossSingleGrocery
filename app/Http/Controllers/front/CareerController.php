<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CareerController extends Controller
{
     /**
     * Creating an instance of the client elements in cart so that we can access the showUsersCart method
     */
    public function __construct(){
        $this->users_elements_in_cart = new ClientShoppingCartController;
    }

    /**
     * this function takes to the checkout for users products
     */
    protected function getCareer(Request $request){
        $user_cart          = $this->users_elements_in_cart->showUsersCart($request->session()->getId());
        $items_in_cart      = $this->users_elements_in_cart->getUsersItemsInCart($request->session()->getId());
        $total_amount       = $this->users_elements_in_cart->calculateTotalAmount($request->session()->getId());
        $delivery_charges   = $this->users_elements_in_cart->getDeleveryCharges();
        $total_saving       = $this->users_elements_in_cart->calculateTotalSaving($request->session()->getId());
        return view('front_page.career',compact('user_cart','items_in_cart','total_amount','delivery_charges','total_saving'));
    }
}
