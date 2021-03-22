@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <!-- Left Column -->    
        <div class="col-md-6 ">
            <div class="content bg-blue">
            
                <h2>Add New Onboard</h2>
                <form>
                    @csrf

                    <label>First Name</label>
                    <input type="text" name="first-name" class="form-control">

                    <label>Last Name</label>
                    <input type="text" name="last-name" class="form-control">

                    <label>Region</label>
                    <input type="text" name="region" class="form-control">

                    <label>CWID</label>
                    <input type="text" name="cwid" class="form-control">

                    <label>Seat Location</label>
                    <input type="text" name="seat-loc" class="form-control">

                    <label>Platform</label>
                    <input type="text" name="platform" class="form-control">

                    <label>Manager</label>
                    <input type="text" name="manager" class="form-control">

                    <label>Team Name</label>
                    <input type="text" name="team-name" class="form-control">

                    <label>Hire Type</label>
                    <input type="text" name="hire-type" class="form-control">

                    <label>Role</label>
                    <Select class="w-100 h-50">
                    <option value="admin">admin</option>
                    <option value="programmer">programmer</option>
                    </select>

                    <input type="submit" class="btn btn-secondary mt-4 form-control" value="submit">
                </form>


            </div>
        </div>

    </div>
</div>
@endsection
