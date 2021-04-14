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


    // Get all onboards that are open
    public function getOpenOnboards()
    {
        $data = new_hire::where('CompletionStatus', 'LIKE', 'Open')->get();
        return $data;
    }


    // Get all open onboards assigned to the authenticated user
    public function getOpenUserOnboards()
    {
        $data = new_hire::where([
            ['AssignedTo', '=', Auth::user()->name],
            ['CompletionStatus', '=', 'Open']
        ])->get();
        return $data;
    }


    


    // Show the application dashboard
    public function index()
    {
        //returns the data to the dashboard view
        return view('dashboard', [
           'allNewHires' => $this->getOpenOnboards(),
           'userNewHires'=> $this->getOpenUserOnboards(),
           'popup' => session()->get( 'popup' ),
        ]);

    }

}
