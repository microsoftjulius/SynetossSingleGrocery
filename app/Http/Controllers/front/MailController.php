<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\VerifictionEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    protected function sendEmail(){
        Mail::to('julisema4@gmail.com')->send(new VerifictionEmail);
    }
}
