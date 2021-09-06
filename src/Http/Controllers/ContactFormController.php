<?php

namespace lemonpatwari\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use lemonpatwari\Contact\Mail\ContactMailable;
use lemonpatwari\Contact\Models\ContactForm;

class ContactFormController extends Controller
{
    public function index()
    {
        return view('contact::contact.index');
    }

    public function store(Request $request)
    {
        Mail::to(config('contact.email'))->send(new ContactMailable($request->description, $request->email));
        ContactForm::create($request->all());

        return back();
    }
}
