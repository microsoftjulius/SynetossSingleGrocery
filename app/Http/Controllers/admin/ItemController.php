<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use App\Models\Category;
use App\Models\Item;
use App\Models\ItemImages;
use App\Models\Variation;
use App\Models\Cart;
use Validator;
use Illuminate\Support\Str;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index() {
        $getcategory = Category::all();
        $getitem = Item::select('item.*')->with('category')->with('variation')
        ->join('categories','item.category_id','=','categories.id')->where('item.is_deleted','false')
        ->where('categories.is_available','yes')->orderBy('item.id','asc')->get();

        return view('admin.item', compact('getcategory','getitem'));
    }

    function list()
    {
        $getitem = Item::select('item.*')->with('category')->join('categories','item.category_id','=','categories.id')->where('item.is_deleted','2')->where('categories.is_available','1')->get();
        return view('theme.itemtable',compact('getitem'));
    }

    function itemimages($id) {
        $getitemimages = ItemImages::where('item_id', $id)->get();
        $getvariation = Variation::where('item_id', $id)->get();
        $itemdetails = Item::join('categories','item.category_id','=','categories.id')->where('item.id', $id)->get()->first();
        return view('item-images', compact('getitemimages','itemdetails','getvariation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    function store(Request $request)
    {
        $validation = Validator::make($request->all(),[
        'category_id' => 'required',
        'item_name' => ['required',Rule::unique('item')->where(function ($query) use ($request) {
                return $query->where('item_status', 'available')->where('is_deleted', 'false');
            })],
        'file.*' => 'required|mimes:jpeg,png,jpg'
        ]);
        $error_array = array();
        $success_output = '';
        if ($validation->fails())
        {
            foreach($validation->messages()->getMessages() as $field_name => $messages)
            {
                $error_array[] = $messages;
            }
        }
        else
        {
            
            // $pricearray = explode(',', $request->price);
            // $weightarray = explode(',', $request->weight);
                $item = new Item;
                $item->category_id =$request->category_id;
                $item->item_name =$request->item_name;
                $item->brand =$request->brand;
                $item->manufacturer =$request->manufacturer;
                $item->country_origin =$request->country_origin;
                $item->ingredient_type =$request->ingredient_type;
                $item->item_description =$request->description;
                $item->delivery_time =$request->delivery_time;
                $item->slug = Str::slug($request->item_name, '-');
                $item->save();

                $price = $request->price;
                $weight = $request->weight;
                $stockqty= $request->stockqty;
                foreach($price as $key => $no)
                {
                    $input['item_id'] =$item->id;
                    $input['price'] = $no;
                    $input['weight'] = $weight[$key];
                    $input['stock'] = $stockqty[$key];

                    Variation::create($input);
                }


                if ($request->hasFile('file')) {
                    $files = $request->file('file');
                    foreach($files as $file){

                        $itemimage = new ItemImages;
                        $image = 'item-' . uniqid() . '.' . $file->getClientOriginalExtension();

                        

                        $file->move('images/item', $image);

                        $itemimage->item_id =$item->id;
                        $itemimage->image =$image;
                        $itemimage->save();
                    }
                }

                $success_output = 'Item Added Successfully!';
            
        }
        $output = array(
            'error'     =>  $error_array,
            'success'   =>  $success_output,
        );
        // echo json_encode($output);
        return redirect()->back()->with('msg',json_encode($output));
    }

    function storeimages(Request $request)
    {
        $validation = Validator::make($request->all(),[
        'file.*' => 'required|mimes:jpeg,png,jpg'
        ]);
        $error_array = array();
        $success_output = '';
        if ($validation->fails())
        {
            foreach($validation->messages()->getMessages() as $field_name => $messages)
            {
                $error_array[] = $messages;
            }
        }
        else
        {

            if ($request->hasFile('file')) {
                $files = $request->file('file');
                foreach($files as $file){

                    $itemimage = new ItemImages;
                    $image = 'item-' . uniqid() . '.' . $file->getClientOriginalExtension();

                    

                    $file->move('images/item', $image);

                    // dd($image);
                    $itemimage->item_id =$request->itemid;
                    $itemimage->image =$image;
                    $itemimage->save();
                }
            }

            $success_output = 'Item Added Successfully!';
        }
        $output = array(
            'error'     =>  $error_array,
            'success'   =>  $success_output
        );
        echo json_encode($output);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function show(Request $request)
    {
        $item = Item::findorFail($request->id);
        $getitem = Item::with('variation')->where('id',$request->id)->first();
        return response()->json(['ResponseCode' => 1, 'ResponseText' => 'Item fetch successfully', 'ResponseData' => $getitem], 200);
    }

    function showimage(Request $request)
    {
        $getitem = ItemImages::where('id',$request->id)->first();
        if($getitem->image){
            $getitem->img=url('images/item/'.$getitem->image);
        }
        return response()->json(['ResponseCode' => 1, 'ResponseText' => 'Item Image fetch successfully', 'ResponseData' => $getitem], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function update(Request $request)
    {
        $validation = Validator::make($request->all(),[
        'getcategory_id' => 'required',
        'item_name' => ['required',Rule::unique('item')->where(function ($query) use ($request) {
            return $query->where('item_status', '1')->where('is_deleted', '2')->where('id',"!=", $request->id);
            })],
        'getdescription' => 'required'
        ]);

        $error_array = array();
        $success_output = '';
        if ($validation->fails())
        {
            foreach($validation->messages()->getMessages() as $field_name => $messages)
            {
                $error_array[] = $messages;
            }
        }
        else
        {
            $deletefromcart=Cart::where('item_id', $request->id)->delete();

            $item = new Item;
            $item->exists = true;
            $item->id = $request->id;

            $item->category_id =$request->getcategory_id;
            $item->item_name =$request->item_name;
            $item->brand =$request->getbrand;
            $item->manufacturer =$request->getmanufacturer;
            $item->country_origin =$request->getcountry_origin;
            $item->ingredient_type =$request->getingredient_type;
            $item->item_description =$request->getdescription;
            $item->delivery_time =$request->getdelivery_time;
            $item->slug =\Str::slug($request->category_name);
            $item->save();

            $variationdlt = Variation::where('item_id', $request->id)->delete();

            $price = $request->price;
            $weight = $request->weight;
            $stockqty= $request->stockqty;

            foreach($price as $key => $no)
            {
                $input['item_id'] =$item->id;
                $input['price'] = $no;
                $input['weight'] = $weight[$key];
                $input['stock'] = $stockqty[$key];

                Variation::create($input);
            }

            $success_output = 'Item updated Successfully!';
        }
        $output = array(
            'error'     =>  $error_array,
            'success'   =>  $success_output
        );
        echo json_encode($output);
    }

    function updateimage(Request $request)
    {
        $validation = Validator::make($request->all(),[
        'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $error_array = array();
        $success_output = '';
        if ($validation->fails())
        {
            foreach($validation->messages()->getMessages() as $field_name => $messages)
            {
                $error_array[] = $messages;
            }
        }
        else
        {
            $itemimage = new ItemImages;
            $itemimage->exists = true;
            $itemimage->id = $request->id;

            if(isset($request->image)){
                if($request->hasFile('image')){
                    $image = $request->file('image');
                    $image = 'item-' . uniqid() . '.' . $request->image->getClientOriginalExtension();
                    $request->image->move('images/item', $image);
                    $itemimage->image=$image;

                    // unlink(path('images/item/'.$request->old_img));
                }            
            }
            $itemimage->save();           

            $success_output = 'Item updated Successfully!';
        }
        $output = array(
            'error'     =>  $error_array,
            'success'   =>  $success_output
        );
        echo json_encode($output);
    }

    function status(Request $request)
    {
        $UpdateDetails = Item::where('id', $request->id)
                    ->update(['item_status' => $request->status]);
        $UpdateCart = Cart::where('item_id', $request->id)
                            ->delete();
        if ($UpdateDetails) {
            return 2;
        } else {
            return 0;
        }
    }

    function delete(Request $request)
    {
        $UpdateDetails = Item::where('id', $request->id)
                    ->update(['is_deleted' => '1']);
        $UpdateCart = Cart::where('item_id', $request->id)
                            ->delete();
        if ($UpdateDetails) {
            return 2;
        } else {
            return 0;
        }
    }
    
    function destroyimage(Request $request)
    {
        $getitemimages = ItemImages::where('item_id', $request->item_id)->count();

        if ($getitemimages > 1) {
        $itemimage=ItemImages::where('id', $request->id)->delete();
        if ($itemimage) {
            return 1;
        } else {
            return 0;
        }
        } else {
            return 2;
        }        
    }
}
