<?php
	#open connection to dabase
	$host = 'localhost';
	$username = 'username';
	$password = 'password';
	$database = 'database';
	#connect to our database
	$con = mysql_connect($host, $username, $password);
	if(!$con)
	{
		die('unable to connect'.mysql_error());
	}
	mysql_select_db($database, $con);
	$connection = $con;
?>