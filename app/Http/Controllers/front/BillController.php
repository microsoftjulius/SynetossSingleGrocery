<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BillController extends Controller
{
    protected function getClientBill(){
        return view('front_page.bill');
    }
}
