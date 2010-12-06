<?php
#user creation
include("header_insecure.php");
include("db_connect.php");

#variables
$NET_NAME = $_POST["net_name"];
$FIRST_NAME = $_POST["first_name"];
$LAST_NAME = $_POST["last_name"];
$ADDRESS = $_POST["address"];
$CITY = $_POST["city"];
$PROVINCE = $_POST["province"];
$POSTAL_CODE =  $_POST["postal_code"];
$PASSWORD = $_POST["password"];
$EMAIL = $_POST["email"];
$QUESTION1 = $_POST["question1"];
$ANSWER1 = $_POST["answer1"];
$QUESTION2 = $_POST["question2"];
$ANSWER2 = $_POST["answer2"];
$USERTYPE = 1;
$COMPANY = "";

#user type specific variables
switch ($_POST['UserType'])
{
	case "registered":
		$USERTYPE = 1;
		$COMPANY = $_POST["company"];
		break;
	case "financial":
		$USERTYPE = 2;
		break;
	case "admin":
		$USERTYPE = 3;
		break;
	case "business":
		$USERTYPE = 4;
		$POSITION = $_POST["position"];
		$MOBILE = $_POST[""];
		$FAX = $_POST[""];
		$LAND = $_POST[""];
		break;
}
#/variables
//$net_name_exists = "SELECT net_name FROM users WHERE net_name = '$NET_NAME' LIMIT 1";

if (!($result = @mysql_query("SELECT net_name FROM users WHERE net_name = '$NET_NAME' LIMIT 1", $con))) 
{	
	die("ERROR " .mysql_errno( ) . " : " . mysql_error());	
}
if ("SELECT net_name FROM users WHERE net_name = '$NET_NAME' LIMIT 1" > 0)
{
	echo "Username already exists!<br>";
}
else 
{
	$statement = MYSQL_QUERY("INSERT into users (net_name, company, first_name, last_name, email,
										password, question1, answer1, question2, answer2,
										address, city, province, postal_code, usertype)". 
				"VALUES 
									('$NET_NAME', '$COMPANY', '$FIRST_NAME','$LAST_NAME', '$EMAIL', 
									'$PASSWORD', '$QUESTION1', '$ANSWER1', '$QUESTION2', '$ANSWER2', 
									'$ADDRESS', '$CITY', '$PROVINCE', '$POSTAL_CODE', '$USERTYPE')");
	echo "Registered Account Created!<br>
	<a href='login.php'>login</a>";
}

(include "db_close.php");

?>