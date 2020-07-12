<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    /*For email verification*/
    public function sendMail()
    {
    $data['title'] = "Test it from HDTutu.com";
    Mail::send('emails.email', $data, function($message) {
        $message->to('smilekishan.sk@gmail.com', 'Smile Kishan')
                ->subject('Email verification');
    });

    dd("Mail Sent successfully");
}
}
