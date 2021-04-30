<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cart;
use App\Models\SentCodes;
use App\Models\DeliveryAddress;
use App\Models\DeliveryTimeAndDate;

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
     * this function confirms the code entered by the user
     */
    protected function confirmUserEnteredCode($user_email, $user_code){
        $user_email = base64_decode(base64_decode(base64_decode($user_email)));
        $sent_code = base64_decode(base64_decode(base64_decode($user_code)));
        SentCodes::where('users_email',$user_email)->where('sent_code',$sent_code)->update(array(
            'status' => 'verified'
        ));
        $user_email = base64_encode(base64_encode(base64_encode($user_email)));
        $sent_code = base64_encode(base64_encode(base64_encode($user_code)));
        return redirect('/checkout/'.$user_email)->with('msg','Code has been verified Successfully');
    }
    /**
     * this function saves the delivery date and time
     */
    protected function saveDeliveryDateAndTime($user_email){
        $delivery_time_and_date = new DeliveryTimeAndDate;
        $delivery_time_and_date->delivery_date = request()->date1;
        $delivery_time_and_date->delivery_time = request()->time_range;
        $delivery_time_and_date->user_id       = User::where('email',$user_email)->value('id');
        $delivery_time_and_date->save();
        return redirect()->back()->with('msg','Delivery time and date saved successfully');
    }

    /**
     * this function makes the payment
     */
    protected function makePayment(){
        return request();
        // if()
    }
}
