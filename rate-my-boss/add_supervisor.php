<?php
include('header.php');

?>
<u><h1><p Add a Supervisor></p></h1></u>

<form name = "addSup" method = "post" action = "action_add_supervisor.php" onSubmit="returnValidateFormReg()">

<u><h3>Enter Supervisor's Information (Please refrain from entering the supervisor's name</h3></u>

Company Name: <input type= "text" name="companyname" MAXLENGTH=15/><br>
Level of Authority <input type= "text" name="authority" MAXLENGTH=15/><br>

<input type="submit" value="submit">
<input type="reset" value="Clear"/>


</form>
<br>

<?php
include('footer.php');?>