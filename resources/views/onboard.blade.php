@extends('layouts.app')

@section('content')
<div class="container">

    <form method="post" action="{{ action('OnboardSubmitController@update', $new_hire->id) }}">
        @csrf
    
        <div class="row justify-content-center">

            <!-- Left Column -->    
            <div class="col-md-10 p-2">
                <div class="content bg-blue">
                
                    <h2>Basic info</h2>

                    <table class="table table-inputs">
                        <thead class="bg-dark-blue">
                            <th>Prompt</th>
                            <th>Value</th>
                        </thead>
                        <tbody class="bg-light">
                            <tr>
                                <td>First Name</td>
                                <td><input name="FirstName" type="text" value="{{ $new_hire->FirstName }}"></td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td><input name="LastName" type="text" value="{{ $new_hire->LastName }}"></td>
                            </tr>
                            <tr>
                                <td>Region</td>
                                <td><input name="Region" type="text" value="{{ $new_hire->Region }}"></td>
                            </tr>
                        </tbody>
                    </table>

                </div>

                <div class="content bg-blue mt-4">
                
                    <h2>Onboard info</h2>

                    <table class="table table-inputs">
                        <thead class="bg-dark-blue">
                            <th>Prompt</th>
                            <th>Value</th>
                        </thead>
                        <tbody class="bg-light">
                            <tr>
                                <td>CWID</td>
                                <td><input name="CWID" type="text" value="{{ $new_hire->CWID }}"></td>
                            </tr>
                            <tr>
                                <td>Hire Type</td>
                                <td><input name="HireType" type="text" value="{{ $new_hire->HireType }}"></td>
                            </tr>
                            <tr>
                                <td>Hire Status</td>
                                <td><input name="HireStatus" type="text" value="{{ $new_hire->HireStatus }}"></td>
                            </tr>
                            <tr>
                                <td>Onboarding Buddy</td>
                                <td><input name="OnBoardingBuddy" type="text" value="{{ $new_hire->OnBoardingBuddy }}"></td>
                            </tr>
                            <tr>
                                <td>Platform</td>
                                <td><input name="Platform" type="text" value="{{ $new_hire->Platform }}"></td>
                            </tr>
                        </tbody>
                    </table>

                </div>


                <div class="content bg-blue mt-4">
                
                    <h2>Job info</h2>

                    <table class="table table-inputs">
                        <thead class="bg-dark-blue">
                            <th>Prompt</th>
                            <th>Value</th>
                        </thead>
                        <tbody class="bg-light">
                            <tr>
                                <td>Team Name</td>
                                <td><input name="TeamName" type="text" value="{{ $new_hire->TeamName }}"></td>
                            </tr>
                            <tr>
                                <td>Leader</td>
                                <td><input name="Leader" type="text" value="{{ $new_hire->Leader }}"></td>
                            </tr>
                            <tr>
                                <td>Seat Number</td>
                                <td><input name="SeatNum" type="text" value="{{ $new_hire->SeatNum }}"></td>
                            </tr>
                            <tr>
                                <td>Manager Comments</td>
                                <td><input name="ManagerComments" type="text" value="{{ $new_hire->ManagerComments }}"></td>
                            </tr>
                        </tbody>
                    </table>

                </div>


            </div>

        
            
            <!-- Right Column -->
            <div class="col-md-2 p-2">
                <div class="content bg-blue">
                
                <h2>Controls</h2>

                <input type="submit" class="btn btn-light" value="Save Changes">
                
                </form><!-- Gross place to end form but it works -->

                <form method="post" action="{{ action('OnboardSubmitController@delete', $new_hire->id) }}">
                    @csrf
                    <input type="submit" class="btn btn-danger" value="Delete Record">
                </form>
                
                </div>
            </div>

        </div>

    

</div>
@endsection
