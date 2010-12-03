<?php
#this page is the user's main page after logging in. 
$sender = 'my_page.php';
include("header.php");#all pages need to have the header

$usertype = $_SESSION['usertype'];
switch($usertype)#this switch statement sets the current setting
{
	case 1: #registered user
		echo '<title>'.$_SESSION["username"].' - registered user</title>';
		break;
	case 2: #administrator
		echo '<title>'.$_SESSION["username"].' - administrator</title>';
		break;
	case 3: #financial controller
		echo '<title>'.$_SESSION["username"].' - financial controller</title>';
		break;
	case 4: #business agent
		echo '<title>'.$_SESSION["username"].' - business agent</title>';
		break;		
}
echo '<table height=75% width = 100%>';
echo '<tr>';
echo '<td width=20% class = "sidePanel">';
	echo '<span style = "width:300px">';
	echo '<br><a href = "index.php"> search RMB</a>';
	if($_SESSION['usertype']==1)
	{
		echo '<br><a href = "add_organization.php" add an organization</a>';		
	}
	echo '<br><a href = "contact.php"> contact us</a>';
	echo '<br><a href = "help.php"> help </a><br>';
//	echo $sidePanel;
	include('myInfo.php');
	echo '<br><a href="updateregistration.php"> update my profile</a><br>';
	
	echo '</span>';
echo '<td>';
echo '<td class = "mainWindow">'; 
if($_SESSION['usertype']!=4)#ads aren't shown to the people who put up the ads
{
	include('seeAds.php');
}


echo'</td></tr></table>';
include('footer.php');
?>