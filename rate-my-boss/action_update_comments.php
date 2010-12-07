<?php
include('header.php');
include('db_connect.php');


$COMMENTS = $_POST['comments'];
$ID = $_POST['id'];

$statement = "UPDATE supervisor_comments set comments = '$COMMENTS' where comment_id='$ID'";
$query = MYSQL_QUERY($statement) or die("query error".MYSQL_ERROR());
echo"update complete";
include('footer.php');
include('db_close.php');
?>