<?php
	require 'connect.php';
	$f_Name = isset($_POST['Name']) ? "%".$_POST['Name']."%" : "%%";
	$f_Suburb = isset($_POST['Suburb']) ? "%".$_POST['Suburb']."%" : "%%";
	$f_Contact = isset($_POST['Contact']) ? "%".$_POST['Contact']."%" : "%%";
	$f_Website = isset($_POST['Website']) ? "%".$_POST['Website']."%" : "%%";
	$f_Twitter = isset($_POST['Twitter']) ? "%".$_POST['Twitter']."%" : "%%";
	$f_Social_Media = isset($_POST['Social_Media']) ? "%".$_POST['Social_Media']."%" : "%%";
	$f_Cost = isset($_POST['Cost']) ? "%".$_POST['Cost']."%" : "%%";
	$f_Nearest_Train_Station = isset($_POST['Nearest_train_station']) ? "%".$_POST['Nearest_train_station']."%"  : "%%";
	$f_Category = isset($_POST['Category']) ? "%".$_POST['Category']."%" : "%%";
	// Author: Tejas Nanaware
	// E-mail: nanawaret@hotmail.com
	// GitHub URL: https://github.com/Tejas-Nanaware
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Australia Drug Data</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src='https://api.mapbox.com/mapbox.js/v3.0.1/mapbox.js'></script>
	<link href='https://api.mapbox.com/mapbox.js/v3.0.1/mapbox.css' rel='stylesheet' />
	<style>
	html, body { 
        height:100%
    }
    .map {
        margin: 1em auto;
        height:70%;
        /* border: 2px dashed black; */
    }
  	</style>
</head>
<body>
	<p><a href='index.php'>Home</a></p>

	<!-- filters -->
	<form method='POST' action='filteredreports.php'>
		<div class='form-row'>
			<div class='form-group col-md-3'>
				<div class="input-group input-group-sm mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text">Name</span>
					</div>
				<input type="text" class="form-control" placeholder="Name" name='Name'>
				</div>
			</div>
			<div class='form-group col-md-3'>
				<div class="input-group input-group-sm mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text">Suburb</span>
					</div>
				<input type="text" class="form-control" placeholder="Suburb" name='Suburb'>
				</div>
			</div>
			<div class='form-group col-md-3'>
				<div class="input-group input-group-sm mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text">Contact</span>
					</div>
				<input type="text" class="form-control" placeholder="Contact" name='Contact'>
				</div>
			</div>
		</div>
		<div class='form-row'>
			<div class='form-group col-md-3'>
				<div class="input-group input-group-sm mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text">Website</span>
					</div>
				<input type="text" class="form-control" placeholder="Website" name='Website'>
				</div>
			</div>
			<div class='form-group col-md-3'>
				<div class="input-group input-group-sm mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text">Twitter</span>
					</div>
				<input type="text" class="form-control" placeholder="Twitter" name='Twitter'>
				</div>
			</div>
			<div class='form-group col-md-3'>
				<div class="input-group input-group-sm mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text">Social Media</span>
					</div>
				<input type="text" class="form-control" placeholder="Social Media" name='Social_Media'>
				</div>
			</div>
		</div>
		<div class='form-row'>
			<div class='form-group col-md-3'>
				<div class="input-group input-group-sm mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text">Cost</span>
					</div>
				<input type="text" class="form-control" placeholder="Cost" name='Cost'>
				</div>
			</div>
			<div class='form-group col-md-3'>
				<div class="input-group input-group-sm mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text">Nearest Train Station</span>
					</div>
				<input type="text" class="form-control" placeholder="Nearest Train Station" name='Nearest_train_station'>
				</div>
			</div>
			<div class='form-group col-md-3'>
				<div class="input-group input-group-sm mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text">Category</span>
					</div>
				<input type="text" class="form-control" placeholder="Category" name='Category'>
				</div>
			</div>
			<div class='form-group col-md-3'>
				<button class='btn btn-primary btn-sm' type='submit'>Filter</button>
			</div>
		</div>
	</form>

	<!-- query execution -->

	<?php
		$query = 'SELECT * FROM supportservices WHERE Name LIKE "'.$f_Name.'" OR Suburb LIKE "'.$f_Suburb.'" OR Phone LIKE "'.$f_Contact.'" OR Website LIKE "'.$f_Website.'" OR Twitter LIKE "'.$f_Twitter.'" OR Social_Media LIKE "'.$f_Social_Media.'" OR Cost LIKE "'.$f_Cost.'" OR Nearest_train_station LIKE "'.$f_Nearest_Train_Station.'" OR Category_1 LIKE "'.$f_Category.'"';
		$result = mysqli_query($bd,$query);

		$map_array = array();
		$map_data = mysqli_query($bd, "SELECT Latitude, Longitude FROM supportservices WHERE Latitude IS NOT NULL AND Longitude IS NOT NULL");
		while($map_row = mysqli_fetch_array($map_data)) {
			array_push($map_array,$map_row);
		}
	?>

	<script>
		var js_data = <?php print json_encode($map_array, JSON_NUMERIC_CHECK); ?>;
		console.log(js_data);
		var new_data = Object.keys(js_data[0]).map(function(key) {
			return js_data[0][key];
		});
		console.log(new_data);
	</script>

	<!-- map -->
	<div id='map-popups' class='container map'></div>

	<script>
		L.mapbox.accessToken = <?php echo json_encode($mapbox_token) ?>;
		var mapPopups = L.mapbox.map('map-popups', 'mapbox.light')
		.setView([37.8, -96], 4);
		var myLayer = L.mapbox.featureLayer().addTo(mapPopups);
		var geojson = [
		{
			type: 'Feature',
			geometry: {
			type: 'Point',
			coordinates: [-77.031952, 38.913184]
			},
			properties: {
			title: 'Mapbox DC',
			description: '1714 14th St NW, Washington DC',
			'marker-color': '#3bb2d0',
			'marker-size': 'large',
			'marker-symbol': 'rocket'
			}
		},
		{
			type: 'Feature',
			geometry: {
			type: 'Point',
			coordinates: [-122.413682, 37.775408]
			},
			properties: {
			title: 'Mapbox SF',
			description: '155 9th St, San Francisco',
			'marker-color': '#3bb2d0',
			'marker-size': 'large',
			'marker-symbol': 'rocket'
			}
		}
		];
		myLayer.setGeoJSON(geojson);
		mapPopups.scrollWheelZoom.disable();
	</script>

	<!-- table display -->
	<?php
		// $result = mysqli_query($bd,"SELECT * FROM supportservices WHERE Name LIKE ".$f_Name." OR Suburb LIKE ".$f_Suburb." OR Free_Call LIKE ".$f_Contact." OR Website LIKE ".$f_Website." OR Twitter LIKE ".$f_Twitter." OR Social_Media LIKE ".$f_Social_Media." OR Cost LIKE ".$f_Cost." OR Nearest_train_station LIKE ".$f_Nearest_Train_Station." OR Category_1 LIKE ".$f_Category);
		echo '<table class = "table table-striped table-responsive" style="padding-top: 2%">
			<thead>
				<tr>
				<th>Name</th>
				<th>What</th>
				<th>Who</th>
				<th>Address_1</th>
				<th>Address_2</th>
				<th>Suburb</th>
				<th>Phone</th>
				<th>Phone_2</th>
				<th>Free_Call</th>
				<th>Email</th>
				<th>Website</th>
				<th>Twitter</th>
				<th>Social_Media</th>
				<th>Monday</th>
				<th>Tuesday</th>
				<th>Wednesday</th>
				<th>Thursday</th>
				<th>Friday</th>
				<th>Saturday</th>
				<th>Sunday</th>
				<th>Public_Holidays</th>
				<th>Cost</th>
				<th>Tram_routes</th>
				<th>Bus_routes</th>
				<th>Nearest_train_station</th>
				<th>Category_1</th>
				<th>Category_2</th>
				<th>Category_3</th>
				<th>Category_4</th>
				<th>Category_5</th>
				<th>Category_6</th>
				<th>Longitude</th>
				<th>Latitude</th>
				<th>Geocoded_Location</th>
				</tr>
			</thead>
			<tbody>';
		while($row = mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>" . $row['Name'] . "</td>";
			echo "<td>" . $row['What'] . "</td>";
			echo "<td>" . $row['Who'] . "</td>";
			echo "<td>" . $row['Address_1'] . "</td>";
			echo "<td>" . $row['Address_2'] . "</td>";
			echo "<td>" . $row['Suburb'] . "</td>";
			echo "<td>" . $row['Phone'] . "</td>";
			echo "<td>" . $row['Phone_2'] . "</td>";
			echo "<td>" . $row['Free_Call'] . "</td>";
			echo "<td>" . $row['Email'] . "</td>";
			echo "<td>" . $row['Website'] . "</td>";
			echo "<td>" . $row['Twitter'] . "</td>";
			echo "<td>" . $row['Social_Media'] . "</td>";
			echo "<td>" . $row['Monday'] . "</td>";
			echo "<td>" . $row['Tuesday'] . "</td>";
			echo "<td>" . $row['Wednesday'] . "</td>";
			echo "<td>" . $row['Thursday'] . "</td>";
			echo "<td>" . $row['Friday'] . "</td>";
			echo "<td>" . $row['Saturday'] . "</td>";
			echo "<td>" . $row['Sunday'] . "</td>";
			echo "<td>" . $row['Public_Holidays'] . "</td>";
			echo "<td>" . $row['Cost'] . "</td>";
			echo "<td>" . $row['Tram_routes'] . "</td>";
			echo "<td>" . $row['Bus_routes'] . "</td>";
			echo "<td>" . $row['Nearest_train_station'] . "</td>";
			echo "<td>" . $row['Category_1'] . "</td>";
			echo "<td>" . $row['Category_2'] . "</td>";
			echo "<td>" . $row['Category_3'] . "</td>";
			echo "<td>" . $row['Category_4'] . "</td>";
			echo "<td>" . $row['Category_5'] . "</td>";
			echo "<td>" . $row['Category_6'] . "</td>";
			echo "<td>" . $row['Longitude'] . "</td>";
			echo "<td>" . $row['Latitude'] . "</td>";
			echo "<td>" . $row['Geocoded_Location'] . "</td>";
			echo "</tr>";
		}
		echo "</tbody>
		</table>";
		?>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>