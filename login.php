<!DOCTYPE html>
<html>
<head>
<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button4 {border-radius: 12px;}
</style>
</head>
<body>


<?php
session_start();
include("connect.php"); 
$fname= $_POST["firstname"];
$pass=$_POST["password"];
//$num=$_POST["num"];



$sql1 = "Select * from users where Name= '$fname' AND Password= '$pass'";
$result1 = mysqli_query($conn,$sql1);
$row1=mysqli_fetch_array($result1,MYSQLI_ASSOC);
if($fname==$row1['Name'] and $pass==$row1['Password'])
{
	echo "<h2> Welcome " . $row1['Name'] .  "</h2>";
	$_SESSION['id'] = $row1['ID'];
}
else
{
	echo"record not found" . $_SESSION['id'];
}
if($row1['Name']=="Admin")
{
	
	echo "<a href='showRecord.php' class='button button4'>Show Recordss</a>";
}
else
{
	echo "<a href='showContacts.php' class='button button4'>My Contacts</a>";
}
$conn->close();
?>
<form action="AddNum.php" method="post">
    
	<label for="num">Add Another Number</label>
    <input type="text" id="num" name="num" placeholder="Your Number">


    
    <input class='button button4' type="submit" value="Add Number">
  </form>
<a href='showContacts.php' class='button button4'>View Contacts</a>
<a href='Share.php' class='button button4'>Share Contact</a>
<a href='AddContact.php' class='button button4'>Add Contact</a>
</body>
</html>
