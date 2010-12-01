<?php
#this handles adding an organization to the database
include ("header.php");
include("db_connect.php");
#variables
$NAME = $_POST["name"];
$CITY = $_POST["city"];
$PROVINCE = $_POST["province"];
#/variables



if( empty ($name))#the following just check to see that the user's entered all the info
{
	$flag_notEmpty = false;
	$message1 = "You must enter a name";
}
if (empty ($city))
{
	$flag_notEmpty = false;
	$message2 = "You must enter a city";
}
if (empty ($province))
{
	$flag_notEmpty = false;
	$message3 = "You must enter a province/state/county";
}
if ($flag_notEmpty == false) #while the user hasn't filled in the boxes
{
	echo("$message1<br> $message2<br> $message3<br> <p><a href = 'add_organization.php'>Back</></a></p>");
	?>
	<FORM><INPUT type = "button" value = 'BACK' onclick= history.back();'></FORM><?
}
if($flag_notEmpty == true)#the user has filled in everythign
{
	if($_SESSION["id_user"] != "")
	{
		$id_user = $_SESSION["id_user"];#get the user's id
	}
	#statements to insert into the database
	$statement = "insert into organization (name, city, province) 
		values
			('$name', '$city', '$province')";
	if(!($result = mysql_query($statement, $connection)))
	{
		showerror();#something went wrong in the insertion
	}
	
}
include ("db_close.php");
include ("footer.php");


echo '<html>



<body bgcolor = "#CCFF99"



<head><font color = blue face = "Times New Roman"  > <h1><i> RATE MY
<br>    BOSS.com </i></h1></font></head>


<fieldset><legend>
<h2> Add New Organization</h2></legend>

<form method ="post">

<table>
	<tr>

		<td>Organization Name:</td>
        </tr>

        <tr>
		<td><input type="text" size="30" name = "name"  class="input" /></td>
	</tr>

<tr>

		<td>City:</td>
        </tr>

        <tr>
		<td><input type="text" size="30" name = "city"  class="input" /></td>
	</tr>

<tr>
      <td>Province:</td>
</tr>

        <tr>
		<td><input type="text" size="30" name = "province"  class="input" /></td>
	</tr>

<tr>
      <td>Organization Type:</td>
</tr>

        <tr>
		<td><input type="text" size="30" name = "type"  class="input" /></td>
	</tr>

<tr>
      <td>Approximate size of organization:</td>
</tr>

        <tr>
		<td><input type="text" size="30" name = "size"  class="input" /></td>
	</tr>

<tr>
       <td>Organization Website:</td>
</tr>

        <tr>
		<td><input type="text" size="30" name = "url"  class="input" value = "http://" /></td>
	</tr>

</table>


</fieldset>

<input type="submit" value="Send">
<input type="reset" value="Clear"/>

<p><h3><a href="my_page.php" target=_top>Home</a></h3>

</form>

</body>

</html>';



?>