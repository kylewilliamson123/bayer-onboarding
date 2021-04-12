<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function search()
    {
        //grab the search in a variable
        $search = Input::get("search");

        //the loop to store the results in $results
        $results = new_hires::where('FirstName','LIKE','%'.$search .'%')
        ->orWhere('LastName','LIKE','%'.$search.'%')
        ->orWhere('CWID','=',$search)
        ->get();

        //if there is more than 1 result, display
        if (count ($results) > 0)
        {
        
            return view('search')->withDetails($results)->withQuery($search);
        }
        //if there is no results, return this message 
        else
        {
            return view('search')->withMessage('No Results found.');
        }
    }// end search
}