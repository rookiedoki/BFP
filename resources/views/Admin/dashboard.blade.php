@extends('layout.dashboard-layout')
@section('content')
<div class="row my-4">
    <div class="col-md-4">
      <div class="card shadow mb-4">
        <div class="card-body" style="background-color: rgba(230, 181, 46, 0.966)">
          <div class="row align-items-center">
            <div class="col">
              <small class="text-muted mb-1" style="color: #f8f8f8 !important;">ASSEMBLY</small>
              <h3 class="card-title mb-0" style="color: #f8f8f8 !important;">{{ $house_no ?? '0'}}</h3>
            </div>
            <div class="col-4 text-right">
              <i class="fas fa-school" style="color: #f8f8f8 !important;"></i>
            </div>
          </div> <!-- /. row -->
        </div> <!-- /. card-body -->
      </div> <!-- /. card -->
    </div> <!-- /. col -->
    <div class="col-md-4">
      <div class="card shadow mb-4">
        <div class="card-body" style="background-color: rgba(230, 58, 46, 0.966)">
          <div class="row align-items-center">
            <div class="col">
              <small class="text-muted mb-1" style="color: #f8f8f8 !important;">BUSINESS</small>
              <h3 class="card-title mb-0" style="color: #f8f8f8 !important;">{{ $residents ?? '0'}}</h3>
            </div>
            <div class="col-4 text-right">
              <i class="fas fa-users" style="color: #f8f8f8 !important;"></i>
            </div>
          </div> <!-- /. row -->
        </div> <!-- /. card-body -->
      </div> <!-- /. card -->
    </div> <!-- /. col -->
    <div class="col-md-4">
      <div class="card shadow mb-4">
        <div class="card-body" style="background-color: rgba(32, 139, 211, 0.966)">
          <div class="row align-items-center">
            <div class="col">
              <small class="text-muted mb-1" style="color: #f8f8f8 !important;">EDUCATIONAL</small>
              <h3 class="card-title mb-0" style="color: #f8f8f8 !important;">{{ $male ?? '0'}}</h3>

            </div>
            <div class="col-4 text-right">
              {{-- <i class="fas fa-male" style="color: #f8f8f8 !important;"></i> --}}
              <i class="fas fa-university" style="color: #f8f8f8 !important;"></i>
            </div>
          </div> <!-- /. row -->
        </div> <!-- /. card-body -->
      </div> <!-- /. card -->
    </div> <!-- /. col -->
    <div class="col-md-4">
      <div class="card shadow mb-4">
        <div class="card-body" style="background-color: rgba(230, 46, 92, 0.966)">
          <div class="row align-items-center">
            <div class="col">
              <small class="text-muted mb-1" style="color: #f8f8f8 !important;">INDUSTRIAL</small>
              <h3 class="card-title mb-0" style="color: #f8f8f8 !important;">{{ $female ?? '0'}}</h3>

            </div>
            <div class="col-4 text-right">
              <i class="fas fa-building" style="color: #f8f8f8 !important;"></i>
            </div>
          </div> <!-- /. row -->
        </div> <!-- /. card-body -->
      </div> <!-- /. card -->
    </div> <!-- /. col -->

    <div class="col-md-4">
      <div class="card shadow mb-4">
        <div class="card-body" style="background-color: rgba(215, 46, 230, 0.966)">
          <div class="row align-items-center">
            <div class="col">
              <small class="text-muted mb-1" style="color: #f8f8f8 !important;">MERCANTILE</small>
              <h3 class="card-title mb-0" style="color: #f8f8f8 !important;">{{ $voter ?? '0'}}</h3>

            </div>
            <div class="col-4 text-right">
              <i class="fas fa-city" style="color: #f8f8f8 !important;"></i>
            </div>
          </div> <!-- /. row -->
        </div> <!-- /. card-body -->
      </div> <!-- /. card -->
    </div> <!-- /. col -->
    <div class="col-md-4">
      <div class="card shadow mb-4">
        <div class="card-body" style="background-color: rgba(51, 167, 151, 0.966)">
          <div class="row align-items-center">
            <div class="col">
              <small class="text-muted mb-1" style="color: #f8f8f8 !important;">RESIDENTIAL</small>
              <h3 class="card-title mb-0" style="color: #f8f8f8 !important;">{{ $nonvoter ?? '0'}}</h3>

            </div>
            <div class="col-4 text-right">
              <i class="fas fa-home" style="color: #f8f8f8 !important;"></i>
            </div>
          </div> <!-- /. row -->
        </div> <!-- /. card-body -->
      </div> <!-- /. card -->
    </div> <!-- /. col -->

    <div class="col-md-4">
      <div class="card shadow mb-4">
        <div class="card-body" style="background-color: rgba(135, 230, 46, 0.966)">
          <div class="row align-items-center">
            <div class="col">
              <p class="text-muted mb-1" style="color: #f8f8f8 !important; font-size: 90%;">SPECIAL STRUCTURE</p>
              <h3 class="card-title mb-0" style="color: #f8f8f8 !important;">{{ $senior ?? '0'}}</h3>
            </div>
            <div class="col-4 text-right">
              <i class="fas fa-blind" style="color: #f8f8f8 !important;"></i>
            </div>
          </div> <!-- /. row -->
        </div> <!-- /. card-body -->
      </div> <!-- /. card -->
    </div> <!-- /. col -->

    <div class="col-md-4">
      <div class="card shadow mb-4">
        <div class="card-body" style="background-color: rgba(255, 174, 0, 0.966)">
          <div class="row align-items-center">
            <div class="col">
              <small class="text-muted mb-1" style="color: #f8f8f8 !important;">STORAGE</small>
              <h3 class="card-title mb-0" style="color: #f8f8f8 !important;">{{ $pwd ?? '0'}}</h3>

            </div>
            <div class="col-4 text-right">
              <i class="fas fa-wheelchair" style="color: #f8f8f8 !important;"></i>
            </div>
          </div> <!-- /. row -->
        </div> <!-- /. card-body -->
      </div> <!-- /. card -->
    </div> <!-- /. col -->

  </div>



<head>
  <script src="{{url('assets/js/highcharts.js')}}"></script>
  <script src="{{url('assets/js/exporting.js')}}"></script>
  <script src="{{url('assets/js/export-data.js')}}"></script>
  <script src="{{url('assets/js/accessibility.js')}}"></script>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <style>
#container {
    height: 400px;
  }

  .highcharts-figure,
  .highcharts-data-table table {
    min-width: 320px;
    max-width: 800px;
    margin: 1em auto;
  }

  .highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #ebebeb;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
  }

  .highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
  }

  .highcharts-data-table th {
    font-weight: 600;
    padding: 0.5em;
  }

  .highcharts-data-table td,
  .highcharts-data-table th,
  .highcharts-data-table caption {
    padding: 0.5em;
  }

  .highcharts-data-table thead tr,
  .highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
  }

  .highcharts-data-table tr:hover {
    background: #f1f7ff;
  }

  .highcharts-figure,
.highcharts-data-table table {
    min-width: 320px;
    max-width: 660px;
    margin: 1em auto;
}

.highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #ebebeb;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}

.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}

.highcharts-data-table th {
    font-weight: 600;
    padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
    padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}

.highcharts-data-table tr:hover {
    background: #f1f7ff;
}

  </style>
   {{-- PieChart --}}
  <script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        ['Male',    {{$toddler}}],
        ['Child',    {{$child}}],
        ['Teen',    {{$teen}}],
        ['Adult ',    {{$adult}}],

      ]);

      var options = {
        backgroundColor:'transparent',

        titleTextStyle:{ color: 'white', bold: 'true', fontSize: '20' },
        is3D: true,
        legend:{position: 'bottom' , textStyle: {color: 'blue', fontSize: 16}},
      };



      var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
      chart.draw(data, options);
    }
  </script>


  <script>
       google.charts.load("current", {packages:["corechart"]});
       google.charts.setOnLoadCallback(drawChart);
       function drawChart() {
         var data = google.visualization.arrayToDataTable([
           ['Task', 'Hours per Day'],
           ['Voters',     {{$voter}}],
           ['Nonvoters',      {{$nonvoter}}],
         ]);

         var options = {
          backgroundColor:'transparent',

        legend:{position: 'bottom' , textStyle: {color: 'blue', fontSize: 16}},
           pieHole: 0.4,
         };

         var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
         chart.draw(data, options);
       }
   </script>

{{-- HighChart --}}

</head>


<body>



{{-- High Charts Pie Chart--}}
      <div class="row">
          <figure class="highcharts-figure">
            <div id="container"  style="height: 400px; width: 640px;"></div>
          </figure>

{{-- ------- Line Chart ---------------- --}}
<figure class="highcharts-figure">
  <div id="containerr" style="height: 400px; width: 360px;"></div>

</figure>


{{--
<div class="row register-form">
  <div class="card shadow ">
    <div class="card-body pr-25">
        <div id="piechart_3d"  style="height: 330px; width: 420px;"></div>
  </div>
</div>
<div class="card shadow">
<div class="card-body pl-25">
    <div id="donutchart" style="width: 420px; height: 330px;"></div>
</div>
</div> --}}

</body>


<script>
var pieColors = (function () {
    var colors = [],
        base = Highcharts.getOptions().colors[0],
        i;

    for (i = 0; i < 10; i += 1) {
        // Start out with a darkened base color (negative brighten), and end
        // up with a much brighter color
        colors.push(Highcharts.color(base).brighten((i - 3) / 7).get());
    }
    return colors;
}());

// Build the chart
Highcharts.chart('containerr', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'VACCINATED'
    },
    tooltip: {
        pointFormat: ' <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            colors: pieColors,
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
                distance: -50,
                filter: {
                    property: 'percentage',
                    operator: '>',
                    value: 4
                }
            }
        }
    },
    series: [{
        data: [
            { name: 'Partially Vaccinated', y: {{$partial}}},
            { name: 'Fully Vaccinated', y: {{$fully}}},
            { name: 'With Booster', y: {{$booster}} }
        ]
    }]
});

  </script>

<script>

const chart = Highcharts.chart('container', {
      title: {
        text: 'Number of Pregnants'
      },
      xAxis: {
          categories: <?php echo json_encode($month); ?>
      },
      series: [{
          type: 'column',
          name: 'Pregnants',
          colorByPoint: true,
          data: <?php echo json_encode($count, JSON_NUMERIC_CHECK); ?>,
          showInLegend: false
      }]
    });

 </script>


@endsection
