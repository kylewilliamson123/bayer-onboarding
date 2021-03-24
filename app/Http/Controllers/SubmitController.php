<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SubmitController extends Controller
{
    // Insert into the new hire table
    public function insert()
    {

        DB::table('new_hires')->insert([
            'CWID' => 'test',
            'Region' => 'STL',
            'FirstName' => '',
            'LastName' => '',
            'SeatNum' => 0,
            'ManagerComments' => '',
            'OnBoardingBuddy' => '',
            'HireType' => '',
            'HireStatus' => '',
            'Platform' => '',
            'TeamName' => '',
            'Leader' => '',
            'OBEmail' => '2014-06-26 04:07:31',
            'DIPd' => '2014-06-26 04:07:31',
            'ProdPlatformsStartDate' => '2014-06-26 04:07:31'
        ]);

    }
}
