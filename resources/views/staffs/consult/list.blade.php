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
                        <h3>CONSULTATIONS List</h3>

                        <table class="table">
                            <thead>
                            <tr>
                                <th>Patient's Name</th>
                                <th>Case</th>
                                <th>Diagnosis</th>
                                <th>Aetiology</th>
                                <th>Date created</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data['consults'] as $consults)
                                <tr>
                                    <td>{{ $consults->patient_id }}</td>
                                    <td>{{ $consults->c_info }}</td>
                                    <td>{{ $consults->diagnosis }}</td>
                                    <td>{{ $consults->aetiology }}</td>
                                    <td>{{ $consults->created_at }}</td>
                                  <td><a href="{{ route('consult.show',$consults->id) }}" class="btn btn-success">View</a></td>
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

