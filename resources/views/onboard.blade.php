@extends('layouts.app')

@section('content')
<div class="container">

    <form method="post" action="{{ action('OnboardSubmitController@update', $newHire->id) }}">
        @csrf

        @if ($popup != null)
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ $popup }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        <div class="row justify-content-center">

            <!-- Left Column -->
            <div class="col-md-10 p-2">


                <!-- First content box -->
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
                                <td><input name="FirstName" type="text" value="{{ $newHire->FirstName }}"></td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td><input name="LastName" type="text" value="{{ $newHire->LastName }}"></td>
                            </tr>
                            <tr>
                                <td>Region</td>
                                <td><input name="Region" type="text" value="{{ $newHire->Region }}"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                <!-- Second content box -->
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
                                <td><input name="CWID" type="text" value="{{ $newHire->CWID }}"></td>
                            </tr>
                            <tr>
                                <td>Hire Type</td>
                                <td><input name="HireType" type="text" value="{{ $newHire->HireType }}"></td>
                            </tr>
                            <tr>
                                <td>Hire Status</td>
                                <td><input name="HireStatus" type="text" value="{{ $newHire->HireStatus }}"></td>
                            </tr>
                            <tr>
                                <td>Onboarding Buddy</td>
                                <td><input name="OnBoardingBuddy" type="text" value="{{ $newHire->OnBoardingBuddy }}"></td>
                            </tr>
                            <tr>
                                <td>Platform</td>
                                <td><input name="Platform" type="text" value="{{ $newHire->Platform }}"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                <!-- Third content box -->
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
                                <td><input name="TeamName" type="text" value="{{ $newHire->TeamName }}"></td>
                            </tr>
                            <tr>
                                <td>Leader</td>
                                <td><input name="Leader" type="text" value="{{ $newHire->Leader }}"></td>
                            </tr>
                            <tr>
                                <td>Seat Number</td>
                                <td><input name="SeatNum" type="text" value="{{ $newHire->SeatNum }}"></td>
                            </tr>
                            <tr>
                                <td>Manager Comments</td>
                                <td><input name="ManagerComments" type="text" value="{{ $newHire->ManagerComments }}"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


            <!-- Right Column -->
            <div class="col-md-2 p-2">
                <div class="content bg-blue">
                    <h2>Controls</h2>
                    <hr class="bg-light">

                    <input type="submit" class="btn btn-light mb-2 w-100" value="Save Changes">
                    <button type="button" class="btn btn-danger w-100" data-toggle="modal" data-target="#deleteConfirmModal">
                        Delete
                    </button>
                </div>
            </div>
        </div>

    </form>
</div>


<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteConfirmModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this record?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form method="post" action="{{ action('OnboardSubmitController@delete', $newHire->id) }}">
                    @csrf
                    <input type="submit" class="btn btn-danger" value="Delete Record">
                </form>
            </div>
        </div>
    </div>
</div>

@endsection