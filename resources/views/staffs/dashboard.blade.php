@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('patient.search') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Search for patients</label>
                            <input type="text" name="param"  class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Select a Parm</label>
                            <select name="key" class="form-control" id="">
                                <option value="firstname">Firstname</option>
                                <option value="lastname">Lastname</option>
                                <option value="middlename">Middlename</option>
                            </select>
                        </div>
                        <button class="btn btn-primary">Search</button>
                    </form>
                    <hr>

                    <a href="{{ route('patient.create') }}" class="btn btn-primary"> Add new Patient</a>
                    <a href="{{ route('consult.create') }}" class="btn btn-primary"> Consult A Doctor</a>


                    <hr>
                    <h3>Reports</h3>
                    <a href="{{ route('patient.index') }}" class="btn btn-warning"> Patients</a>
                    <a href="{{ route('consult.index') }}" class="btn btn-warning"> Consultations</a>

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

@section('scripts')

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


    <script type="text/javascript">
        google.charts.load('current', {packages: ['corechart', 'bar']});
        google.charts.setOnLoadCallback(drawBasic);

        function drawBasic() {

            var data = google.visualization.arrayToDataTable([
                ['Patients', 'No of Visits',],

              @for($i=1; $i <=12; $i++)
                ['{{ get_month($i) }}',{{ get_visits($i) }}],
                @endfor


            ]);

            var options = {
                title: 'Patients Monthly visits',
                chartArea: {
                    width: '50%',

                },
                hAxis: {
                    title: 'Total monthly Visits',
                    minValue: 0
                },
                height: '300',
                vAxis: {
                    title: 'Months'
                }
            };

            var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

            chart.draw(data, options);
        }
    </script>

@endsection