<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\new_hire;

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

        // Get the new hire where the onboard id is equal to the new hire's id
        $new_hires = new_hire::where('id', '=', $this->onboardId);

        // Return the view
        return view('onboard', [
            'new_hires' => $new_hires,
        ]);
    }
}
