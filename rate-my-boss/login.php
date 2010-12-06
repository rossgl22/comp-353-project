<?php
include('header_insecure.php');
#login functions
$errorMessage = "";
$form = NULL;
session_start();
if(isset($_POST["username"])) 
{#users has tried logging in
	include('db_connect.php');
	
	#authentication
	$result = mysql_query("select * from users 
					where net_name like binary '".$_POST["username"]."' 
					and password like binary '".$_POST["password"]."'");
	include('db_close.php');
	
	
	if($row = mysql_fetch_array($result))
	{					
		$_SESSION['username'] = $row['net_name'];
		$_SESSION['usertype'] = $row['usertype'];
		#send user to his homepage
		if(isset($_SESSION['sender']))
		{
			header("location: ".$_SESSION['sender']);
		}
		header('location: my_page.php');
	}
	else #user and pass do not exist
	{
		$errorMessage = '<font color = "red" > user authentication failed<br></font>';
	}
	
}
echo '<html>
	<head><link rel="stylesheet" type="text/css" href="style.css"/></head>'
	.$errorMessage; #outputs an error if it exists
	
if ($form)
{
	echo $form;
}
else
{

	echo '<form action = "login.php" method = "post">
		<table>
		<tr>
			<td>username:</td> 
			<td><input type="text" name = "username"  class="input" /></td>
		</tr>
		<tr>
			<td>password:</td>
			<td><input type="password" name = "password" class="input" /></td>
		</tr>
		</table>
		<input type="submit" value="log in" class="button" /> 
		- <a href="registration.php">register</a>
		- <a href="passwordReset.php">forgot your password</a>
		</form> 
		</html>';
}
include('footer.php');
?>
	