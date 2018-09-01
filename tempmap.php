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
	<title>map</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src='https://api.mapbox.com/mapbox.js/v3.0.1/mapbox.js'></script>
	<link href='https://api.mapbox.com/mapbox.js/v3.0.1/mapbox.css' rel='stylesheet' />
	<style>
		body {
		margin: 0;
		padding :0;
		}
		.map {
		position: absolute;
		top: 0;
		bottom: 0;
		width: 100%;
		}
	</style>
</head>
<body>
	<div id='map-popups' class='map'> </div>
	<?php
		$map_array = array();
		$map_data = mysqli_query($bd, "SELECT Phone, Latitude, Longitude FROM supportservices");
		// $map_data = mysqli_query($bd, "SELECT * FROM supportservices");
		
		// echo '<table>
		// 		<thead>
		// 			<tr>
		// 				<th>Phone</th>
		// 				<th>Latitude</th>
		// 				<th>Longitude</th>
		// 			</tr>
		// 		</thead>
		// 		<tbody>';
				while ($map_row = mysqli_fetch_array($map_data)) {
					// echo '<tr>';
					// echo '<td>'.$map_row['Phone'].'</td>';
					// echo '<td>'.$map_row['Latitude'].'</td>';
					// echo '<td>'.$map_row['Longitude'].'</td>';
					// echo '</tr>';

					array_push($map_array,$map_row);
				}
	?>

	<script>
		var dat = <?php echo json_encode($map_array, JSON_NUMERIC_CHECK); ?>;
		console.log(dat);
		
		var new_data = Object.keys(dat[0]).map(function(key) {
			return dat[0][key];
		});
		console.log(new_data.slice(0,3));

		var final_data = dat.map(function(my_obj){
			return Object.keys(my_obj).map(function(element){
				return my_obj[element];
			}).slice(0,3)
		});
		console.log(final_data);

	</script>

	<!-- map -->
	<script>
		L.mapbox.accessToken = <?php echo json_encode($mapbox_token) ?>;
		var mapPopups = L.mapbox.map('map-popups', 'mapbox.light')
		.setView([-23.5, 105], 3);
		var myLayer = L.mapbox.featureLayer().addTo(mapPopups);
		var geojson = [];
		for (var each_location = 0; each_location < final_data.length; each_location++) {
			geojson.push({
				type: 'Feature',
				geometry: {
				type: 'Point',
				coordinates: [final_data[each_location][1], final_data[each_location][2]]
				},
				properties: {
				title: final_data[each_location][0],
				description: final_data[each_location][1] + ', ' + final_data[each_location][2],
				'marker-color': '#3bb2d0',
				'marker-size': 'large',
				'marker-symbol': 'rocket'
				}
			});
			console.log("Plotting "+final_data[each_location][0]+" at "+final_data[each_location][1]+", "+final_data[each_location][2]);
		}
		console.log(geojson);
		myLayer.setGeoJSON(geojson);
		mapPopups.scrollWheelZoom.disable();
		</script>
</body>
</html>