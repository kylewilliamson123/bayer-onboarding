@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <!-- Left Column -->    
        <div class="col-md-8 p-2">
            <div class="bg-dark-blue">
            
            <h2>{{ Auth::user()->name }}'s Finished Onboards</h2>

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
        <div class="col-md-3 p-3">
            <form method="GET" action="search.php">
            <input type="text" placeholder="Filter" name="search"/>
            <input type="submit" value="search">
            </form>

            <h3> </h3>

            <form method="GET" action="search.php">
            <input type="text"  placeholder="First Last Name" name="search"/>
            <input type="submit" value="search">
            </form>
        </div>
    </div>
</div>
@endsection
