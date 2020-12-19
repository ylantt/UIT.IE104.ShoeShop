<h1 class="text-center text-danger font-weight-bold">SHOP N7</h1>
<div class="d-flex justify-content-between mt-5">
     <div class="card">
          <div class="card-body">
               <h5 class="card-title">SALES</h5>
               <h6 class="card-subtitle mb-2 text-muted">Total sales in this year</h6>
               <p class="card-text font-weight-bold" style="font-size: 50px">1234$</p>
          </div>
     </div>

     <div class="card">
          <div class="card-body">
               <h5 class="card-title">Orders</h5>
               <h6 class="card-subtitle mb-2 text-muted">TThe number of delivered orders of this month</h6>
               <p class="card-text font-weight-bold" style="font-size: 50px">120</p>
          </div>
     </div>

     <div class="card">
          <div class="card-body">
               <h5 class="card-title">Users</h5>
               <h6 class="card-subtitle mb-2 text-muted">The number of users in system</h6>
               <p class="card-text font-weight-bold" style="font-size: 50px">100</p>
          </div>
     </div>
</div>

<div id="linechart_material" style="width: 100%; height: 450px;" class="ml-auto mr-auto mt-5 mb-3"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
     google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'Day');
      data.addColumn('number', 'Sales');

      data.addRows([
        [1, 80.9],
        [2, 69.5],
        [3, 57],
        [4, 18.8],
        [5, 17.6],
        [6, 13.6],
        [7, 12.3],
        [8, 29.2],
        [9, 42.9],
        [10, 30.9],
      ]);

      var options = {
        chart: {
          title: 'Sales of the last 10 days',
          subtitle: 'in dollars (USD)'
        },
        width: 1070,
        height: 500
      };

      var chart = new google.charts.Line(document.getElementById('linechart_material'));

      chart.draw(data, google.charts.Line.convertOptions(options));
    }
</script>