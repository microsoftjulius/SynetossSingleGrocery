<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Notifications\InvoicePaid;
use App\Models\User;

class NotificationController extends Controller
{
    protected function sendNotification(User $user){
        $invoice = 'invoice';
        $user->notify(new InvoicePaid($invoice));
    }
}
