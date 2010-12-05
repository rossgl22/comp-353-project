<?php
include('header.php');
include('db_connect.php');

$NAME = $_POST["name"];
$CATEGORY = $_POST["category"];
$COMPARE = $_POST["compare"];
$SCORE = $_POST["score"];
//$KEYWORDS = $_POST["terms"];
//#i found the algorithm for the keyword search here http://www.plus2net.com/sql_tutorial/search-keyword.php
//$KEYWORDS  = ltrim($KEYWORDS);
//$KEYWORDS = rtrim($KEYWORDS);#get rid of the spaces that may be on either side of the text
//#now handle spaces in between words
//$keyword_query = split(" ", $KEYWORDS);
//$q="";
//while(list($key, $val)=each($keyword_query))
//{
//	if($val<>" " and strlen($val) >0)
//	{
//		$q.= "name like '%$val%' or ";
//	}
//}
//$q=substr($q,0,(strlen($q)-3));#the string ends upwtih an extra OR tagged on at the end which we don't want, this line erases it
$COND = $CATEGORY. $COMPARE. "$SCORE";
//$big_query = "SELECT * FROM ORGANIZATION WHERE 
//	$q 
//	AND name = '".$NAME."'
//	";
echo '<u><h3>Business Name Results</h3><u>';
$name_query = "SELECT * FROM ORGANIZATION WHERE name = '".$NAME."'";
$name_data = @MYSQL_QUERY($name_query) or DIE("Query failed with error: ".MYSQL_ERROR());
while($row= MYSQL_FETCH_ARRAY($name_data))
{
	echo " Name: $row[name], City: $row[city], Province: $row[province], Industry: $row[industry]<br>";
}
echo '<u><h3>Results for your category criteria</h3><u>';
$category_query = "SELECT * FROM RATING WHERE $COND";
$category_data =  @MYSQL_QUERY($category_query) or DIE("Query failed with error: ".MYSQL_ERROR());
while($row= MYSQL_FETCH_ARRAY($category_data))
{
	echo "$row[orgname]<br>";
}

echo '<a href="my_page.php">Go Back</a>';
include('db_close.php');
include('footer.php');
?>