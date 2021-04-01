<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnboardController extends Controller
{
    private $onboardId;

    public function __construct()
    {
        // Require authorization to view route
        $this->middleware('auth');
    }

    
    public function index($onboardId)
    {
        // Make the id of the onboard accessable to the class
        $this->onboardId = $onboardId;

        // Return the view
        return view('onboard');
    }
}
