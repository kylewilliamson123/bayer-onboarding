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
            'CWID' => trim( stripslashes( htmlspecialchars($_POST['cwid']))),
            'Region' => trim( stripslashes( htmlspecialchars($_POST['region']))),
            'FirstName' => trim( stripslashes( htmlspecialchars($_POST['first-name']))),
            'LastName' => trim( stripslashes( htmlspecialchars($_POST['last-name']))),
            'SeatNum' => trim( stripslashes( htmlspecialchars($_POST['seat-loc']))),
            'ManagerComments' => trim( stripslashes( htmlspecialchars($_POST['first-name']))),
            'OnBoardingBuddy' => trim( stripslashes( htmlspecialchars($_POST['first-name']))),
            'HireType' => trim( stripslashes( htmlspecialchars($_POST['hire-type']))),
            'HireStatus' => 'New',
            'Platform' => 'blank',
            'TeamName' => trim( stripslashes( htmlspecialchars($_POST['team-name']))),
            'Leader' => trim( stripslashes( htmlspecialchars($_POST['manager']))),
            'OBEmail' => '2014-06-26 04:07:31',
            'DIPd' => '2014-06-26 04:07:31',
            'ProdPlatformsStartDate' => '2014-06-26 04:07:31',
            'AssignedTo' => Auth::user()->name,
            'manager_id' => $_POST['manager'],
            'role_id' => $_POST['role'],
            'user_id' => 1,
        ]);

        return redirect('/dashboard');
    }
}
