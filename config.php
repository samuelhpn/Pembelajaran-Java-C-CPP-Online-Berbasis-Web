<?php

$host="localhost";
$user="root";
$pass="";
$db="pi_user";

$con=mysqli_connect($host,$user,$pass,$db);

if(!$con)
{
	print("Not Connected<br>".mysql_error());

}
else
{
	//echo("Connected");
}



?>