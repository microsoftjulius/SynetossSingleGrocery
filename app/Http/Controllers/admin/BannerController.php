<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Item;
use Validator;
class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getbanner = Banner::join('item','item.id','banner.item_id')
        ->select('item.item_name','banner.*')->orderBy('banner.id','Desc')->get();
        $getitem = Item::all();
        return view('admin.banner',compact('getbanner','getitem'));
    }

    public function list()
    {
        $getbanner = Banner::with('item')->get();
        return view('theme.bannertable',compact('getbanner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $s
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $error_array = array();
        $success_output = '';
        $image = 'banner-' . uniqid() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move('images/banner', $image);

        $item_id = Item::where('item_name',request()->item_name)->value('id');
        if(empty($item_id)){
            return redirect()->back()->withErrors("Please select an item from the list")->withInput();
        }
        $banner = new Banner;
        $banner->image =$image;
        $banner->item_id =$item_id;
        $banner->promotion_runs_upto = request()->promotion_runs_upto;
        $banner->save();
        $success_output = 'Banner Added Successfully!';
        $output = array(
            'error'     =>  $error_array,
            'success'   =>  $success_output
        );
        // echo json_encode($output);
        return redirect()->back()->with('msg',json_encode($output));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $banner = Banner::findorFail($request->id);
        $getbanner = Banner::where('id',$request->id)->first();
        if($getbanner->image){
            $getbanner->image=url('images/banner/'.$getbanner->image);
        }
        return response()->json(['ResponseCode' => 1, 'ResponseText' => 'Banner fetch successfully', 'ResponseData' => $getbanner], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $req)
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
    public function update(Request $request)
    {
        $error_array = array();
        $success_output = '';
        $banner = new Banner;
        $banner->exists = true;
        $banner->id = $request->id;
        $banner->item_id = $request->item_id;

        if(isset($request->image)){
            if($request->hasFile('image')){
                $image = $request->file('image');
                $image = 'banner-' . uniqid() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move('images/banner', $image);
                $banner->image=$image;
            }            
        }
        $banner->save();           

        $success_output = 'Banner updated Successfully!';
        $output = array(
            'error'     =>  $error_array,
            'success'   =>  $success_output
        );
        echo json_encode($output);
    }

    public function updateorder(Request $request)
    {
        $posts = Banner::all();

        foreach ($posts as $post) {
            
            foreach ($request->order as $order) {
                if ($order['id'] == $post->id) {
                    $post->update(['order' => $order['position']]);
                }
            }
        }
        
        if ($post) {
            return 1;
        } else {
            return 0;
        }
    }

    public function status(Request $request)
    {
        $banner = Banner::where('id', $request->id)->update( array('is_available'=>$request->status) );
        if ($banner) {
            return 1;
        } else {
            return 0;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner=Banner::where('id', $id)->delete();
        if ($banner) {
            return redirect()->back()->with('msg','Operation Successful');
        } else {
            return redirect()->back()->with('msg','Unknown Error');
        }
    }
}
