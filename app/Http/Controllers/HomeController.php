<?php

namespace App\Http\Controllers;

use App\User;
use App\Properties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        if(Auth::user()->role_user->role->name== "Agency"){
            return view('agency.dashboard');
        }
        else if(Auth::user()->role_user->role->name== "Owner"){
            return redirect('owner');
        }

    }
}
