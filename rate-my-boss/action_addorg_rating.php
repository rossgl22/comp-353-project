<?php
#this file adds a rating to an organization

include("header.php");
include("db_connect.php");


#variables
$NAME = $_POST["name"];
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
$LEVEL_BUREACRACY = $_POST["bureaucracy_red_tape"];
$POSSIBILITY_ADVANCEMENT = $_POST["advancement"];
$SUPPORT_FAMILY = $_POST["family_support"];
#/variables

	#statements to insert into the database
	$statement = "INSERT INTO rating (orgname, social_values, quality_of_workplace, professionalism_management,
						fairness_eval, openness_with_staff, cooperation_employees,
						encourage_innovation, rewards, acceptance_ideas, fair_wages,
						recognition_achievement, benefits, support,
						stress, collegiality, bureacracy_red_tape, advancement,
						family_support)". 
				"VALUES
				('$NAME', '$SOCIAL_VALUES', '$QUALITY_WORKPLACE', '$PROFESSIONALISM_MANAGEMENT',
					'$FAIRNESS_EVAL', '$OPENNESS_WITH_STAFF', '$COOPERATION_AMONG_EMPLOYEES',
					'$ENCOURAGE_INNOVATION', '$REWARD_SYSTEM', '$ACCEPTANCE_IDEAS', '$WAGES',
					'$RECOGNITION_ACHIEVEMENT', '$QUALITY_BENEFITS', '$SUPPORT_EMPLOYEES',
					'$LEVEL_STRESS', '$LEVEL_COLLEGIALITY', '$LEVEL_BUREACRACY', '$POSSIBILITY_ADVANCEMENT',
					'$SUPPORT_FAMILY')";
	if(!($result = MYSQL_QUERY($statement)))
	{
		showerror();#something went wrong in the insertion
	}
	echo "Rating accepted!<br>
	<a href='my_page.php'>return to home page</a>";
include ("db_close.php");
include ("footer.php");
?>