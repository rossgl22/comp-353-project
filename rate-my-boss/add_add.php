<?php

include("header.php");

//Star a session with user and get the ID

if ($_SESSION["id_user"] !=""){
	   $id_user = $_SESSION["id_user"];
   }	
   
include("db_connect.php");


//Query to get number of images and current prices
$num_images = "SELECT count(*) as img_count FROM temp_img where net_name = '$net_name'";

