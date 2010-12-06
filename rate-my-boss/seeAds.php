<?php


//This is the table with the comments. 
echo '<h1>Advertisements</h1> 
	<table border = 1 class="comments"> <tr>
		<th class="comments">Advertisement_ID</th>
		<th class="comments">Title</th>
		<th class="comments">Description</th>
		<th class="comments">Start</th>
		<th class="comments">End</th>
		<th class="comments">Price</th>
		<th class="comments">Type</th>
		<th class="comments">View/Edit</th>
	</tr>';


//We connect to the db to match the user id to his advertisements
include('db_connect.php'); 
$result = mysql_query('select * from advertisers x where 
			 x.net_name = '.$_SESSION['net_name']);

include('db_close.php');

while($row = mysql_fetch_array($result)) //Fetch the next row and while there is a result then display.
{
	echo '	<tr>
		<td class="comments">'.$row['Advertisement_ID'].'</td>
		<td class="comments">'.$row['Title'].'</td>
		<td class="comments">'.$row['Description'].'</td>
		<td class="comments">'.$row['Start'].'</td>
		<td class="comments">'.$row['End'].'</td>
		<td class="comments">$'.$row['Price'].'</td>
		<td class="comments">'.$row['Type'].'</td>
		
		
		<td class="comments"><a href="displayAd.php?id_ad='.$row['Advertisement_ID'].'">Go!</a>
		</td></tr>';
	
}
echo '</table>';


?>