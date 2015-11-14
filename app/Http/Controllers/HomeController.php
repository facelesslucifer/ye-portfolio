<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use Mail;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.portfolio');
    }

    public function submit(Request $request)
    {
        $messages = [
            'required' => 'The :attribute field is required.',
            'g-recaptcha-response.required' => 'Please select the reCAPTCHA.',
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|max:255',
            'message' => 'required',
            'g-recaptcha-response' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($validator);
        }

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'messageText' => $request->message
        );

        Mail::send('emails.welcome', $data, function ($message) use ($request) {
            $message->from($request->email, 'Portfolio Website');
            $message->to('yelinhtun1987@gmail.com')->subject($request->subject);
        });

        $request->session()->flash('alert-success', 'Thank you!<br />Your message has been successfully sent. I will contact you very soon!!');
        return redirect()->back();
    }
}
