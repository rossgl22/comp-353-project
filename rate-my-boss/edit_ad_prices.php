<?php
include('header.php');
include('db_connect.php');

$PRICE = MYSQL_QUERY("SELECT price FROM ad_price");


	
while($row = mysql_fetch_array($PRICE))
{
	echo "<br><br><b>Current Price </b>= $".$row['price'];
}
echo '<form name="edit_price" method="post" action="action_edit_ad_prices.php" 
			onSubmit="returnValidateForm()">
		<u><h3>Edit Current Ad Price</u>:</h3>';
echo 'Please Enter a New Price<input type= "text" name="newprice"  MAXLENGTH=40/><br>';
echo '	<input type="submit" value="Submit"/></form>';

include('footer.php');
include('db_close.php');
?>