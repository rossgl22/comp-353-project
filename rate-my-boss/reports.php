<?php
include('header.php');
include('db_connect.php');
echo '<h1>Stats</h1>';

echo "<h2>Number of Users</h2><br>";
$statement = "SELECT * FROM users";
$query = MYSQL_QUERY($statement);
echo MYSQL_NUM_ROWS($query);

echo"<br><h2>Number of Organizations></h2><br>";
$statement = "SELECT * FROM organization";
$query = MYSQL_QUERY($statement);
echo MYSQL_NUM_ROWS($query);

echo"<br><h2>Number of Ratings></h2><br>";
$statement = "SELECT * FROM rating";
$query = MYSQL_QUERY($statement);
echo MYSQL_NUM_ROWS($query);

echo"<br><h2>Number of Supervisor Comments></h2><br>";
$statement = "SELECT * FROM supervisor_comments";
$query = MYSQL_QUERY($statement);
echo MYSQL_NUM_ROWS($query);

echo"<br><h2>Number of Ads></h2><br>";
$statement = "SELECT * FROM advertisements";
$query = MYSQL_QUERY($statement);
echo MYSQL_NUM_ROWS($query);


include('footer.php');
include('db_close.php');
?>