<!DOCTYPE html>
<html>
<head>

</head>
<body>


<?php
session_start();
include("connect.php"); 
$myId=$_SESSION['id'];
$number= $_POST["num"];
$name=$_POST["names"];
$myname=$_POST["myname"];

$sql = "Select * from users where name='$name' ";
$result1 = mysqli_query($conn,$sql);
$row1=mysqli_fetch_array($result1,MYSQLI_ASSOC);
$sentId= $row1['ID'];

$sql = "INSERT INTO sharedcontacts (myid, ContactName, ContactNum)
VALUES ($sentId, '$myname','$number')";

if ($conn->query($sql) === TRUE) {
    echo "<h2> Contact Shared with " . $name . "</h2>";

} else {
    echo "Error:". $conn->error;
}


$conn->close();
?>

</body>
</html>
