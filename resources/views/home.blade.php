@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Staff Dashboard</div>

                    <div class="card-body">
                        <div id="chart_div"></div>



                        <a href="#" class="btn btn-primary"> Add new Patient</a>
                        <a href="#" class="btn btn-primary"> Consult A Doctor</a>


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
                ['January', 10],
                ['Feburary', 1],


            ]);

            var options = {
                title: 'Patients Monthly visits',
                chartArea: {width: '50%'},
                hAxis: {
                    title: 'Total monthly Visits',
                    minValue: 0
                },
                vAxis: {
                    title: 'Months'
                }
            };

            var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

            chart.draw(data, options);
        }
    </script>

@endsection