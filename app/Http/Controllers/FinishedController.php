<?php

namespace App\Http\Controllers;

use App\new_hire;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class FinishedController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        return view('finished');
    }

    public function search(Request $request)
    {
        //grab the search in a variable
        $search = $request->input("search");

        //the loop to store the results in $results
        $results = new_hire::where('FirstName','LIKE','%'.$search .'%')
        ->orWhere('LastName','LIKE','%'.$search.'%')
        ->orWhere('CWID','=',$search)
        ->first();
        die($results);

        //if there is more than 1 result, display
        if (count ($results) > 0)
        {
        
            return view('finished')->withDetails($results)->withQuery($search);
        }
        //if there is no results, return this message 
        else
        {
            return view('finished')->withMessage('No Results found.');
            
        }
    }// end search
}