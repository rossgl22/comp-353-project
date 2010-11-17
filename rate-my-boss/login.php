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
			
			if(isset($_POST["reponse"]) && ($row = mysql_fetch_array($resulT)))
			{
				if	($_POST["question"]==1)	
				{ 
					$answer = $row['answer1'];
				}
				else ($_POST["question"]==2)	
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
			
		}
	?>