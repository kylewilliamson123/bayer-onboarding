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
  
<!-- Loops through new_hires table and outputs all FirstName records -->
    @foreach ($new_hires as $new_hires)
    <div>
    {{$new_hires->FirstName}} - {{$new_hires->LastName}} - {{$new_hires->CWID}} - {{$new_hires->Region}} - {{$new_hires->SeatNum}} 
    - {{$new_hires->ManagerComments}} - {{$new_hires->HireType}} - {{$new_hires->HireStatus}} - {{$new_hires->Platform}} - {{$new_hires->TeamName}} - {{$new_hires->Leader}}
    
    </div>
    @endforeach


    </div>
</div>



@endsection
