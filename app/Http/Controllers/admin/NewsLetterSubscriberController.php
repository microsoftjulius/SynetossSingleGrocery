<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Mail\SubscriberMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Notifications\EmailNotification;
use App\Models\NewsLetterSubscriber;

class NewsLetterSubscriberController extends Controller
{
    protected function index(){
        $subscribers = NewsLetterSubscriber::get();
        return view('admin.news-letter-section',compact('subscribers'));
    }

    protected function createNewsLetterSubscriber(){
        $subscriber = new NewsLetterSubscriber;
        $subscriber->customer_name = request()->name;
        $subscriber->email         = request()->email;
        $subscriber->status        = request()->active;
        $subscriber->save();
        return $this->sendEmail();
    }

    private function sendEmail(){
        $email = request()->email;
        // $email = 'julisema4@gmailcom';
        Mail::to($email)->send(new SubscriberMail);
        return redirect()->back()->with('msg','Your subscription has been recieved successfully and an email has been sent you');
    }

    /**
     * this function is for subscribing for news letter
     */
    protected function subscriberNewsLetter(){
        if(NewsLetterSubscriber::where('subscribers_email',request()->email)->doesntExist()){
            NewsLetterSubscriber::create(array(
                'subscribers_email' => request()->email
            ));
        }
        return $this->sendEmail();
    }
}
