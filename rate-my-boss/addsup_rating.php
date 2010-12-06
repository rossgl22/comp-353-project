<?php
include('header.php');


$ID = $_POST["sup_id"];
$COMPANY = $_POST["company"];
?>
<u><h1><p Add comments on your supervisor></p></h1></u>

<form name="newSupComm" method ="post" action="action_addsup_rating.php" onSubmit="returnValidateForm()">
	
<u><h3>Please refrain from including people's names</u>:</h3>
		
Comments: <textarea name="comments" rows=5 cols=100></textarea><br>

<input type="hidden" name = "sup_id" value= "'.$ID.'"/>
<input type="hidden" name = "company" value= "'.$COMPANY.'"/>
<input type="submit" value="submit">
</form>
<?php 
include('footer.php');

?>
