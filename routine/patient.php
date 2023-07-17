<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<link rel="stylesheet" type="text/css" href="style3.css">

<font color="white" face="Times New Roman" size=3><br><br> 
<body align="center">	
	<h1><u>Patient Details</h1></u>
<table border=1 cellpadding="3" cellspacing="5" bgcolor="grey" align="center">
	<tr>
		<th>Visitor_id</th>
		<th>Name</th>
		<th>Age</th>
		<th>Gender</th>
		<th>Address</th>
		<th>Phone</th>
		<th>Email-id</th>
		<th>Specific conditions</th>
	</tr> 
<?php
// header('Location:http://localhost/login/login.html');
//header('Refresh:5; Location: http://localhost/front_page.html');
$conn = mysqli_connect('localhost', 'root','');

if(!$conn)
{
	//echo 'Not connected to server';
}
else
{
	//echo 'Connected to server'."<br>";
}
if(!mysqli_select_db($conn,'routine_care1'))
{
	echo 'Database not connected';
}

$sql = "SELECT * FROM visitors";
$ret = mysqli_query($conn, $sql);

while($row2 = mysqli_fetch_array($ret))
{
		echo "<tr>";
		echo "<td>".$row2['Visitor_ID']."</td>";
		echo "<td>".$row2['Name']."</td>";
		echo "<td>".$row2['Age']."</td>";
		echo "<td>".$row2['Gender']."</td>";
		echo "<td>".$row2['Address']."</td>";
		echo "<td>".$row2['Phone']."</td>";
		echo "<td>".$row2['Email_id']."</td>";
		echo "<td>".$row2['Specific_conditions']."</td>";
		// "<td>".$row2['']."</td>";
		// "<td>".$row2['']."</td>";
		// "<td>".$row2['']."</td>";
		echo "</tr>";
	}
	echo "</table>";


?>
<form action="patient.php">
	<button align= "left"><font COLOR="white">Edit</button>
</form>
<form action="patient.php">
	<button align= "Right"><font COLOR="white">Delete</button>
</form>