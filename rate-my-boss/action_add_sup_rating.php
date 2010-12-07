<?php
include('header.php');
include('db_connect.php');


$COMMENTS = $_POST['comments'];
$COMPANY = $_POST["companyname"];
$AUTHORITY = $_POST["authority"];

$statement = "INSERT INTO supervisor (authority, company_name) " 
		."VALUES ('$AUTHORITY', '$COMPANY')";
$query = MYSQL_QUERY($statement) or die("Sup Query failed with error: ".MYSQL_ERROR());
$ID = MYSQL_INSERT_ID();

$statement = "INSERT INTO supervisor_comments (id_num, comments, orgname)
	VALUES ('".$ID."', '".$COMMENTS."', '".$COMPANY."')";

$query = MYSQL_QUERY($statement)
	or die("Sup Comm Query failed with error: ".MYSQL_ERROR());
?>
Your comments will be reviewed by a system administrator and removed if deemed inappropriate.<br>
If you would like to update your comments their ID# is <?php echo $ID;?>
<a href='my_page.php'>my page</a>"
<?php 
include('footer.php');
include('db_close.php');
?>