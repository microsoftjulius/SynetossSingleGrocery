<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
