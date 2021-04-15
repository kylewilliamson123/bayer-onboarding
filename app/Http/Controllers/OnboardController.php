<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\new_hire;
use App\User;

class OnboardController extends Controller
{

    // Construct, check if authenticated
    public function __construct()
    {
        // Require authorization to view route
        $this->middleware('auth');
    }


    // Get array of data related to the onboard
    public function getOnboardData($id)
    {
        // Get the new hire data where table row is equal to the url's id
        $data = new_hire::where('id', '=', $id)->first();
        return $data;
    }


    // Get all users
    public function getAllAdmins()
    {
        $admins = User::all()->pluck('name');
        return $admins;
    }
    

    public function index($id)
    {

        // Return the view with relevant data
        return view('onboard', [
            'newHire' => $this->getOnboardData($id),
            'popup' => session()->get( 'popup' ),
            'admins' => $this->getAllAdmins()
        ]);

    }
    
}
