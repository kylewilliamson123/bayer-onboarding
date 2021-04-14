@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('formSubmit') }}" method="post">
        <div class="row justify-content-center">
        
        
        <!-- Left Column -->    
            <div class="col-md-4 ">
             <div class="content bg-blue">
            
                <h2>Basic Information</h2>
               
                    @csrf
                    
                    <label for="first-name">First Name</label>
                    <input id="first-name" type="text" name="first-name" class="form-control">

                    <label for="middle-name">Middle Name</label>
                    <input id="middle-name" type="text" name="middle-name" class="form-control">

                    <label for="last-name">Last Name</label>
                    <input id="last-name" type="text" name="last-name" class="form-control">

                    <label for="gender">Gender</label>
                    <input id="gender" type="text" name="gender" class="form-control">

                    <label for="region">Region</label>
                    <input id="region" type="text" name="region" class="form-control">

            </div>
        </div>
        

        <div class="col-md-4">
            <div class="content bg-blue">
                <h3>Onboard Information</h3>
                  
                    @csrf

                    
                    <label for="cwid">CWID</label>
                    <input id="cwid" type="text" name="cwid" class="form-control">

                    <label for="hire-type">Hire Type</label>
                    <input id="hire-type" type="text" name="hire-type" class="form-control">

                    <label for="hire-status">Hire Status</label>
                    <input id="cwid" type="text" name="cwid" class="form-control">

                    <label for="platform">Platform</label>
                    <select id="platform" class="form-control">
                        <option value="mac">Mac</option>
                        <option value="windows">Windows</option>
                        <option value="lenovo">Lenovo</option>
                    </select>

                    <label for="manager-comments">Manager Comments</label>
                    <textarea class="form-control" rows="5">
                    </textarea>
                    
        </div>
        </div>

        <div class="col-md-4">
            <div class="content bg-blue">
                <h3>Job Information</h3>
                  
                    @csrf

                    <label for="team-name">Team Name</label>
                    <input id="team-name" type="text" name="team-name" class="form-control">
      
                    <label for="seat-loc">Seat Number</label>
                    <input id="seat-loc" type="number" name="seat-loc" class="form-control">

                    <label for="manager">Manager</label>
                    <select name="manager" class="form-control">
                        @foreach ($managers as $manager)
                            <option value="{{ $manager->id }}">{{ $manager->Name }}</option>
                        @endforeach
                    </select>


                    <label for="vendor">Vendor</label>
                    <select id="vendor" class="form-control">
                        <option value="scranton">Scranton</option>
                        <option value="service-provider">Service Provider</option>
                        <option value="nbc">NBC</option>
                        <option value="na">N/A</option>
                    </select>

                    <label for="role">Role</label>
                    <select name="role" class="form-control">
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->position }}</option>
                        @endforeach
                    </select>

                    <input type="submit" class="btn btn-secondary mt-4 form-control" value="Submit">
                    
                    </div>
                    </div>
        </div>
    </form>
</div>
@endsection



