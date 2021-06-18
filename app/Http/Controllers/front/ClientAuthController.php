<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Auth;

class ClientAuthController extends Controller
{
    /**
     * this function takes to the signin page
     */
    protected function signInPage(){
        return view('front_page.sign_in');
    }

    /**
     * this function takes to the signup page
     */
    protected function signUpPage(){
        return view('front_page.sign_up');
    }

    /**
     * this function takest to the forgot password page
     */
    protected function forgotPassword(){
        return view('front_page.forgot_password');
    }

    /**
     * this function registers the account
     */
    protected function registerAccount(){
        if(request()->password1 == request()->password2){
            $user_info = new User;
            $user_info->name = request()->fullname;
            $user_info->email = request()->emailaddress;
            $user_info->mobile = request()->phone;
            $user_info->password = Hash::make(request()->password1);
            $user_info->save();
            
            $user_id = User::where('email',request()->emailaddress)->value('id');
            $user = User::find($user_id);
            Auth::login($user);
            return redirect('/dashboard');
        }else{
            return redirect()->back()->withErrors('Make sure the two passwords match');
        }
    }
    
}
