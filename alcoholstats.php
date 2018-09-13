<?php
  require 'connect.php';
  // Author: Tejas Nanaware
	// E-mail: nanawaret@hotmail.com
	// GitHub URL: https://github.com/Tejas-Nanaware
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Alcohol Statistical Visualization</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>

	<div id="curve_chart" style="width: 900px; height: 500px"></div>
	<div id="curve_chart2" style="width: 900px; height: 500px"></div>

	<?php
		$locations = array();
		$result = mysqli_query($bd, "SELECT * FROM alc");
		while($row = mysqli_fetch_array($result)) {
			array_push($locations,$row);
		}
	?>

	<script>
		var my_data = <?php echo json_encode($locations,JSON_NUMERIC_CHECK); ?>;
		console.log(my_data);
		var final_data = my_data.map(function(my_obj){
			return Object.keys(my_obj).map(function(element){
				return my_obj[element];
			}).slice(1,5)
		});
		console.log(final_data);

		var titles = [['Year', 'Population', 'Alcoholics', 'A/P']];
		var merged_data = titles.concat(final_data);
		var disp_data1 = merged_data.map(function(el){
			return el.slice(0,3);
		});
		console.log(disp_data1);
		var disp_data2 = merged_data.map(function(el){
			return el.slice(0,1).concat(el.slice(3,4));
		});
		console.log(disp_data2);
	</script>

	<script type="text/javascript">
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);

		function drawChart() {
			var data = google.visualization.arrayToDataTable(disp_data1);

			var options = {
			title: 'Population and Alcoholics',
			curveType: 'function',
			legend: { position: 'right' }
			};

			var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

			chart.draw(data, options);
		}
    </script>

	<script type="text/javascript">
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);

		function drawChart() {
			var data = google.visualization.arrayToDataTable(disp_data2);

			var options = {
			title: 'Alcoholics by Population',
			curveType: 'function',
			legend: { position: 'right' }
			};

			var chart = new google.visualization.LineChart(document.getElementById('curve_chart2'));

			chart.draw(data, options);
		}
    </script>

</body>
</html>