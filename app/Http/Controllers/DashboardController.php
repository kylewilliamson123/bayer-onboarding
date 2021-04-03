<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\new_hire;

class DashboardController extends Controller
{
    
    // Construct, check if user is authenticated
    public function __construct()
    {
        $this->middleware('auth');
    }


    // Show the application dashboard
    public function index()
    {

        //returns the data to the dashboard view
        return view('dashboard', [
           'allNewHires' => new_hire::all(),
           //'userNewHires' => new_hire::where('admin', '=', Auth::user()->name),
           'popup' => session()->get( 'popup' ),
        ]);
        
    }

}
