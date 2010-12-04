<?php
include("header_insecure.php");
?>

<u><h1><p style="text-align: center;">REGISTER</p></h1></u>

<form name="registerForm" method="post" 
	action="action_create_user.php" onSubmit="returnValidateFormReg()">

	<u><h3>Choose User Type</u>:</h3>
	
	<select name = "UserType">
	<option value= "Registered">Registered</option>
	<option value= "Admin">Admin</option>
	<option value= "Financial">Financial</option>
	<option value= "Business">Business</option>	
	</select><br>

	<u><h3>Create Username and Password</u>:</h3>
	Username:	<input type= "text" name="net_name" MAXLENGTH=15/><br>	
	Password:	<input type= "password" name="password" MAXLENGTH=15/><br><br>

	<u><h3>Create Security Questions</u>:</h3>
	Question 1:	<input type= "text" name="question1" MAXLENGTH=40/><br> 
	Secret Answer 1:<input type= "text" name="answer1" MAXLENGTH=40/><br>	
	Question 2:	<input type= "text" name="question2" MAXLENGTH=40/><br>
	Secret Answer 2:<input type= "text" name="answer2" MAXLENGTH=40/><br>
		
	<u><h3>Please Enter Your Personal Informtaion</u>:</h3>
	First Name:	<input type= "text" name="first_name" MAXLENGTH=40/><br>
	Last Name:	<input type= "text" name="last_name" MAXLENGTH=40/><br>
	Email Address:	<input type= "text" name="email" MAXLENGTH=40/><br>
	Address:	<input type= "text" name="address" MAXLENGTH=40/><br>
	City:		<input type= "text" name="city" MAXLENGTH=40/><br>
	Province:	<input type= "text" name="province" MAXLENGTH=25/><br>
	Postal Code:	<input type= "text" name="postal_code" MAXLENGTH=6/><br><br>

	<input type="submit" value="submit"/>
	<input type="reset" value="reset"/><br>
	</form>
	<br>