<?php 

//THIS IS KINDA LIKE THE OTHER PROJECT BUT I REMOVED SOME OF THE UN-NEEDED STUFF. Needs a bit more modding.

include('header.php');

if($_SESSION['usertype'] == 99) //Special type for controllers

{
	echo $form = "<h1>Financial Controller</h1></form>";
	
	include("db_connect.php");
	
	$result = mysql_query ("SELECT * FROM 'prices'ORDER BY date_created DESC LIMIT 1"); //get the prices in order of date created with a descending limit of 1
	
if (!($result = @mysql_query($query, $con))) {

	die("Error " . mysql_errno(  ) . " : " . mysql_error(  ));
  } 

  //Setting variables
 else { 
	
	$placement = mysql_result($result, 0, "placement");
	$add_day = mysql_result($result, 0, "add_day");
	$add_image = mysql_result($result, 0, "add_image");
	$sp_placement = mysql_result($result, 0, "sp_placement");	
	$sp_add_day = mysql_result($result, 0, "sp_add_day");
	$num_days_renew = mysql_result($result, 0, "num_days_renew");
	
  }
 
  include("db_close.php");

  ?>

  <u><h3>Spot Add Fees</u>:</h3>

  <form name="fee_form" method="post" action="action_update_prices.php" onSubmit="return ValidateFinance()">
  Placement Fee:<input type="text" name="placement" value="<? echo $placement;?>" MAXLENGTH=10/><br>
  Monthly Fee:<input type="text" name="add_day" value="<? echo $add_day;?>" MAXLENGTH=10/><br>
  Image Fee:<input type="text" name="add_image" value="<? echo $add_image;?>" MAXLENGTH=10/><br>

 


  <input type="submit" value="Submit"/>
  <input type="reset" value="Reset"/><br>
  </form>

  <br> <u><h3>Clear Expired Advertisements:</h3></u>

  <button onClick="window.location='action_clear_expiredads.php'">Clear</button>

  <br> <u><h3>Change Financial Account Info:</h3></u>

  <a href="updateregistration.php">Edit Account</><br><br>

<?php
}
else
{
	echo '<font color="red">Access Denied</font>';
}
?>