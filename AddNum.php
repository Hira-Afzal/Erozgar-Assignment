<?php
session_start();
include("connect.php");
$ID=$_SESSION['id'];
$sql1 = "Select * from users where ID=$ID ";
$result1 = mysqli_query($conn,$sql1);
$row1=mysqli_fetch_array($result1,MYSQLI_ASSOC);
$NUM=$_POST["num"];


if($row1['snum'] == NULL)
{

	$sql2="UPDATE users SET snum='$NUM' WHERE ID=$ID";
	if ($conn->query($sql2) === TRUE) {
    echo "2nd Number added successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
}
else if($row1['tnum'] == NULL)
{
		$sql3="UPDATE users SET tnum=$NUM WHERE ID=$ID";
	if ($conn->query($sql3) === TRUE) {
    echo "3rd Number added successfully";
	} else {
    echo "Error updating record: " . $conn->error;
}
}
else{
	echo "You can only insert 3 numbers.";
}
echo "session id is:" . $_SESSION["id"];

?>