<?php

namespace Kwafomensah\Contact\Http\Controllers;

use  App\Http\Controllers\Controller;
use Carbon\PHPStan\Macro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Kwafomensah\Contact\Mail\ContactMailable;
use Kwafomensah\Contact\Models\Contact;


class ContactController extends Controller
{
    //
    public function index(){
        return view('contact::contact');
    }

    public function  send(Request  $request){


        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message,$request->name));
        Contact::create($request->all());
        return redirect(route('contact'));
    }
}
