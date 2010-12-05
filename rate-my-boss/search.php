<?php

include('db_connect.php');

$query = "SELECT industry FROM organization";
$result = mysql_query($query);

echo"<p>Select an industry";
echo"<Select Industry='industry'>n";


while($row = mysql_fetch_assoc($result))
{	
	$ind=$row["industry"];
	echo "<OPTION VALUE = $ind>$ind";
}
?>
<SELECT NAME=ind>
<OPTION VALUE=0>Choose
<?= $options?>
</SELECT>
<?php
include('db_close.php'); 
?>

