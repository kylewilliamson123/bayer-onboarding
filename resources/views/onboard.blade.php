@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <!-- Left Column -->    
        <div class="col-md-10 p-2">
            <div class="content bg-blue">
            
                <h2>Basic info</h2>

                <table class="table">
                    <thead class="bg-dark-blue">
                        <th>Prompt</th>
                        <th>Value</th>
                    </thead>
                    <tbody class="bg-light">
                        <tr>
                            <td>First Name</td>
                            <td>{{ $new_hire->FirstName }}</td>
                        </tr>
                        <tr>
                            <td>Last Name</td>
                            <td>{{ $new_hire->LastName }}</td>
                        </tr>
                        <tr>
                            <td>Region</td>
                            <td>{{ $new_hire->Region }}</td>
                        </tr>
                    </tbody>
                </table>

            </div>

            <div class="content bg-blue mt-4">
            
                <h2>Onboard info</h2>

                <table class="table">
                    <thead class="bg-dark-blue">
                        <th>Prompt</th>
                        <th>Value</th>
                    </thead>
                    <tbody class="bg-light">
                        <tr>
                            <td>CWID</td>
                            <td>{{ $new_hire->CWID }}</td>
                        </tr>
                        <tr>
                            <td>Hire Type</td>
                            <td>{{ $new_hire->HireType }}</td>
                        </tr>
                        <tr>
                            <td>Hire Status</td>
                            <td>{{ $new_hire->HireStatus }}</td>
                        </tr>
                        <tr>
                            <td>Onboarding Buddy</td>
                            <td>{{ $new_hire->OnBoardingBuddy }}</td>
                        </tr>
                        <tr>
                            <td>Platform</td>
                            <td>{{ $new_hire->Platform }}</td>
                        </tr>
                    </tbody>
                </table>

            </div>


            <div class="content bg-blue mt-4">
            
                <h2>Job info</h2>

                <table class="table">
                    <thead class="bg-dark-blue">
                        <th>Prompt</th>
                        <th>Value</th>
                    </thead>
                    <tbody class="bg-light">
                        <tr>
                            <td>Team Name</td>
                            <td>{{ $new_hire->TeamName }}</td>
                        </tr>
                        <tr>
                            <td>Leader</td>
                            <td>{{ $new_hire->Leader }}</td>
                        </tr>
                        <tr>
                            <td>Seat Number</td>
                            <td>{{ $new_hire->SeatNum }}</td>
                        </tr>
                        <tr>
                            <td>Manager Comments</td>
                            <td>{{ $new_hire->ManagerComments }}</td>
                        </tr>
                    </tbody>
                </table>

            </div>


        </div>
        
        <!-- Right Column -->
        <div class="col-md-2 p-2">
            <div class="content bg-blue">
            
            <h2>Controls</h2>

            <a class="btn btn-light">Save Changes</a>
            <a class="btn btn-danger">Delete Record</a>
            
            </div>
        </div>

    </div>
</div>
@endsection
