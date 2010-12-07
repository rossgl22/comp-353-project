<?php
#this file adds a rating to an organization

include("header.php");
include("db_connect.php");


#variables
$ID = $_POST["id"];
$SOCIAL_VALUES = $_POST["social_values"];
$QUALITY_WORKPLACE = $_POST["quality_of_workplace"];
$PROFESSIONALISM_MANAGEMENT = $_POST["professionalism_management"];
$FAIRNESS_EVAL = $_POST["fairness_eval"];
$OPENNESS_WITH_STAFF = $_POST["openness_with_staff"];
$COOPERATION_AMONG_EMPLOYEES = $_POST["cooperation_employees"];
$ENCOURAGE_INNOVATION = $_POST["encourage_innovation"];
$REWARD_SYSTEM = $_POST["rewards"];
$ACCEPTANCE_IDEAS = $_POST["acceptance_ideas"];
$WAGES = $_POST["fair_wages"];
$RECOGNITION_ACHIEVEMENT = $_POST["recognition_achievement"];
$QUALITY_BENEFITS = $_POST["benefits"];
$SUPPORT_EMPLOYEES = $_POST["support"];
$LEVEL_STRESS = $_POST["stress"];
$LEVEL_COLLEGIALITY = $_POST["collegiality"];
$LEVEL_BUREAUCRACY = $_POST["bureaucracy_red_tape"];
$POSSIBILITY_ADVANCEMENT = $_POST["advancement"];
$SUPPORT_FAMILY = $_POST["family_support"];
#/variables

	#statements to insert into the database
	$statement = "UPDATE rating set social_values=$SOCIAL_VALUES, quality_of_workplace= $QUALITY_WORKPLACE, professionalism_management=$PROFESSIONALISM_MANAGEMENT,
						fairness_eval=$FAIRNESS_EVAL, openness_with_staff=$OPENNESS_WITH_STAFF, cooperation_employees= $COOPERATION_AMONG_EMPLOYEES,
						encourage_innovation=$ENCOURAGE_INNOVATION, rewards=$REWARD_SYSTEM, acceptance_ideas=$ACCEPTANCE_IDEAS, fair_wages=$WAGES,
						recognition_achievement=$RECOGNITION_ACHIEVEMENT, benefits=$QUALITY_BENEFITS, support=$SUPPORT_EMPLOYEES,
						stress=$LEVEL_STRESS, collegiality = $LEVEL_COLLEGIALITY, bureaucracy_red_tape=$LEVEL_BUREAUCRACY, advancement=$POSSIBILITY_ADVANCEMENT,
						family_support=$SUPPORT_FAMILY WHERE id = $ID";
	$result = MYSQL_QUERY($statement) or die("Error : ".MYSQL_ERROR());
	
	echo "Rating accepted!<br>
	If you would like to update your comments their id number is" .$ID; 
	echo "<br><a href='my_page.php'>return to home page</a>";
include ("db_close.php");
include ("footer.php");
?>