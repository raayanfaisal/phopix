<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;


class ContactMessegeController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'details' => 'required'
        ]);

        Mail::send('messege', [
            'dts' => $request->details
        ], function ($mail) use($request) {

              $mail->from($request->email, $request->name);
              
              $mail->to('info.phopix@gmail.com')->subject('Contact Messege');
        });

        return redirect()->back()->with('flash_messege', 'Thank you for your messege.');
    }
}
