<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect;
use App\Models\Payment;
use Validator;
use Stripe;
use Session;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getpayment = Payment::get();
        return view('admin.payment',compact('getpayment'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function managepayment($id) {
        $paymentdetails = Payment::where('id', $id)->get()->first();
        // return $paymentdetails;
        return view('admin.manage-payment', compact('paymentdetails'));
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
        $payment = new Payment;
        $payment->exists = true;
        $payment->id = $request->id;

        $payment->test_public_key =$request->test_public_key;
        $payment->test_secret_key =$request->test_secret_key;
        $payment->live_public_key =$request->live_public_key;
        $payment->live_secret_key =$request->live_secret_key;
        $payment->save();

        return redirect()->back()->with('msg', "Payment Details has been updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function status(Request $request)
    {
        $payment = Payment::where('id', $request->id)->update( array('is_available'=>$request->status) );
        if ($payment) {
            return 1;
        } else {
            return 0;
        }
    }

    /**
     * this function tests the payment
     */
    protected function testPayment(Request $request){
        // $token = $request->stripeToken;
        $token = 'dasdojr7423099842';
        // return 3;
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 120 * 100,
                "currency" => "inr",
                "source" => $token,
                "description" => "Make payment and chill." 
        ]);

        Session::flash('success', 'Payment successfully made.');
            
        return back();
    }
}
