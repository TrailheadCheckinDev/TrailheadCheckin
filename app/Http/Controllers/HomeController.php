<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = DB::table('users')->get();
        $instances = DB::table('instance')->orderBy('login_date', 'DESC')->get();
        $isAdmin = Auth::user()->email;
        $ourUser = Auth::user();
        //make a new table with name, email, timestamp, retrieve specific info user email and timestamp in this function and throw it into a new mysql query
        return view('home', ['users' => $users, 'isAdmin' => $isAdmin, 'instances' => $instances,'ourUser' => $ourUser]);
        //return view('home');
    }
}
