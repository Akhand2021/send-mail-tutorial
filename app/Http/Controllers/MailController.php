<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoEmail;


class MailController extends Controller
{
    public function sendEmail()
    {
        $details = [
            'title' => 'Mail from Laravel 9',
            'body' => 'This is a demo email from Algocodersmind.'
        ];

        Mail::to('jinugullu143@gmail.com')->send(new DemoEmail($details));

        return "Email sent successfully!";
    }
}
