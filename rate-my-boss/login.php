<?php
	#login functions
		session_start();
		if(isset($_POST["username"])) 
		{
			include('db_connect.php');
			
			#authentication
			$result = mysql_query("select * from users 
							where netname like binary '".$_POST["username"]."' 
							and password like binary '".$_POST["password"]."'");
			include('db_close.php');
			
			if(isset($_POST["reponse"]) && ($row = mysql_fetch_array($result)))
			{
				#
				if	($_POST["question"]==1)	
				{ 
					$answer = $row['answer1'];
				}
				else if($_POST["question"]==2)	
				{ 
					$answer = $row['answer2']; 
				}
				
				if(strcasecmp($_POST[response],$answer)==0)
				{
					if($row['active'])
					{
						$_SESSION['username'] = $row['netname'];
						$_SESSION['usertype'] = $row['usertype'];
						$_SESSION['id_user'] = $row['id_user'];
						include('db_connect.php');
						if(!mysql_query("insert into logins values
							(".$row['id_user'].", '".date('Y-m-d h:m:s',time())."')"))
						{		
							die("mysql error".date('Y-m-d h:m:s',time()).mysql_error());
						}
						include('db_close.php');
		
						if(isset($_SESSION['sender']))
						{
							header("location: ".$_SESSION['sender']);
						}
						header('location: my_page.php');
					}
				}
			}
			else if($row = mysql_fetch_array($result)) #user and password exist
			{
				#will ask user a security question
				$random = rand()%2;
				$form = '<head><link>rel="stylesheet" type="text/css" href="setyle.css"/></head>
								<form action = "login.php" method = post">';
				
				if ($random == 1)
				{
					$form = $form.$row['question1'];
				} 
				else 
				{
					$form = $form.$row['question2'];
				}
				$form = $form.'<br> <input type="text" class="input" name = "responce" />
					<input type="hidden" name = "username" value= "'.$_POST["username"].'"/>
					<input type="hidden" name = "password" value= "'.$_POST["password"].'"/>
					<input type="hidden" name = "question" value= '.$random.'/>
					<input type="submit" value="enter" class="button" /></form>';
			}
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
			#html stuff to show the page
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
	?>