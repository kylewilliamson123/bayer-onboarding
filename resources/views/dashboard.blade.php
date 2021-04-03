@extends('layouts.app')

@section('content')
<div class="container">

    @if ($popup != null)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ $popup }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

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
<<<<<<< Updated upstream
                    <tr>
                        <td>Elon Musk</td>
                        <td>South Africa</td>
                    </tr>
                    <tr>
                        <td>Elon Musk</td>
                        <td>South Africa</td>
                    </tr>
=======
                    @foreach ($allNewHires as $newHire)
                        <tr>
                            <td>
                                <a href="{{ route('onboard', $newHire->id) }}" class="btn btn-sm btn-secondary p-0">
                                    <span style="font-size: 1.5em;" class="material-icons p-1">launch</span>
                                </a>
                            </td>
                            <td>{{ $newHire->FirstName }}</td>
                            <td>{{ $newHire->LastName }}</td>
                            <td>{{ $newHire->CWID }}</td>
                            <td>{{ $newHire->Region }}</td>
                        </tr>
                    @endforeach
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
                    <tr>
                        <td>Elon Musk</td>
                        <td>South Africa</td>
                    </tr>
                    <tr>
                        <td>Elon Musk</td>
                        <td>South Africa</td>
                    </tr>
=======
                    @foreach ($allNewHires as $newHire)
                        <tr>
                            <td>
                                <a href="{{ route('onboard', $newHire->id) }}" class="btn btn-sm btn-secondary p-0">
                                    <span style="font-size: 1.5em;" class="material-icons p-1">launch</span>
                                </a>
                            </td>
                            <td>{{ $newHire->FirstName }}</td>
                            <td>{{ $newHire->LastName }}</td>
                            <td>{{ $newHire->CWID }}</td>
                            <td>{{ $newHire->Region }}</td>
                        </tr>
                    @endforeach
>>>>>>> Stashed changes
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
