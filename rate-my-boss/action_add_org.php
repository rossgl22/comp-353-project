<?php
include('header.php');
include("db_connect.php");
#variables
$NAME = $_POST["name"];
$CITY = $_POST["city"];
$PROVINCE = $_POST["province"];
#/variables

//if( empty ($name))#the following just check to see that the user's entered all the info
//{
//	$flag_notEmpty = false;
//	$message1 = "You must enter a name";
//}
//if (empty ($city))
//{
//	$flag_notEmpty = false;
//	$message2 = "You must enter a city";
//}
//if (empty ($province))
//{
//	$flag_notEmpty = false;
//	$message3 = "You must enter a province/state/county";
//}
//if ($flag_notEmpty == false) #while the user hasn't filled in the boxes
//{
//	echo("$message1<br> $message2<br> $message3<br> <p><a href = 'add_organization.php'>Back</></a></p>");	
//}
//if($flag_notEmpty == true)#the user has filled in everythign
//{
//	if($_SESSION["id_user"] != "")
//	{
//		$id_user = $_SESSION["id_user"];#get the user's id
//	}
	#statements to insert into the database
	$statement = "INSERT into organization (name, city, province)" 
		."VALUES
			('$NAME', '$CITY', '$PROVINCE')";
	if(!($result = mysql_query($statement, $connection)))
	{
		showerror();#something went wrong in the insertion
	}
	else
	{
		echo "Organization added to the database. Thank you. <br>
			<a href='my_page.php'>my page</a>";
	}
//}
include('footer.php');
include ("db_close.php");
?>