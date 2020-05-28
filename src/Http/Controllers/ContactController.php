<?php

namespace test\contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use test\contact\Models\Contacts;
use test\contact\Mail\ContactMailable;

class ContactController extends Controller {

    public function index()
    {
        return view('contact::contact');
    }

    public function save(Request $request)
    {
        Mail::to(config('contact.send_to_mail'))->send(new ContactMailable($request->message, $request->name));
        Contacts::create($request->all());
        return redirect(route('contact'));
    }
}

