<?php
include("header.php");
include("db_connect.php");

$FIRST_NAME = $_POST["first_name"];
$LAST_NAME = $_POST["last_name"];
$ADDRESS = $_POST["address"];
$CITY = $_POST["city"];
$PROVINCE = $_POST["province"];	
$EMAIL = $_POST["email"];
$QUESTION1 = $_POST["question1"];
$ANSWER1 = $_POST["answer1"];
$QUESTION2 = $_POST["question2"];
$ANSWER2 = $_POST["answer2"];
$USERTYPE = $_POST["usertype"];


$statement = "update users set first_name='$FIRST_NAME', last_name='$LAST_NAME', address='$ADDRESS',
 city='$CITY', province='$PROVINCE', email='$EMAIL', question1 = '$QUESTION1', answer1 = '$ANSWER1',
 question2 = '$QUESTION2', answer2 = '$ANSWER2' where net_name = ".$_SESSION['username'];

if (!($result = mysql_query($statement, $con)))
{
	die("Error " . mysql_errno(  ) . " : " . mysql_error(  ));
} 
else 
{	
	echo "Registered Account Updated!<br>";
}

include("db_close.php");

?>