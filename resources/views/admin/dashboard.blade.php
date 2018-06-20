@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('staff.create') }}" class="btn btn-primary"> Add new Staff</a>
                        <hr>
                        <h3>Reports</h3>
                        <a href="{{ route('staff.index') }}" class="btn btn-warning"> Staffs</a>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Staff Dashboard</div>

                    <div class="card-body">


                        <h3>Dashboard</h3>
                        <div class="row">


                            <div class="col-xl-3 col-sm-6 py-2">
                                <div class="card bg-primary text-white h-100">
                                    <div class="card-body bg-primary">
                                        <div class="rotate">
                                            <i class="fa fa-user fa-4x"></i>
                                        </div>
                                        <h6 class="text-uppercase">Patients</h6>
                                        <h1 class="display-4">{{ $data['patients_count'] }}</h1>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6 py-2">
                                <div class="card bg-primary text-white h-100">
                                    <div class="card-body bg-primary">
                                        <div class="rotate">
                                            <i class="fa fa-user fa-4x"></i>
                                        </div>
                                        <h6 class="text-uppercase">Consultations</h6>
                                        <h1 class="display-4">{{ $data['consults_count'] }}</h1>
                                    </div>
                                </div>
                            </div>

                        </div><!-- /.row -->
                        <hr>
                        <h3>Patients Monthly Visits</h3>
                        <div id="chart_div"></div>




                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
