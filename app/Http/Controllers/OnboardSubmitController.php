<?php

namespace App\Http\Controllers;

use App\new_hire;
use Illuminate\Http\Request;

class OnboardSubmitController extends Controller
{
    // Update new hire value
    public function update($onboardId)
    {

        $onboard = new_hire::find($onboardId);
        $onboard->CWID = $_POST['CWID'];
        $onboard->save();

        return redirect("/onboard/$onboardId");
    }
}
