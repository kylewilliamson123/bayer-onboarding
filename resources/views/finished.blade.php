@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">

        <!-- Left Column -->    
        <div class="col-md-12 p-2">
            <div class="content bg-blue">
            
                <h2>Finished Onboards</h2>

                <form method="GET"  action="{{ action('FinishedController@index')}}">
                    <div class="input-group w-50">
                        <input type="text" class="form-control" placeholder="Filter" name="search"/>
                        <input type="submit" class="btn btn-secondary" value="search">
                    </div>
                </form>

                <table class="table mt-2">
                    <thead class="bg-dark-blue">
                    <th></th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>CWID</th>
                    <th>Region</th>
                    </thead>
                    <tbody class="bg-light">
                    @isset($searchResults)
                        @foreach ($searchResults as $newHire)
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
                        @php    $searchResults = []; @endphp
                    @endisset
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection
