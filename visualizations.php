<?php
	require 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Visualizations</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<h1>Visualizations</h1>
<p><a href='index.php'>Home</a></p>

<?php
	$locations = array();
	$result = mysqli_query($bd, "SELECT * FROM drugproblem");
	while($row = mysqli_fetch_array($result)) {
		array_push($locations,$row);
	}
?>

<script>
var my_data = <?php echo json_encode($locations,JSON_NUMERIC_CHECK); ?>;
console.log(my_data);
var new_data = Object.keys(my_data[0]).map(function(key) {
	return my_data[0][key];
});
console.log(new_data.slice(1,5));


var final_data = my_data.map(function(my_obj){
	return Object.keys(my_obj).map(function(element){
		return my_obj[element];
	}).slice(1,5)
});

var titles = [['Drug', 'Drug Problem', 'Death Cause', 'Concern']];

var merged_data = titles.concat(final_data);
console.log(final_data);
console.log(titles);
console.log(merged_data);

var v1 = merged_data.map(function(val){
	return val.slice(0,2);
});
console.log(v1);
var v2 = merged_data.map(function(val){
	return val.slice(0,1).concat(val.slice(2,3));
});
console.log(v2);
var v3 = merged_data.map(function(val){
	return val.slice(0,1).concat(val.slice(3,4));
});
console.log(v3);
</script>


<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Drug Problem
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
	  <div id="chart1"></div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          Death Cause
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
	  <div id="chart2"></div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Concern
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
	  <div id="chart3"></div>
      </div>
    </div>
  </div>
</div>


<!-- <div id="chart1"></div>
<div id="chart2"></div>
<div id="chart3"></div> -->

<script>
	google.charts.load('current', {packages: ['corechart', 'bar']});
	google.charts.setOnLoadCallback(drawTrendlines);

	function drawTrendlines() {
		var data = google.visualization.arrayToDataTable(v1);
		var options = {
        chart: {
          title: 'Drug Problem',
          subtitle: 'When people talk about "a drug problem", which is the first drug you think of?'
        }};
		var chart = new google.charts.Bar(document.getElementById('chart1'));
		chart.draw(data,options);
		}
</script>
<script>
	google.charts.load('current', {packages: ['corechart', 'bar']});
	google.charts.setOnLoadCallback(drawTrendlines);

	function drawTrendlines() {
		var data = google.visualization.arrayToDataTable(v2);
		var options = {
        chart: {
          title: 'Death Cause',
          subtitle: 'Which ONE of these drugs do you think directly or indirectly causes the most deaths in Australia?'
        }};
		var chart = new google.charts.Bar(document.getElementById('chart2'));
		chart.draw(data,options);
		}
</script>
<script>
	google.charts.load('current', {packages: ['corechart', 'bar']});
	google.charts.setOnLoadCallback(drawTrendlines);

	function drawTrendlines() {
		var data = google.visualization.arrayToDataTable(v3);
		var options = {
        chart: {
          title: 'Concern',
          subtitle: 'Which ONE of these forms of drug use do you think is the most serious concern for the general community?'
        }};
		var chart = new google.charts.Bar(document.getElementById('chart3'));
		chart.draw(data,options);
		}
</script>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
</body>
</html>