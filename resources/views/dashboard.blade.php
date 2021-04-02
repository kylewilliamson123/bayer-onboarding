@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <!-- Left Column -->    
        <div class="col-md-6 p-2">
            <div class="content bg-blue">
            
            <h2>{{ Auth::user()->name }}'s Onboards</h2>

            <table class="table">
                <thead class="bg-dark-blue">
                    <th></th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>CWID</th>
                    <th>Region</th>
                </thead>
                <tbody class="bg-light">
                    @foreach ($new_hires as $new_hire)
                        <tr>
                            <td>
                                <a href="{{ route('onboard', $new_hire->id) }}" class="btn btn-sm btn-secondary p-0">
                                    <span style="font-size: 1.5em;" class="material-icons p-1">launch</span>
                                </a>
                            </td>
                            <td>{{ $new_hire->FirstName }}</td>
                            <td>{{ $new_hire->LastName }}</td>
                            <td>{{ $new_hire->CWID }}</td>
                            <td>{{ $new_hire->Region }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            </div>
        </div>
        
        <!-- Right Column -->
        <div class="col-md-6 p-2">
            <div class="content bg-blue">
            
            <h2>All Onboards</h2>
            
            <table class="table">
                <thead class="bg-dark-blue">
                    <th>Name</th>
                    <th>Region</th>
                </thead>
                <tbody class="bg-light">
                    <tr>
                        <td>Elon Musk</td>
                        <td>South Africa</td>
                    </tr>
                    <tr>
                        <td>Elon Musk</td>
                        <td>South Africa</td>
                    </tr>
                </tbody>
            </table>

            </div>
        </div>


    </div>
</div>

@endsection
