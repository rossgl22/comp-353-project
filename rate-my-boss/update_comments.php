<?php
include('header.php');
include('db_connect.php');
?>
<u><h1><p Update Supervisor Comments></p></h1></u>

<form name = "updateSup" method = "post" action = "action_update_comments.php" onSubmit="returnValidateFormReg()">


<br> <b><h1>Enter the Rating ID#</h1></b>
<input type="text" name="id">"

<u><h1><p Add comments on your supervisor></p></h1></u>
<u><h3>Please refrain from including people's names</u>:</h3>
Comments: <textarea name="comments" rows=5 cols=100></textarea><br>



<input type="submit" value="submit">
<input type="reset" value="Clear"/>


<?php 
include('footer.php');
include('db_connect.php');
?>