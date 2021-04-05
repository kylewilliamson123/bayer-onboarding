<?php

namespace App\Http\Controllers;

use App\new_hire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubmitController extends Controller
{
    // Insert into the new hire table
    public function insert()
    {
        new_hire::insert([
            'CWID' => $_POST['cwid'],
            'Region' => $_POST['region'],
            'FirstName' => $_POST['first-name'],
            'LastName' => $_POST['last-name'],
            'SeatNum' => $_POST['seat-loc'],
            'ManagerComments' => $_POST['first-name'],
            'OnBoardingBuddy' => $_POST['first-name'],
            'HireType' => $_POST['hire-type'],
            'HireStatus' => 'New',
            'Platform' => 'blank',
            'TeamName' => $_POST['team-name'],
            'Leader' => $_POST['manager'],
            'OBEmail' => '2014-06-26 04:07:31',
            'DIPd' => '2014-06-26 04:07:31',
            'ProdPlatformsStartDate' => '2014-06-26 04:07:31',
            'AssignedTo' => Auth::user()->name,
        ]);

        return redirect('/dashboard');
    }
}
