<?php
include('header.php');
?>


<u><h1><p style="text-align: center:">Add a Rating to an Organization</p></h1></u>

<form name= "orgRatingForm" method="post" action="action_addorg_rating.php" 
onSubmit="returnValidateFormReg()">

	<u><h3>Choose Organization</h3></u>
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
		<br> <b>Social Values</b> 
		<input type="radio" name="social_values" value="0">0
		<input type="radio" name="social_values" value="1">1
		<input type="radio" name="social_values" value="2">2
		<input type="radio" name="social_values" value="3">3
		<input type="radio" name="social_values" value="4">4
		<input type="radio" name="social_values" value="5">5
		<input type="radio" name="social_values" value="6">6
		<input type="radio" name="social_values" value="7">7
		<input type="radio" name="social_values" value="8">8
		<input type="radio" name="social_values" value="9">9
		<input type="radio" name="social_values" value="10">10<br>
		
		<br> <b>Quality of Workplace</b> 
		<input type="radio" name="quality_of_workplace" value="0">0
		<input type="radio" name="quality_of_workplace" value="1">1
		<input type="radio" name="quality_of_workplace" value="2">2
		<input type="radio" name="quality_of_workplace" value="3">3
		<input type="radio" name="quality_of_workplace" value="4">4
		<input type="radio" name="quality_of_workplace" value="5">5
		<input type="radio" name="quality_of_workplace" value="6">6
		<input type="radio" name="quality_of_workplace" value="7">7
		<input type="radio" name="quality_of_workplace" value="8">8
		<input type="radio" name="quality_of_workplace" value="9">9
		<input type="radio" name="quality_of_workplace" value="10">10<br>
		
		<br> <b>Professionalism of Management</b> 
		<input type="radio" name="professionalism_management" value="0">0
		<input type="radio" name="professionalism_management" value="1">1
		<input type="radio" name="professionalism_management" value="2">2
		<input type="radio" name="professionalism_management" value="3">3
		<input type="radio" name="professionalism_management" value="4">4
		<input type="radio" name="professionalism_management" value="5">5
		<input type="radio" name="professionalism_management" value="6">6
		<input type="radio" name="professionalism_management" value="7">7
		<input type="radio" name="professionalism_management" value="8">8
		<input type="radio" name="professionalism_management" value="9">9
		<input type="radio" name="professionalism_management" value="10">10<br>
		
		<br> <b>Fairness of evaluations</b> 
		<input type="radio" name="fairness_eval" value="0">0
		<input type="radio" name="fairness_eval" value="1">1
		<input type="radio" name="fairness_eval" value="2">2
		<input type="radio" name="fairness_eval" value="3">3
		<input type="radio" name="fairness_eval" value="4">4
		<input type="radio" name="fairness_eval" value="5">5
		<input type="radio" name="fairness_eval" value="6">6
		<input type="radio" name="fairness_eval" value="7">7
		<input type="radio" name="fairness_eval" value="8">8
		<input type="radio" name="fairness_eval" value="9">9
		<input type="radio" name="fairness_eval" value="10">10<br>
		
		<br> <b>Openness with Staff</b> 
		<input type="radio" name="openness_with_staff" value="0">0
		<input type="radio" name="openness_with_staff" value="1">1
		<input type="radio" name="openness_with_staff" value="2">2
		<input type="radio" name="openness_with_staff" value="3">3
		<input type="radio" name="openness_with_staff" value="4">4
		<input type="radio" name="openness_with_staff" value="5">5
		<input type="radio" name="openness_with_staff" value="6">6
		<input type="radio" name="openness_with_staff" value="7">7
		<input type="radio" name="openness_with_staff" value="8">8
		<input type="radio" name="openness_with_staff" value="9">9
		<input type="radio" name="openness_with_staff" value="10">10<br>
		
		<br> <b>Cooperation Among Employees</b> 
		<input type="radio" name="cooperation_employees" value="0">0
		<input type="radio" name="cooperation_employees" value="1">1
		<input type="radio" name="cooperation_employees" value="2">2
		<input type="radio" name="cooperation_employees" value="3">3
		<input type="radio" name="cooperation_employees" value="4">4
		<input type="radio" name="cooperation_employees" value="5">5
		<input type="radio" name="cooperation_employees" value="6">6
		<input type="radio" name="cooperation_employees" value="7">7
		<input type="radio" name="cooperation_employees" value="8">8
		<input type="radio" name="cooperation_employees" value="9">9
		<input type="radio" name="cooperation_employees" value="10">10<br>
		
		<br> <b>Encourages Innovation</b> 
		<input type="radio" name="encourage_innovation" value="0">0
		<input type="radio" name="encourage_innovation" value="1">1
		<input type="radio" name="encourage_innovation" value="2">2
		<input type="radio" name="encourage_innovation" value="3">3
		<input type="radio" name="encourage_innovation" value="4">4
		<input type="radio" name="encourage_innovation" value="5">5
		<input type="radio" name="encourage_innovation" value="6">6
		<input type="radio" name="encourage_innovation" value="7">7
		<input type="radio" name="encourage_innovation" value="8">8
		<input type="radio" name="encourage_innovation" value="9">9
		<input type="radio" name="encourage_innovation" value="10">10<br>
		
		<br> <b>Rewards</b> 
		<input type="radio" name="rewards" value="0">0
		<input type="radio" name="rewards" value="1">1
		<input type="radio" name="rewards" value="2">2
		<input type="radio" name="rewards" value="3">3
		<input type="radio" name="rewards" value="4">4
		<input type="radio" name="rewards" value="5">5
		<input type="radio" name="rewards" value="6">6
		<input type="radio" name="rewards" value="7">7
		<input type="radio" name="rewards" value="8">8
		<input type="radio" name="rewards" value="9">9
		<input type="radio" name="rewards" value="10">10<br>
		
		<br> <b>Acceptance of New Ideas</b> 
		<input type="radio" name="acceptance_ideas" value="0">0
		<input type="radio" name="acceptance_ideas" value="1">1
		<input type="radio" name="acceptance_ideas" value="2">2
		<input type="radio" name="acceptance_ideas" value="3">3
		<input type="radio" name="acceptance_ideas" value="4">4
		<input type="radio" name="acceptance_ideas" value="5">5
		<input type="radio" name="acceptance_ideas" value="6">6
		<input type="radio" name="acceptance_ideas" value="7">7
		<input type="radio" name="acceptance_ideas" value="8">8
		<input type="radio" name="acceptance_ideas" value="9">9
		<input type="radio" name="acceptance_ideas" value="10">10<br>
		
		<br> <b>Fair Wages</b> 
		<input type="radio" name="fair_wages" value="0">0
		<input type="radio" name="fair_wages" value="1">1
		<input type="radio" name="fair_wages" value="2">2
		<input type="radio" name="fair_wages" value="3">3
		<input type="radio" name="fair_wages" value="4">4
		<input type="radio" name="fair_wages" value="5">5
		<input type="radio" name="fair_wages" value="6">6
		<input type="radio" name="fair_wages" value="7">7
		<input type="radio" name="fair_wages" value="8">8
		<input type="radio" name="fair_wages" value="9">9
		<input type="radio" name="fair_wages" value="10">10<br>
		
		<br> <b>Recognition of Achievement</b> 
		<input type="radio" name="recognition_achievement" value="0">0
		<input type="radio" name="recognition_achievement" value="1">1
		<input type="radio" name="recognition_achievement" value="2">2
		<input type="radio" name="recognition_achievement" value="3">3
		<input type="radio" name="recognition_achievement" value="4">4
		<input type="radio" name="recognition_achievement" value="5">5
		<input type="radio" name="recognition_achievement" value="6">6
		<input type="radio" name="recognition_achievement" value="7">7
		<input type="radio" name="recognition_achievement" value="8">8
		<input type="radio" name="recognition_achievement" value="9">9
		<input type="radio" name="recognition_achievement" value="10">10<br>
		
		<br> <b>Benefits</b> 
		<input type="radio" name="benefits" value="0">0
		<input type="radio" name="benefits" value="1">1
		<input type="radio" name="benefits" value="2">2
		<input type="radio" name="benefits" value="3">3
		<input type="radio" name="benefits" value="4">4
		<input type="radio" name="benefits" value="5">5
		<input type="radio" name="benefits" value="6">6
		<input type="radio" name="benefits" value="7">7
		<input type="radio" name="benefits" value="8">8
		<input type="radio" name="benefits" value="9">9
		<input type="radio" name="benefits" value="10">10<br>
		
		<br> <b>Support for Employees</b> 
		<input type="radio" name="support" value="0">0
		<input type="radio" name="support" value="1">1
		<input type="radio" name="support" value="2">2
		<input type="radio" name="support" value="3">3
		<input type="radio" name="support" value="4">4
		<input type="radio" name="support" value="5">5
		<input type="radio" name="support" value="6">6
		<input type="radio" name="support" value="7">7
		<input type="radio" name="support" value="8">8
		<input type="radio" name="support" value="9">9
		<input type="radio" name="support" value="10">10<br>
		
		<br> <b>Level of Stress</b> 
		<input type="radio" name="stress" value="0">0
		<input type="radio" name="stress" value="1">1
		<input type="radio" name="stress" value="2">2
		<input type="radio" name="stress" value="3">3
		<input type="radio" name="stress" value="4">4
		<input type="radio" name="stress" value="5">5
		<input type="radio" name="stress" value="6">6
		<input type="radio" name="stress" value="7">7
		<input type="radio" name="stress" value="8">8
		<input type="radio" name="stress" value="9">9
		<input type="radio" name="stress" value="10">10<br>
		
		<br> <b>Level of Collegiality</b> 
		<input type="radio" name="collegiality" value="0">0
		<input type="radio" name="collegiality" value="1">1
		<input type="radio" name="collegiality" value="2">2
		<input type="radio" name="collegiality" value="3">3
		<input type="radio" name="collegiality" value="4">4
		<input type="radio" name="collegiality" value="5">5
		<input type="radio" name="collegiality" value="6">6
		<input type="radio" name="collegiality" value="7">7
		<input type="radio" name="collegiality" value="8">8
		<input type="radio" name="collegiality" value="9">9
		<input type="radio" name="collegiality" value="10">10<br>
		
		<br> <b>Level of Bureaucracy or "Red Tape"</b> 
		<input type="radio" name="bureaucracy_red_tape" value="0">0
		<input type="radio" name="bureaucracy_red_tape" value="1">1
		<input type="radio" name="bureaucracy_red_tape" value="2">2
		<input type="radio" name="bureaucracy_red_tape" value="3">3
		<input type="radio" name="bureaucracy_red_tape" value="4">4
		<input type="radio" name="bureaucracy_red_tape" value="5">5
		<input type="radio" name="bureaucracy_red_tape" value="6">6
		<input type="radio" name="bureaucracy_red_tape" value="7">7
		<input type="radio" name="bureaucracy_red_tape" value="8">8
		<input type="radio" name="bureaucracy_red_tape" value="9">9
		<input type="radio" name="bureaucracy_red_tape" value="10">10<br>
		
		<br> <b>Possibility of Advancement</b> 
		<input type="radio" name="advancement" value="0">0
		<input type="radio" name="advancement" value="1">1
		<input type="radio" name="advancement" value="2">2
		<input type="radio" name="advancement" value="3">3
		<input type="radio" name="advancement" value="4">4
		<input type="radio" name="advancement" value="5">5
		<input type="radio" name="advancement" value="6">6
		<input type="radio" name="advancement" value="7">7
		<input type="radio" name="advancement" value="8">8
		<input type="radio" name="advancement" value="9">9
		<input type="radio" name="advancement" value="10">10<br>
		
		<br> <b>Family Support</b> 
		<input type="radio" name="family_support" value="0">0
		<input type="radio" name="family_support" value="1">1
		<input type="radio" name="family_support" value="2">2
		<input type="radio" name="family_support" value="3">3
		<input type="radio" name="family_support" value="4">4
		<input type="radio" name="family_support" value="5">5
		<input type="radio" name="family_support" value="6">6
		<input type="radio" name="family_support" value="7">7
		<input type="radio" name="family_support" value="8">8
		<input type="radio" name="family_support" value="9">9
		<input type="radio" name="family_support" value="10">10<br>
		
		<input type="submit" name="submit" value="submit">
		</form>
		<a href="my_page.php" >return</a>
	<?php 
	include('db_close.php');
	 	

include('footer.php');
?>