

<h1>Search</h1>
<form name="search" method="post" action="search_results.php" 
onSubmit="returnValidateFormReg()"> 

<fieldset>
<legend><font color=purple><b>Company Name</b></font> </legend>

<?php
include('db_connect.php');
$query = "SELECT name FROM organization";
	$result = @mysql_query($query);
	
	echo "<p>Select a company: ";
	echo "<Select Name='name'>n";
	while($row = mysql_fetch_assoc($result))
	{		
		$name=$row["name"];
		echo "<OPTION VALUE =$name>$name";	
	}
	echo "</select>";
?>
</fieldset>
<!--<fieldset>-->
<!--<legend> <font color=purple><b>Keywords</b></font> </legend>-->
<!--<u><h3>Enter Search Terms</u>:</h3>-->
<!--<input type= "text" name="terms" value="keywords" MAXLENGTH=100/><br>-->
<!--</fieldset>-->

<!-- Select List -->
<fieldset>

<legend> <font color=purple><b>Specify a Category Rating</b></font> </legend>
Rating Category: 
<br><select name="category">
<option value="social_values">Social Values
<option value="quality_of_workplace">Quality of Workplace
<option value="professionalism_management">Professionalism of Management
<option value="fairness_eval">Fairness of Evaluation
<option value="openness_with_staff">Openness with Staff
<option value="cooperation_employees" selected>Cooperation Between Employees<!--selected indicates the default-->
<option value="encourage_innovation">Encourages Innovation
<option value="rewards">Rewards
<option value="acceptance_ideas">Acceptance of New Ideas
<option value="fair_wages">Fairness of Wages
<option value="recognition_achievement">Recognition of Achievement
<option value="benefits">Quality of Benefits
<option value="support">Employee Support
<option value="stress">Level of Stress
<option value="collegiality">Collegiality
<option value="bureaucracy_red_tape">Level of Bureaucracy / Red Tape
<option value="advancement">Possibility of Advancement
<option value="family_support">Family Support
</select>


<bR> <b>Great/Lower or Equal to?</b>
<input type="radio" name="compare" value="&#62">&#62
		<input type="radio" name="compare" value="&#60">&#60
		<input type="radio" name="compare" value="=">=
<br> <b>Score</b> 
		<input type="radio" name="score" value="0">0
		<input type="radio" name="score" value="1">1
		<input type="radio" name="score" value="2">2
		<input type="radio" name="score" value="3">3
		<input type="radio" name="score" value="4">4
		<input type="radio" name="score" value="5">5
		<input type="radio" name="score" value="6">6
		<input type="radio" name="score" value="7">7
		<input type="radio" name="score" value="8">8
		<input type="radio" name="score" value="9">9
		<input type="radio" name="score" value="10">10<br>
</fieldset>

 

<input type="submit" value="Submit"/>
</form>



<?php
include('db_close.php'); 
?>