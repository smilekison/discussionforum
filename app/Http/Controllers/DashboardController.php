<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
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
        //To get the user logged in id
        $user_id = auth()->user()->id;

        //To find the user id from database in post table.
        $user = User::find($user_id);

         //echo $user;

        //With for getting user with the specific user id related with post which is described in relation ship in user and post model
        return view('dashboard')->with('news', $user->news);

    }
}