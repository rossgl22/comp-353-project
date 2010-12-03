<?php
include('db_connect.php');

$result = mysql_query("select * from users where net_name = ".$_SESSION[username]);

if($row = mysql_fetch_array($result))
{
	echo 	'<table class="pInfo">
	<tr>
		<th class="pInfo">personal info </th>		
		<th class="pInfo"></th>
	<tr>
		<td class="pInfo">name: </td>
		<td class="pInfo">'.$row[first_name].' '.$row[last_name].'</td>
	</tr><tr>
		<td class="pInfo">company: </td>
		<td class="pInfo">'.$row[company].'</td>
	</tr><tr>
		<td class="pInfo">email: </td>
		<td class="pInfo">'.$row[email].'</td>
	</tr><tr>
		<td class="pInfo">address: </td>
		<td class="pInfo">'.$row[address].'<br>'.$row[city].' '.$row[province].' '.$row[postal_code].'</td>	
	</tr></table>';
}
include('db_close.php');
?>