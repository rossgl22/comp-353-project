<?php
include('header.php');

?>
<u><h1><p Add a Supervisor></p></h1></u>

<form name = "addSup" method = "post" action = "action_add_sup_rating.php" onSubmit="returnValidateFormReg()">

<u><h3>Enter Supervisor's Information (Please refrain from entering the supervisor's name</h3></u>

Company Name: <input type= "text" name="companyname" MAXLENGTH=15/><br>
Level of Authority <input type= "text" name="authority" MAXLENGTH=15/><br>

<u><h1><p Add comments on your supervisor></p></h1></u>
<u><h3>Please refrain from including people's names</u>:</h3>
Comments: <textarea name="comments" rows=5 cols=100></textarea><br>


<input type="submit" value="submit">
<input type="reset" value="Clear"/>


</form>
<br>

<?php
include('footer.php');?>