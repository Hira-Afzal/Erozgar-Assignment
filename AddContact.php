<!DOCTYPE html>
<html>

<style>
input[type=text], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=password], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=number], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}


input[type=submit] {
    width: 20%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;

}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
	padding-left: 400px;
}
</style>

<body>
<h1 align="center">Phone Directory</h1>
<div>
  <form action="AddedContact.php" method="post">
    
<?php
		include("connect.php");
		session_start();
		$ID=$_SESSION['id'];
 

echo "<label for='share'>Share with</label>";
	echo "<select style='margin-left:65px;' type='text' id='names' name='names' placeholder='Users...'>";
	$sql = "Select * from users";

	$result = mysqli_query($conn,$sql);
	while($row= mysqli_fetch_assoc($result))
	{
		$name=$row['Name'];
		echo "<option value= $name > $name </option>";
	}
		echo "	</select>";
	
	?>
	<br>
	<br>

    <br>
	    <br>
		    <br>

    <input style="margin-left:150px;"  type="submit" value="Add">
  </form>
</div>


</body>
</html>
