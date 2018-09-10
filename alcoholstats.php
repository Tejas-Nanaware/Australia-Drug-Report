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
</head>
<body>
	<?php
		$locations = array();
		$result = mysqli_query($bd, "SELECT * FROM alcoholstats");
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
			}).slice(1,19)
		});
		console.log(final_data);

		var titles = [[2000, 2001, 2002, 2003, 2004, 2005, 2006, 2007, 2008, 2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017]];
		var merged_data = titles.concat(final_data);
		console.log(merged_data);
	</script>
</body>
</html>