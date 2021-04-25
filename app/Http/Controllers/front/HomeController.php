<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
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
     * this function returns the 
     * 1. Categories that have been created and are active
     */
    public function index()
    {
        $all_categories     = $this->getAvailableCategories();
        $item_per_category  = $this->getItemFromEachCategory();
        $id_multiplier      = env('ID_MULTIPLIER');
        $random_string      = sha1(base64_encode($this->generateRandomString()));
        $new_products       = $this->getLatestUploadedItems();
        return view('front_page.index',compact('all_categories','item_per_category','id_multiplier','random_string','new_products'));
    }

    /**
     * this function returns the categories that have been created and are available
     */
    private function getAvailableCategories(){
        return Category::where('is_deleted','no')->where('is_available','yes')->get();
    }
    
    /**
     * this function gets atleast one item from every category
     */
    private function getItemFromEachCategory(){
        return Item::join('item_images','item_images.item_id','item.id')
        ->where('item_status','available')->where('is_deleted','false')->get()->unique('category_id');
    }

    /**
     * this function generates the random string
     */
    private function generateRandomString($length = 295) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    /**
     * this function gets latest uploaded items and returns them
     */
    private function getLatestUploadedItems(){
        return Item::join('item_images','item_images.item_id','item.id')->join('variation','item.id','variation.item_id')
        ->latest('item.created_at')->take(4)->get();
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
        $new_products = Item::latest('id')->take('12')->get();
        return view('front_page.new-products',compact('new_products'));
    }

    /**
     * this function gets the featured products
     */
    protected function getFeaturedProducts(){
        return view('front_page.featured-products');
    }
}
