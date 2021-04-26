<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cart;
use App\Models\DeliveryAddress;

class CheckoutController extends Controller
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
    protected function proceedToCheckout(Request $request){
        $user_cart          = $this->users_elements_in_cart->showUsersCart($request->session()->getId());
        $items_in_cart      = $this->users_elements_in_cart->getUsersItemsInCart($request->session()->getId());
        $total_amount       = $this->users_elements_in_cart->calculateTotalAmount($request->session()->getId());
        $delivery_charges   = $this->users_elements_in_cart->getDeleveryCharges();
        $total_saving       = $this->users_elements_in_cart->calculateTotalSaving($request->session()->getId());
        return view('front_page.checkout',compact('user_cart','items_in_cart','total_amount','delivery_charges','total_saving'));
    }

    /**
     * this function saves the clients phone number for verification
     */
    protected function verifyPhoneNumber(){

    }

    /**
     * this function saves the delivery address
     */
    protected function saveClientDeliveryAddress(Request $request){
        if(User::where('email',request()->email)->exists()){
            $user_id = User::where('email',request()->email)->value('id');
        }else{
            //create account for user
            User::create(array(
                'name' => request()->name,
                'email' => request()->email,
                'password' => Hash::make(request()->password)
            ));
            $user_id = User::where('email',request()->email)->value('id');
        }
        //update the users id in session
        Cart::where('session_id',$request->session()->getId())->update(array(
            'user_id' => $user_id
        ));
        return $this->saveDeliveryDetails($user_id);
    }

    /**
     * this function saves the delivery details
     */
    private function saveDeliveryDetails($user_id){
        DeliveryAddress::create(
            array(
                'address'   => request()->address,
                'user_id'   => $user_id,
                'flat'      => request()->flat,
                'street'    => request()->street,
                'pincode'   => request()->pincode,
                'locality'  => request()->locality
            )
        );
        return redirect()->back()->with('msg','Delivery details created Successfully');
    }

    /**
     * this function saves the delivery date and time
     */
    protected function saveDeliveryDateAndTime(){

    }

    /**
     * this function makes the payment
     */
}
