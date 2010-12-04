<?php
include("header.php");
include("db_connect.php");


$query = "SELECT name, city, province FROM organization";
$result = mysql_query($query);

while($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
	echo "name: {$row['name']} ".
		"city: {$row['city']} ".
		"province: {$row['province']} ";
	echo "<br>";
}

include("footer.php");
?>