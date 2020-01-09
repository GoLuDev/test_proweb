<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send()
    {
        Mail::send(['test' => 'mail'], ['name', 'Test'], function ($message){
           $message->to('dexoge8710@clsn.top', 'To Test')->subject('Test email');
           $message->from('testnametestsetname@yandex.com', 'Test');
        });
    }
}
