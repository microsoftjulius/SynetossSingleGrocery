<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MarketCampaign;
use Auth;

class MarketingController extends Controller
{
    protected function index(){
        $market_campaign = MarketCampaign::all();
        return view('admin.marketing',compact('market_campaign'));
    }

    protected function addMarketing(){
        return view('admin.add_marketing');
    }

    protected function saveMarketing(){
        $market_obj = new MarketCampaign;
        $market_obj->campaign_name = request()->name;
        $market_obj->campaign_description = request()->description;
        $market_obj->campaign_code = request()->code;
        $market_obj->campaign_example1 = request()->example1;
        $market_obj->campaign_example2 = request()->example2;
        $market_obj->created_by        = Auth::user()->id;
        $market_obj->save();
        return redirect()->back()->with('msg','New Marketing Campaign has been created successfuly');
    }
}
