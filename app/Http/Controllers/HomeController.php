<?php

namespace App\Http\Controllers;

use App\Date;
use App\Player;
use Illuminate\Support\Facades\Auth;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::get();
        $dates = Date::where('user_id', Auth::user()->id)->get();
        return view('home', compact('dates', 'players'));
    }
}
