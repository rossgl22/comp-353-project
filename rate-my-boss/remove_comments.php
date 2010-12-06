<?php

include ("header.php");
include ("db_connect.php");

$query = "SELECT * FROM supervisor_comments";
$result = mysql_query($query);
?>
<u><h1><p style="text-align: center;">Remove Comments</p></h1></u>

<form name = "look_and_remove" method="post" action="action_remove_user.php" 
	onSubmit="returnValidateForm()">

<?php 
while($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
	echo "<input name = 'names' type = radio  value = ".$row['net_name'].">
	{$row['first_name']} 
	{$row['last_name']} ";

	echo "<br>";
}
?>
<input type = submit  value=submit>
<input type = reset  value = reset>

</form>
<?php 
include('footer.php');
include ("db_close.php");?>