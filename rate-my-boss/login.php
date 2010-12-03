<?php
#login functions
$errorMessage = "";
$form = NULL;
session_start();
if(isset($_POST["username"])) 
{
	include('db_connect.php');
	
	#authentication
	$result = mysql_query("select * from users 
					where net_name like binary '".$_POST["username"]."' 
					and password like binary '".$_POST["password"]."'");
	include('db_close.php');
	$errorMessage = '<font color = "red" > test1<br></font>';
	
	if($row = mysql_fetch_array($result))
	{
		
//		#check which question the user answered
//		if	($_POST["question"]==1)	
//		{ 
//			$answer = $row['answer1'];
//		}
//		else
//		{ 
//			$answer = $row['answer2']; 
//		}		
//				
//		if(strcasecmp($_POST['response'],$answer)==0)
//		{	#user answered security question correctly				
//			$_SESSION['username'] = $row['net_name'];
//			$_SESSION['usertype'] = $row['usertype'];
////			$_SESSION['first_name'] = $row['first_name'];
////			include('db_connect.php');
////			if(!mysql_query("insert into logins values
////				(".$row['id_user'].", '".date('Y-m-d h:m:s',time())."')"))
////			{		
////				die("mysql error".date('Y-m-d h:m:s',time()).mysql_error());
////			}
////			include('db_close.php');
//			#send user to his homepage
			if(isset($_SESSION['sender']))
			{
				header("location: ".$_SESSION['sender']);
			}
			header('location: my_page.php');					
//		}
//		else
//		{
//			$errorMessage = '<font color = "red" > Wrong answer<br></font>';
//		}
	}
//	else if($row = mysql_fetch_array($result)) #user and password exist
//	{
//		$errorMessage = '<font color = "red" > test3<br></font>';
//		#will ask user a security question
//		$random = rand()%2;#generates random # to pick question
//		$form = '<head><link rel="stylesheet" type="text/css" href="style.css"/></head>
//						<form action = "login.php" method = post">';
//		
//		if ($random == 1)
//		{
//			$form = $form.$row['question1'];
//		} 
//		else 
//		{
//			$form = $form.$row['question2'];
//		}
//		#creates box for the user to answer question and posts back to login.php
//		$form = $form.'<br> <input type="text" class="input" name = "response" />
//			<input type="hidden" name = "username" value= "'.$_POST["username"].'"/>
//			<input type="hidden" name = "password" value= "'.$_POST["password"].'"/>
//			<input type="hidden" name = "question" value= '.$random.'/>
//			<input type="submit" value="enter" class="button" /></form>';
//	}
	else #user and pass do not exist
	{
		$errorMessage = '<font color = "red" > user authentication failed<br></font>';
	}
	
}
echo '<html>
	<head><link rel="stylesheet" type="text/css" href="style.css"/></head>'
	.$errorMessage; #outputs an error if it exists
	
if ($form)
{
	echo $form;
}
else
{

	echo '<form action = "login.php" method = "post">
		<table>
		<tr>
			<td>username:</td> 
			<td><input type="text" name = "username"  class="input" /></td>
		</tr>
		<tr>
			<td>password:</td>
			<td><input type="password" name = "password" class="input" /></td>
		</tr>
		</table>
		<input type="submit" value="log in" class="button" /> 
		- <a href="create_user.php">register</a>
		- <a href="passwordReset.php">forgot your password</a>
		</form> 
		</html>';
}
	