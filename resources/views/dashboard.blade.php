@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <!-- Left Column -->    
        <div class="col-md-6 p-2">
            <div class="content bg-orange">
            
            <h2>{{ Auth::user()->name }}'s Orders</h2>

            <table class="table">
                <thead class="bg-dark-orange">
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
            
            <h2>All Orders</h2>

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
