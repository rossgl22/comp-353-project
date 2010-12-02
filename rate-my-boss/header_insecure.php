<?php
function showerror()
{
	die('Error '.mysql_error());
}
session_start();
unset($_SESSION['sender']);
if(isset($_SESSION["net_name"]))#user is logged in
{
	echo '<html>';
	echo '<head><link rel="stylesheet" type="text/css" href="style.css"/>';
	echo '<div class = "header">';#HEADER
	echo 'Logged in as: '.$_SESSION["username"].' - 
		<a href="logout.php">log out</a> - 
		go to <a href="my_page.php">my page</a> - 
		<a href="contactform.php">contact us</a> - 
		<a href="help.php">help</a>';
	echo '</head>';
	echo '</div>';
}
else#welcome guest
{	
	if($sender)
	{
		$_SESSION['sender'] = $sender;
	}
	echo '<html>';
	echo '<head><link rel="stylesheet" type="text/css" href="style.css"/>';
	echo '<div class = "header">';#HEADER
	echo 'Logged in as: guest <a href="login.php">log in</a> - 
		<a href="registerreg.php">register</a> -
 		<a href="contactform.php">contact us</a> - 
		<a href="help.php">help</a>';
	echo '</head>';
	echo '</div>';
}
?>
