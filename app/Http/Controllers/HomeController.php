<?php

namespace App\Http\Controllers;

use App\Models\Poll;
use App\Models\Result;
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
        $this->middleware('auth')->except('index');
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
    public function coming_soon()
    {
        return view('coming_soon');
    }
    // Dashborad methods for the dashboard
    public function dashboard()
    {
        // Get this user polls
        $polls = Poll::where('user_id', '=', auth()->user()->id)->get();
        // Get this user's answers
        $result = Result::where('user_id', '=', auth()->user()->id)->get();
        // dd polls and answers
        return view('dashboard', compact('polls', 'result'));
        // return view('dashboard');
    }

}
