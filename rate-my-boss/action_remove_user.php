<?php
include("header.php");
include("db_connect.php");

$NET_NAME = $_POST["names"];

$query = MYSQL_QUERY("DELETE FROM users WHERE net_name like '$NET_NAME'") or die(MYSQL_ERROR());
echo "User successfuly deleted!<br>
	<a href='my_page.php'>return to your main page</a>";
include ("db_close.php");
include ("footer.php");
?>