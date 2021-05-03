<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use Carbon;

class ClientWalletController extends Controller
{
    /**
     * Creating an instance of the client elements in cart so that we can access the showUsersCart method
     */
    public function __construct(){
        $this->users_elements_in_cart = new ClientShoppingCartController;
    }
    
    protected function getClientWallet(Request $request){
        $wallet_balance         = DB::table('wallets')->where('user_id',Auth::user()->id)->sum('raw_balance');
        $wallet_balance_update  = DB::table('wallets')->where('user_id',Auth::user()->id)->value('updated_at');
        $wallet_balance_update  = Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$wallet_balance_update)->format('Y-m-d');
        $user_cart              = $this->users_elements_in_cart->showUsersCart($request->session()->getId());
        $items_in_cart          = $this->users_elements_in_cart->getUsersItemsInCart($request->session()->getId());
        $total_amount           = $this->users_elements_in_cart->calculateTotalAmount($request->session()->getId());
        $delivery_charges       = $this->users_elements_in_cart->getDeleveryCharges();
        $total_saving           = $this->users_elements_in_cart->calculateTotalSaving($request->session()->getId());
        return view('front_page.wallet',compact('user_cart','items_in_cart','total_amount','delivery_charges','total_saving'
            ,'wallet_balance','wallet_balance_update'));
    }
}
