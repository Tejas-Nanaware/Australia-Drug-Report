<?php
	require 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Australia Drug Data</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<p><a href='index.php'>Home</a></p>
<?php
    $result = mysqli_query($bd,"SELECT id,Name,What,Who,Address_1,Address_2,Suburb,Phone,Phone_2,Free_Call,Email,Website,Twitter,Social_Media,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday,Public_Holidays,Cost,Tram_routes,Bus_routes,Nearest_train_station,Category_1,Category_2,Category_3,Category_4,Category_5,Category_6,Longitude,Latitude,Geocoded_Location FROM supportservices");
	echo '<table class = "table table-striped table-responsive">
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