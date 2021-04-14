<?php

namespace App\Http\Controllers;

use App\manager;
use App\role;
use Illuminate\Http\Request;

class FormController extends Controller
{
    // Create and check auth
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getRoles()
    {
        $roles = role::all();
        return $roles;
    }

    public function getManagers()
    {
        $managers = manager::all();
        return $managers;
    }

    // Show view
    public function index()
    {
        return view('form', [
            'roles' => $this->getRoles(),
            'managers' => $this->getManagers()
        ]);
    }
}
