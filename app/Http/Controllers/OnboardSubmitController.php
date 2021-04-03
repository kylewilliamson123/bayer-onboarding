<?php

namespace App\Http\Controllers;

use App\new_hire;
use Illuminate\Http\Request;

class OnboardSubmitController extends Controller
{

    // Update new hire value
    public function update($id)
    {
        // Get row in table
        $onboard = new_hire::find($id);

        // Update all values
        $onboard->CWID = $_POST['CWID'];
        $onboard->Region = $_POST['Region'];
        $onboard->FirstName = $_POST['FirstName'];
        $onboard->LastName = $_POST['LastName'];
        $onboard->SeatNum = $_POST['SeatNum'];
        $onboard->ManagerComments = $_POST['ManagerComments'];
        $onboard->OnBoardingBuddy = $_POST['OnBoardingBuddy'];
        $onboard->HireType = $_POST['HireType'];
        $onboard->HireStatus = $_POST['HireStatus'];
        $onboard->Platform = $_POST['Platform'];
        $onboard->TeamName = $_POST['TeamName'];
        $onboard->Leader = $_POST['Leader'];

        // Save the changes
        $onboard->save();

        // Refresh last page, adding popup message
        return redirect("/onboard/$id")->with( ['popup' => 'Changes saved.'] );
    }


    // Delete the onboard from table
    public function delete($id)
    {
        $onboard = new_hire::find($id);
        $onboard->delete();

        return redirect("/dashboard")->with( ['popup' => 'Record Deleted.'] );
    }

}
