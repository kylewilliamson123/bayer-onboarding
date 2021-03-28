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
                            <td>Status</td>
                            <td>Pending</td>
                        </tr>
                        <tr>
                            <td>First Name</td>
                            <td>John</td>
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
        @foreach ($new_hires as $new_hires)
    <div>
    {{$new_hires->FirstName}}
    </div>
    @endforeach

    </div>
</div>
@endsection
