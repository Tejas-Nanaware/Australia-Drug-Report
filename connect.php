<?php 
    require 'config.php';
    $mysql_hostname=$mysql_hostname;
    $mysql_user=$mysql_user;
    $mysql_password = $mysql_password;
    $mysql_database = $mysql_database;
    $prefix = $prefix;
    $bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password,$mysql_database) or die("Could not connect database");
    // Author: Tejas Nanaware
	// E-mail: nanawaret@hotmail.com
	// GitHub URL: https://github.com/Tejas-Nanaware
 ?>