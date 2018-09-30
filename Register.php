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

include("connect.php"); 
$fname= $_POST["firstname"];
$pass=$_POST["password"];
$num=$_POST["num"];

$sql = "INSERT INTO users (Name, Password, pnum)
VALUES ('$fname', $pass, '$num')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error:". $conn->error;
}
echo "<h2> Welcome " . $fname . "</h2>";


$conn->close();
?>
<form action="AddNum.php" method="post">
    
	<label for="num">Add New Number</label>
    <input type="text" id="num" name="num" placeholder="Your Number">


    
    <input type="submit" value="Add Another Number">
  </form>
<a href='ViewCOntact.php' class='button button4'>View Contacts</a>
<a href='Share.php' class='button button4'>Share Contact</a>
<a href='AddContact.php' class='button button4'>Add Contact</a>

</body>
</html>
