<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\new_hire;

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
        //selects all newHire data and stores in a variable
        $new_hires = new_hire::all();
       
        //returns the data to the dashboard view
        return view('dashboard', [
           'new_hires' => $new_hires,
        ]);

    }
}
