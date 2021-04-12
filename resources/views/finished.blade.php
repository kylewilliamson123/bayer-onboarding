@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">

        <!-- Left Column -->    
        <div class="col-md-12 p-2">
            <div class="content bg-blue">
            
                <h2>Finished Onboards</h2>

                <form method="GET"  action="{{ action('FinishedController@search')}}">
                    <div class="input-group w-50">
                        <input type="text" class="form-control" placeholder="Filter" name="search"/>
                        <input type="submit" class="btn btn-secondary" value="search">
                    </div>
                </form>

                <table class="table mt-2">
                    <thead class="bg-dark-blue">
                            <th>Name</th>
                            <th>Region</th>
                            <th>Start Date</th>
                    </thead>
                    <tbody class="bg-light">
                        <tr>
                            <td>Elon Musk</td>
                            <td>South Africa</td>
                            <td>03/15/2021</td>
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
