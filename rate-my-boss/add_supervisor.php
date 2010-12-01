<html>

<head>

   <title>Rate My Boss</title>
   
   <style type="text/css">
.inputtext { width: 254px; height: 44px; }
</style>
   

</head>

<body bgcolor = "#CCFF99">

<h1><i><font color = blue face = "Times New Roman">  RATE MY
<br>    BOSS.com </font></i></h1>



<?php

//Create the form using string

echo $form = "<h2>Add a Supervisor</h2>
 		 <form method=post action=add_supervisor.php>
		 Enter level of authority of supervisor<br> 
 		 <input type=text name=level size=30><br>	    
		 Enter your comments about the supervisor<br>
		 <textarea cols=40 rows=10 name=comment class=input></textarea>	
 		 </form>
 		 ";
 		 
if ( (is_numeric($var))) 



 		 ?>

</body>
</html>
