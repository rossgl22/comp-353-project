<?php
#user creation
include("header_insecure.php");
include("db_connect.php");

#variables
$NET_NAME = $_POST["net_name"];
$FIRST_NAME = $_POST['first_name'];
$LAST_NAME = $_POST['last_name'];
$CITY = $_POST["city"];
$PROVINCE = $_POST["province"];
$PASSWORD = $_POST["password"];
$EMAIL = $_POST["email"];
$QUESTION1 = $_POST["question1"];
$ANSWER1 = $_POST["answer1"];
$QUESTION2 = $_POST["question2"];
$ANSWER2 = $_POST["answer2"];
$USER_TYPE;
#user type specific variables
switch ($_POST['user_type'])
{
	case "registered":
		$usertype = 1;
		$WORKS_AT = $_POST["works_at"];
		break;
	case "financial":
		$usertype = 2;
		break;
	case "admin":
		$usertype = 3;
		break;
	case "business":
		$usertype = 4;
		$POSITION = $_POST["position"];
		$MOBILE = $_POST[""];
		$FAX = $_POST[""];
		$LAND = $_POST[""];
		break;
}
#/variables
$netnameexists = "SELECT netname FROM users WHERE netname = '$netname' LIMIT 1";
if (!($result = @mysql_query($netnamexists, $con))) 
{
	die("ERROR " .mysql_errno( ) . " : " . mysql_error());
}
if ($netnamematch > 0)
{
	echo "Username already exists!<br>";
}
else 
{
	$statement = "insert into users (net_name, company, first_name, last_name, email,
										password, question1, answer1, question2, answer2,
										address, city, province, postal_code, usertype) 
				values 
									('$net_name', '$company', $first_name', '$last_name', '$email', 
									'$password', $question1', '$answer1', '$question2', '$answer2', 
									'$address', '$city', '$province', '$postal_code', '$usertype')";
}

(include "db_close.php");
(include "footer.php");

?>