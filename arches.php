<?php

//establish the connection 

$host= "localhost";
$user="root";
$password="";
$database="arches";

$con = new mysqli($host,$user,$password,$database);

if ($con->connect_error)
	die($con->connect_error);
/*else
	echo "Connection Done!";
*/


?>