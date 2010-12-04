<?php
#this handles adding an organization to the database
include ("header.php");

?>
<u><h1><p Add New Organization></p></h1></u>

<form name="newOrgForm" method ="post" action="action_add_org.php" onSubmit="returnValidateFormReg()">
	
<u><h3>Enter Company Info Please</u>:</h3>
		
		Company Name:	<input type= "text" name="name" MAXLENGTH=15/><br>	
		City:	<input type= "text" name="city" MAXLENGTH=15/><br><br>
		Province:	<input type= "text" name="province" MAXLENGTH=15/><br>	
		

<input type="submit" value="submit">
<input type="reset" value="Clear"/>

</form>
<br>