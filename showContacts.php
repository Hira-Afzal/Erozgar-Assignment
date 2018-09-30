<?php
session_start();
include("connect.php");
$ID=$_SESSION['id'];
$sql = "Select * from sharedcontacts where myid=$ID";

$result = mysqli_query($conn,$sql);
while($row= mysqli_fetch_assoc($result))
{
	echo"<br>ID : " . $row['myid'];
	echo"<br>Contact Name : " . $row['ContactName'];
	echo"<br>Contact Number : " . $row['ContactNum'];
	echo"<br><br><br>";
}
?>