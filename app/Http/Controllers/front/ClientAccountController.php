<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\User;

class ClientAccountController extends Controller
{
    /**
     * Creating an instance of the client elements in cart so that we can access the showUsersCart method
     */
    public function __construct(){
        $this->users_elements_in_cart = new ClientShoppingCartController;
    }

    /**
     * this function displays the account for the client after they have loggedin
     */
    protected function showClientAccount(Request $request){
        if(DB::table('wallets')->where('user_id',Auth::user()->id)->doesntexist()){
            $this->createCustomerWallet();
        }
        $wallet_balance     = $this->getWalletBalance();
        $user_cart          = $this->users_elements_in_cart->showUsersCart($request->session()->getId());
        $items_in_cart      = $this->users_elements_in_cart->getUsersItemsInCart($request->session()->getId());
        $total_amount       = $this->users_elements_in_cart->calculateTotalAmount($request->session()->getId());
        $delivery_charges   = $this->users_elements_in_cart->getDeleveryCharges();
        $total_saving       = $this->users_elements_in_cart->calculateTotalSaving($request->session()->getId());
        return view('front_page.dashboard',compact('user_cart','items_in_cart','total_amount','delivery_charges','total_saving',
            'wallet_balance'));
    }

    /**
     * this function creates the wallet for a customer
     */
    private function createCustomerWallet(){
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        $user->wallets()->create();
    }

    /**
     * this function adds money to the user wallet account
     */
    private function incrementUserWallet(){
        $user_id = Auth::user()->id;
        $user    = User::find($user_id);
        $wallet->incrementBalance(100);
    }

    /**
     * this function gets the users wallet balance
     */
    private function getWalletBalance(){
        return DB::table('wallets')->where('user_id',Auth::user()->id)->sum('raw_balance');
    }
}
