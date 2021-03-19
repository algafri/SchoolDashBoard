<?php
$con = mysqli_connect("localhost", "root", "", "data"); 

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}
 //$specialization=$_GET["specialization"];
 //where specialization=$specialization

$result = mysqli_query($con, "SELECT * FROM student ");
$rows = array();
while($r= mysqli_fetch_assoc($result)){
	$rows[]=$r;
}
 print json_encode($rows);
 
?>