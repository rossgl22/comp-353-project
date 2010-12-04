<?php
include('header.php');
?>


<u><h1><p style="text-align: center:">Add a Rating to an Organization</p></h1></u>

<form name= "orgRatingForm" method="post" action="action_addorg_rating.php" onSubmit="returnValidateFormReg()">

	<u><h3>Choose Organization</h3></u>
	<?php 
	 	
	function dropdown($strNameField, $strTableName, $strMethod="asc")
	{include('db_connect.php');
//		echo "<select name=\"$strNameOrdinal\">\n";
		echo "<option value=\"NULL\">Select Value</option>\n";
		
		$strQuery = "select $strNameField from $strTableName";
		$rsrcResult = mysql_query($strQuery) or die(mysql_error());
		
		while($arrayRow = mysql_fetch_assoc($rsrcResult))
		{
			$str = $arrayRow["$strNameField"];
			echo "<option value=\"$str\"></option>\n";
		}
		echo "</select>";
	include('db_close.php');
	}
	
	?>
	<p>Organization: <br />
	<?php dropdown('name', 'organization');?></p>


</form>





<?php include('footer.php');
?>