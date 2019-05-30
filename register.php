<?php
include("arches.php");
if(isset($_POST)&& !empty($_POST))
{
//echo "<pre>";print_r($_post);echo "</pre>";

$name= $_POST['name'];
$email= $_POST['email'];
$massage= $_POST['massage'];

   $sql = "INSERT INTO contact( name,email,massage ) VALUES('$name','$email','$massage')";

//echo $sql;

if ($con->query($sql))
	header("Location:index.html");
else
	echo"Please try again.";
}

?>
