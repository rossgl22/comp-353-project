<?php

include('db_connect.php');

echo '<h1>Search</h1> ';

$query = "SELECT industry FROM organization";
$result = mysql_query($query);
echo '<form name="search" method="post" action="search_results.php" onSubmit="returnValidateForm()"> ';
echo"<u><h3><p>Select an industry</u>:</h3>";
echo"<Select Industry='industry'>";

while($row = mysql_fetch_assoc($result))
{	
	$ind=$row["industry"];
	echo "<OPTION VALUE = $ind>$ind";
}
?>

<SELECT NAME=ind>

<u><h3>Enter Search Terms</u>:</h3>
<input type= "text" name="terms" value="keywords" MAXLENGTH=100/><br>

<input type="submit" value="Submit"/>



<OPTION VALUE=0>Choose
<?= $options?>
</SELECT>




</form>
<?php
include('db_close.php'); 
?>