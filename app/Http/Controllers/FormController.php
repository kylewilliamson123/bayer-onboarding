<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    // Create and check auth
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Show 
    public function index()
    {
        return view('form');
    }
}
