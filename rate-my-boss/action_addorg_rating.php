<?php
#this file adds a rating to an organization

include("header.php");
include("db_connect.php");


#variables
$SOCIAL_VALUES = $_POST["social_values"];
$QUALITY_WORKPLACE = $_POST["quality_workplace"];
$PROFESSIONALISM_MANAGEMENT = $_POST["professinalism_management"];
$FAIRNESS_EVAL = $_POST["fairness_eval"];
$OPENNESS_WITH_STAFF = $_POST["openness_w_staff"];
$COOPERATION_AMONG_EMPLOYEE = $_POST["cooperation_among_employee"];
$ENCOURAGE_INNOVATION = $_POST["encourage_innovation"];
$REWARD_SYSTEM = $_POST["reward_system"];
$ACCEPTANCE_IDEAS = $_POST["acceptance_ideas"];
$FAIR_WAGES = $_POST["wages"];
$RECOGNITION_ACHIEVEMENT = $_POST["recognition_achievement"];
$QUALITY_BENEFITS = $_POST["quality_benefits"];
$SUPPORT_EMPLOYEE = $_POST["support_employees"];
$LEVEL_STRESS = $_POST["level_stress"];
$LEVEL_COLLEGIALITY = $_POST["level_collegiality"];
$LEVEL_BUREACRACY = $_POST["level_bureacracy"];
$POSSIBILITY_ADVANCEMENT = $_POST["possibility_advancement"];
$SUPPORT_FAMILY = $_POST["support_family"];
#/variables

	#statements to insert into the database
	$statement = "insert into rating (social_values, quality_workplace, professionalism_management,
						fairness_eval, openness_w_staff, cooperation_among_employees,
						encourage_innovation, reward_system, acceptance_ideas, wages,
						recognition_achievement, quality_benefits, support_employees,
						level_stress, level_collegiality, level_bureacracy, possibility_advancement,
						support_family) 
				values
				('$social_values', '$quality_workplace', '$professionalism_management',
					'$fairness_eval', '$openness_w_staff', '$cooperation_among_employees',
					'$encourage_innovation', '$reward_system', '$acceptance_ideas', '$wages',
					'$recognition_achievement', '$quality_benefits', '$support_employees',
					'$level_stress', '$level_collegiality', '$level_bureacracy', '$possibility_advancement',
					'$support_family)";
	if(!($result = mysql_query($statement, $connection)))
	{
		showerror();#something went wrong in the insertion
	}
include ("db_close.php");
include ("footer.php");
?>