@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <!-- Left Column -->    
        <div class="col-md-6 p-2">
            <div class="content bg-blue">
            
                <h2>Add new onboard</h2>
                <form>
                    @csrf

                    <label>First Name</label>
                    <input type="text" name="first-name" class="form-control">

                    <label>Last Name</label>
                    <input type="text" name="last-name" class="form-control">

                    <input type="submit" class="btn btn-secondary mt-4 form-control" value="submit">
                </form>


            </div>
        </div>
    
    </div>
</div>
@endsection
