<?php
	error_reporting(0);
	$mysql_host = "localhost";
	$mysql_database = "loginsys";
	$mysql_user = "root";
	$mysql_password = "";
	
	$con = mysql_connect($mysql_host,$mysql_user,$mysql_password);		
	if(!$con) {
		die('Could not connect: ' . mysql_error());
	}
	
	$db_select = mysql_select_db($mysql_database, $con);
	if (!$db_select) {
		die('Could not connect: ' . mysql_error());
	}
?>