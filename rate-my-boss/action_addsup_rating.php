<?php
include('header.php');
include('db_connect.php');

$ID = $_POST['sup_id'];
$COMPANY = $_POST['company'];
$COMMENTS = $_POST['comments'];

$statement = "INSERT INTO supervisor_comments 
	VALUES ('".$ID."', '".$COMMENTS."', '".$COMPANY."')";
$query = MYSQL_QUERY($statement)
	or die("Query failed with error: ".MYSQL_ERROR());
?>
Your comments will be reviewed by a system administrator and removed if deemed inappropriate.
<a href='my_page.php'>my page</a>"
<?php 
include('footer.php');
include('db_close.php');
?>