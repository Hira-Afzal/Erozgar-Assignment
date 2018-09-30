<?php

include("connect.php");
$sql = "Select * from users";

$result = mysqli_query($conn,$sql);
while($row= mysqli_fetch_assoc($result))
{
	echo"<br>ID : " . $row['ID'];
	echo"<br>Name : " . $row['Name'];
	echo"<br>Password : " . $row['Password'];
	echo"<br>Phone Number 1 : " . $row['pnum'];
	if($row['snum'] != NULL)
	{
	echo"<br>Phone Number 2 : " . $row['snum'];
	}
	if($row['tnum'] != NULL)
	{
	echo"<br>Phone Number 3 : " . $row['tnum'];
	}
}
?>