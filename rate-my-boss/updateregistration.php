<?php
$sender = 'updateregistration.php';
include('header.php');

include("db_connect.php");
//$net_name = $_GET["username"];

$query ="SELECT * FROM users where net_name like '".$_SESSION['username']."'";

if (!($result = @mysql_query($query, $con))) 
{

	die("Error " . mysql_errno(  ) . " : " . mysql_error(  ));
} 
else
{
	$FIRST_NAME = mysql_result($result, 0, "first_name");
	$LAST_NAME = mysql_result($result, 0, "last_name");
	$ADDRESS = mysql_result($result, 0, "address");
	$CITY = mysql_result($result, 0, "city");
	$PROVINCE = mysql_result($result, 0, "province");	
	$EMAIL = mysql_result($result, 0, "email");
	$QUESTION1 = mysql_result($result, 0, "question1");
	$ANSWER1 = mysql_result($result, 0, "answer1");
	$QUESTION2 = mysql_result($result, 0, "question2");
	$ANSWER2 = mysql_result($result, 0, "answer2");
	$USERTYPE = mysql_result($result, 0, "usertype");
}
  $type; //user_type in english
  switch ($USERTYPE) 
  {
   case 1:
	$type = 'Registered';
	break;

   case 2:
	$type = 'Financial';
	break;

   case 3:
	$type = 'Admin';
	break;

   case 4:
	$type = 'Business';
	break;

   default:
   	$type = 'Registered';
  }
  
include("db_close.php");

?>

<u><h1><p style="text-align: center;">Update User Information</p></h1></u>

<form name="updateinfo" method="post" action="action_updateregistration.php" onSubmit="returnValidateForm()">

	<u><h3>Current Account Type</u>:</h3>

	<select name= "UserType">
	<option value="<? echo($type); ?>"><? echo($type); ?></option> 

	</select><br>
	<u><h3>Enter Personal Information</u>:</h3>
	
	Company: <input type= "text" name="company" value="<? echo $company;?>" MAXLENGTH=40/><br>
	First Name:	<input type= "text" name="first_name" value="<? echo $first_name;?>" MAXLENGTH=40/><br>
	Last Name:	<input type= "text" name="last_name" value="<? echo $last_name;?>" MAXLENGTH=40/><br>
	Address:	<input type= "text" name="address" value="<? echo $address;?>" MAXLENGTH=40/><br>
	City:		<input type= "text" name="city" value="<? echo $city;?>" MAXLENGTH=40/><br>
	Province:	<input type= "text" name="province" value="<? echo $province;?>" MAXLENGTH=25/><br>
	Postal Code:	<input type= "text" name="postal_code" value="<? echo $postal_code;?>" MAXLENGTH=6/><br><br>
	Email Address:	<input type= "text" name="email" value="<? echo $email;?>" MAXLENGTH=40/><br>
	
	Question 1:	<input type= "text" name="question1" value="<? echo $question1;?>" MAXLENGTH=40/><br> 
	Secret Answer 1:<input type= "text" name="answer1" value="<? echo $answer1;?>" MAXLENGTH=40/><br>	
	Question 2:	<input type= "text" name="question2" value="<? echo $question2;?>" MAXLENGTH=40/><br>
	Secret Answer 2:<input type= "text" name="answer2" value="<? echo $answer2;?>" MAXLENGTH=40/><br>
	
	<input type="submit" value="Submit"/>
  	<input type="reset" value="Reset"/><br>
 </form>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	