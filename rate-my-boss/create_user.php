<?php
#user creation
include("header_insecure.php");
include("db_connect.php");

#variables
$NET_NAME = $_POST["net_name"];
$FIRST_NAME = $_POST['first_name'];
$LAST_NAME = $_POST['last_name'];
$ADDRESS = $_POST['address'];
$CITY = $_POST["city"];
$PROVINCE = $_POST["province"];
$PASSWORD = $_POST["password"];
$EMAIL = $_POST["email"];
$QUESTION1 = $_POST["question1"];
$ANSWER1 = $_POST["answer1"];
$QUESTION2 = $_POST["question2"];
$ANSWER2 = $_POST["answer2"];
$USERTYPE;
#user type specific variables
switch ($_POST['usertype'])
{
	case "registered":
		$usertype = 1;
		$WORKS_AT = $_POST["works_at"];
		break;
	case "financial":
		$usertype = 2;
		break;
	case "admin":
		$usertype = 3;
		break;
	case "business":
		$usertype = 4;
		$POSITION = $_POST["position"];
		$MOBILE = $_POST[""];
		$FAX = $_POST[""];
		$LAND = $_POST[""];
		break;
}
#/variables
$netnameexists = "SELECT netname FROM users WHERE netname = '$netname' LIMIT 1";
if (!($result = @mysql_query($netnamexists, $con))) 
{
	die("ERROR " .mysql_errno( ) . " : " . mysql_error());
}
if ($netnamematch > 0)
{
	echo "Username already exists!<br>";
}
else 
{
	$statement = "insert into users (net_name, company, first_name, last_name, email,
										password, question1, answer1, question2, answer2,
										address, city, province, postal_code, usertype) 
				values 
									('$net_name', '$company', $first_name', '$last_name', '$email', 
									'$password', $question1', '$answer1', '$question2', '$answer2', 
									'$address', '$city', '$province', '$postal_code', '$usertype')";
}
if ($form)
		{
			echo $form;
		}
		
		else
		{
			#html stuff to show the page
			echo '<form action = "create_user.php" method = "post">
				<table>
				<tr>
					<td>net name:</td> 
					<td><input type="text" name = "net_name"  class="input" /></td>
				</tr>
				<tr>
					<td>password:</td> 
					<td><input type="text" name = "password"  class="input" /></td>
				</tr>
				<tr>
					<td>company:</td> 
					<td><input type="text" name = "company"  class="input" /></td>
				</tr>
				<tr>
					<td>first name:</td> 
					<td><input type="text" name = "first_name"  class="input" /></td>
				</tr>
				<tr>
					<td>last name:</td>
					<td><input type="password" name = "last_Name" class="input" /></td>
				</tr>
				<tr>
					<td>email:</td> 
					<td><input type="text" name = "email"  class="input" /></td>
				</tr>
				<tr>
					<td>question 1:</td> 
					<td><input type="text" name = "question1"  class="input" /></td>
				</tr>
				<tr>
					<td>answer to question 1:</td> 
					<td><input type="text" name = "answer1"  class="input" /></td>
				</tr>
				<tr>
					<td>question 2:</td> 
					<td><input type="text" name = "question2"  class="input" /></td>
				</tr>
				<tr>
					<td>answer to question 2:</td> 
					<td><input type="text" name = "answer2"  class="input" /></td>
				</tr>
				<tr>
					<td>address:</td> 
					<td><input type="text" name = "address"  class="input" /></td>
				</tr>
				<tr>
					<td>city:</td> 
					<td><input type="text" name = "city"  class="input" /></td>
				</tr>
				<tr>
					<td>province:</td> 
					<td><input type="text" name = "province"  class="input" /></td>
				</tr>
				<tr>
					<td>postal_code:</td> 
					<td><input type="text" name = "postal_code"  class="input" /></td>
				</tr>
				<tr>
					<td>usertype:</td> 
					<td><input type="text" name = "usertype"  class="input" /></td>
				</tr>
				</table>
				<input type="submit" value="create" class="button" /> 
				</form> 
				
				</html>';
		}
(include "db_close.php");
(include "footer.php");

?>