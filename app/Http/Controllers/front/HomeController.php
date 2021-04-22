<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Item;
use App\Models\Contact;
use App\Models\About;
use App\Models\Banner;
use App\Models\User;
use App\Models\Cart;
use App\Models\Ratting;
use Session;
use Validator;
use Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('front_page.index');
    }

    public function contact(Request $request)
    {
        if($request->firstname == ""){
            return response()->json(["status"=>0,"message"=>"First name is required"],200);
        }
        if($request->lastname == ""){
            return response()->json(["status"=>0,"message"=>"Last name is required"],200);
        }
        if($request->email == ""){
            return response()->json(["status"=>0,"message"=>"Email is required"],200);
        }
        if($request->message == ""){
            return response()->json(["status"=>0,"message"=>"Message is required"],200);
        }
        $contcat = new Contact;
        $contcat->firstname =$request->firstname;
        $contcat->lastname =$request->lastname;
        $contcat->email =$request->email;
        $contcat->message =$request->message;
        $contcat->save();

        if ($contcat) {
            return response()->json(['status'=>1,'message'=>'Your message has been successfully sent.!'],200);
        } else {
            return response()->json(['status'=>2,'message'=>'Something went wrong.'],200);
        }
    }

    /**
     * this function gets the new products
     */
    protected function getNewProducts(){

        return view('front_page.new-products');
    }

    /**
     * this function gets the featured products
     */
    protected function getFeaturedProducts(){
        return view('front_page.featured-products');
    }
}
