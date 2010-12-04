<?php

include('db_connect.php');

$query = "SELECT industry FROM organization";
$result = mysql_query($query);

$options = "";

while($row = mysql_fetch_array($result))
{
	
	$ind=$row["industry"];
//	$thing=$row["thing"];
	$options.="<OPTION VALUE=\"$ind\">".$ind.'</option>';	
}
?>
<SELECT NAME=ind>
<OPTION VALUE=0>Choose
<?= $options?>
</SELECT>
<?php
include('db_close.php'); 
?>

