<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use app\modelName
use App\new_hire;
class NewHireController extends Controller
{
    public function newHireFunction(){
        //selects all newHire data and stores in a variable
        $new_hires = new_hire::all();
       
        //returns the data to the dashboard view
       return view('dashboard', [
           'new_hires' => $new_hires,
       ]);
    }

    //selects all newHire data and sends to onboard view
    public function newHireOnboard(){
        $new_hires = new_hire::all();

        return view('onboard', [
            'new_hires' => $new_hires,
        ]);
    }
}
