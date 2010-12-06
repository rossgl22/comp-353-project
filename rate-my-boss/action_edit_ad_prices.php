<?php
include('header.php');
include('db_connect.php');


$PRICE = $_POST['newprice'];

$statement = "UPDATE ad_price SET price = $PRICE";
$query = MYSQL_QUERY($statement) or die("query error: ".MYSQL_ERROR());
echo 'Prices updated.';

include('footer.php');
include('db_close.php');
?>

