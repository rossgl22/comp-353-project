<?php

include("header.php");

?>

if($_SESSION['usertype']==4)
{
	<form name="businessForm" method="post" 
	action="action_create_user.php" onSubmit="returnValidateFormReg()">
	
	<u><h3>Input Username and Password</u>:</h3>
	Username:	<input type= "text" name="net_name" MAXLENGTH=15/><br>	
	Password:	<input type= "password" name="password" MAXLENGTH=15/><br><br>
	
}
