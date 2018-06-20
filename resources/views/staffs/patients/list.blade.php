@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <a href="{{ route('home') }}" class="btn btn-primary">Go Back</a>
                <hr>
                <div class="card">
                    <div class="card-header">Staff Dashboard</div>

                    <div class="card-body">
                  <h3>Patients List</h3>

                        <table class="table">
                            <thead>
                            <tr>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Phone</th>
                                <th>Next o'Kin Name</th>
                                <th>Next o'Kin phone</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data['patients'] as $patient)
                            <tr>
                                <td>{{ $patient->firstname }}</td>
                                <td>{{ $patient->lastname }}</td>
                                <td>{{ $patient->phone }}</td>
                                <td>{{ $patient->nok_name }}</td>
                                <td>{{ $patient->nok_phone }}</td>
                                <td><a href="{{ route('patient.show',$patient->id) }}" class="btn btn-success">View</a></td>
                            </tr>
                         @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

