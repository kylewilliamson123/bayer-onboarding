<?php

namespace App\Http\Controllers;

use App\new_hire;
use Illuminate\Http\Request;

class FinishedController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index(Request $request)
    {
        $search = $request->input("search");
        return view('finished',
        [
            'searchResults' => $this-> search($search)]);
    }

    public function search($search)
    {
        //grab the search in a variable

        //the loop to store the results in $results
        $results = new_hire::where([['FirstName','LIKE','%'.$search .'%'], ['CompletionStatus', '=', 'finished']])
        ->orWhere([['LastName','LIKE','%'.$search.'%'], ['CompletionStatus', '=', 'finished']])
        ->orWhere([['CWID','LIKE','%'.$search.'%'], ['CompletionStatus', '=', 'finished']])
        ->get();

        //if there is more than 1 result, display
        if(isset($results))
        {
            return $results;
        }
        //if there is no results, return this message 
        else
        {
            return false;
        }
    }// end search
}