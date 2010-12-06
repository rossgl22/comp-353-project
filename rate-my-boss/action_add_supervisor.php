<?php
include('header.php');
include('db_connect.php');

$COMPANY = $_POST["companyname"];
$AUTHORITY = $_POST["authority"];


$statement = "INSERT INTO supervisor (authority, company_name) " 
		."VALUES ('$AUTHORITY', '$COMPANY')";
$query = MYSQL_QUERY($statement) or die("Query failed with error: ".MYSQL_ERROR());
$ID = MYSQL_INSERT_ID();
?>
<form name = "addSupRatePre" method = "post" action = "addsup_rating.php" onSubmit="returnValidateFormReg()">
Supervisor successfully added. <br>
<input type="hidden" name = "sup_id" value= "'.$ID.'"/>
<input type="hidden" name = "company" value= "'.$COMPANY.'"/>
Continue to add comments
<input type="submit" value="submit">
<?php 
include('db_close.php');
?>