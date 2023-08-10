@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome Back, {{ auth()->user()->name }}</h1>
</div>
<canvas class="my-4 w-100" id="chartViewer" width="900" height="380">Top 10 Views</canvas>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
 $(function(){
      var cData = JSON.parse(`<?php echo $chart_data; ?>`);
      var ctx = $("#chartViewer");
 
      //bar chart data
      var data = {
        labels: cData.label,
      datasets: [{
        label: 'Top 10 of Views',
        data: cData.data,
        borderWidth: 1
      }]
    };
 
      //options
      var options = {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
 
      //create bar Chart class object
      var chart1 = new Chart(ctx, {
        type: "bar",
        data: data,
        options: options
      });
 
  });
  
</script>
@endsection