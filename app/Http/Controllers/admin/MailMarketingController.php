<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Mail\SendUserCode;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Models\SentCodes;

class MailMarketingController extends Controller
{
    protected function index(){
        return view('admin.mail-section');
    }

    /**
     * this function sends the email code to a customer
     */
    protected function sendCustomerCode(){
        $this->saveSentCode();
        Mail::to(request()->customer_email)->send(new SendUserCode);
        return redirect('/checkout')->with('msg','A Code has been sent to your email, kindly view it and confirm');
    }

    /**
     * this function generates the code that is sent to the user as a confirmation code
     */
    private function generateRandomString($length = 4) {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    /**
     * this function saves the code sent to the user, 
     * saves the email, and the sent code.
     */
    private function saveSentCode(){
        $sent_code_obj = new SentCodes;
        $sent_code_obj->users_email = request()->customer_email;
        $sent_code_obj->sent_code   = $this->generateRandomString();
        $sent_code_obj->save();
    }

    /**
     * this function gets the customer code
     */
    private function getUsersCode(){
        return SentCodes::where('users_email',request()->customer_email)->value('sent_code');
    }

}
