@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <!-- Left Column -->    
        <div class="col-md-12 p-2">
            <div class="bg-dark-blue">
            
            <h2>{{ Auth::user()->name }}'s Orders</h2>

            <table class="table">
            <thead class="bg-dark-blue">
                    <th>Name</th>
                    <th>Region</th>
                    <th>Start Date</th>
                <thread>
                <tbody class="bg-light">
                    <tr>
                    <thead class="bg-dark-blue">
                        <td>Elon Musk</td>
                        <td>South Africa</td>
                        <td>03/15/2021</td>
                        <thread>
                    </tr>
                    <tr>
                        <td>Elon Musk</td>
                        <td>South Africa</td>
                        <td>03/15/2021</td>
                    </tr>
                </tbody>
            </table>

            </div>
        </div>
    
    </div>
</div>
@endsection
