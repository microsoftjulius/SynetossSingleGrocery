<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\SentCodes;

class SendUserCode extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('customers.codes.send_code',[
            'url' =>  asset('/checkout/'.base64_encode(base64_encode(base64_encode(request()->customer_email))).'/'
            .base64_encode(base64_encode(base64_encode($this->getUserCode())))),
            'code' => $this->getUserCode()
        ]);
    }

    /**
     * this function gets the code that was sent to the user
     */
    private function getUserCode(){
        return SentCodes::where('users_email',request()->customer_email)->value('sent_code');
    }
}
