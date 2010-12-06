<?php

include ("header.php");
include ("db_connect.php");

$query = "SELECT net_name, first_name, last_name FROM users WHERE usertype != 2";
$result = mysql_query($query);
?>
<u><h1><p style="text-align: center;">Remove Users</p></h1></u>

<form name = "look_and_remove" method="post" action="action_remove_user.php" 
	onSubmit="returnValidateForm()">

<?php 
while($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
	echo "<input name = 'names' type = radio  value = ".$row['net_name'].">
	{$row['first_name']} 
	{$row['last_name']} ";
//	if($_POST['names'] == $row['net_name'])
//	{
//		echo "checked";
//	}
	echo "<br>";
}
?>
<input type = submit  value=submit>
<input type = reset  value = reset>

</form>
<?php 
include ("db_close.php");
include('footer.php');?>