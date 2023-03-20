<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {
        $details =[
            'title'=>'this Is Title ',
            'body'=>'this Is body ',

        ];

        Mail::to('bluenile5050@gmail.com')->send(new TestMail($details));

        return 'Email send';
    }
}
?>