<?php
include('db_connect.php');

$result = mysql_query("SELECT * FROM users WHERE net_name like '".$_SESSION['username']."'") 
		or die("Query failed with error: ".mysql_error());

if($row = mysql_fetch_array($result))
{
	$first_name = $row['first_name'];
	$last_name =  $row['last_name'];
	$company = $row['company'];
	$email = $row['email'];
	$address = $row['address'];
	$city = $row['city'];
	$province = $row['province'];
	$postal_code = $row['postal_code'];
	echo 	'<table class="pInfo">
	<tr>
		<th class="pInfo">personal info </th>		
		<th class="pInfo"></th>
	<tr>
		<td class="pInfo">name: </td>
		<td class="pInfo">'.$first_name.' '.$last_name.'</td>
	</tr><tr>
		<td class="pInfo">company: </td>
		<td class="pInfo">'.$company.'</td>
	</tr><tr>
		<td class="pInfo">email: </td>
		<td class="pInfo">'.$email.'</td>
	</tr><tr>
		<td class="pInfo">address: </td>
		<td class="pInfo">'.$address.'<br>'.$city.' '.$province.' '.$postal_code.'</td>	
	</tr></table>';
}
else {
	
	echo'nothing';
}
include('db_close.php');
?>