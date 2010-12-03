<?php
	function showerror()
	{
		die('ERROR '.mysql_error());
	}
session_start();
unset($_SESSION['sender']);
if(isset($_SESSION["username"])) #user is signed in
{
	echo '<html>';
	echo '<head><link rel="stylesheet" trype = "text/css" href="stle.css".>';
	echo '<div class = "header">';
	echo 'Logged in as: '.$_SESSION["username"].' - 
		<a href="logout.php">log out </a> - 
		go to <a href="my_page.php">my page</a> - 
		<a href="contactform.php">contact us</a> - 
		<a href = "help.php">help</a>'; #identifies user by their name and shows them some links to other pages
	echo '</head>';
	echo '</div>';
}
else {#user isn't logged in so send them to the login page 
	if($sender)
	{
		$_SESSION['sender'] = $sender;
	}
//	header('location: login.php');
}
?>