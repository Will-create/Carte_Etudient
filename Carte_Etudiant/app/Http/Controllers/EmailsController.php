<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Email;
use App\Mail\EmailsMail;
class EmailsController extends Controller
{
    public function create()
    {
        $emails=Email::all();
        return view('emails.create',compact('emails'));
    }

    public function store(Request $request)
    {
        $data=request()->validate([
            'nom'=> ['required','string'],
            'email'=> ['required','email'],
            'message'=> ['required'],
          ]);

    Mail::to('test@test.com')->send(new EmailsMail());
            
    }  
}
