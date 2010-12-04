<?php

include ("header.php");
include ("db_connect.php");

$query = "SELECT net_name, first_name, last_name FROM users";
$result = mysql_query($query);
?>

<form name = "look_and_remove" method="post" action="action_remove_user.php" onSubmit="returnValidateForm()">

<?php 
while($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
	echo "net name: {$row['net_name']} ".
		"first name: {$row['first_name']} ".
		"last name: {$row['last_name']} ";
		
	
	echo "<br>";
}
include ("db_close.php");
?>

<!--mysql_query("DELETE FROM users WHERE net_name like '".$row['net_name']."'"; ?>" /> -->
