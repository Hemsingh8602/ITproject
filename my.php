<?php
$servername="localhost";
$username="root";
$password="";
$dbname="gymregistration";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	echo "Connection ok";
}
else
{
	echo "connection Faild".mysqli_connect_error();
}



?>