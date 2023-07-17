<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body align="center">
	<font color="white" face="Times New Roman" size=4><br><br>
<h1>Welcome to Routine care center !</h1>
<br><br>
<form action="patient.php">
	<button><font COLOR="white">View Patient Details</button><br>
</form><br>
<form action="routine.html">
	<button><font COLOR="white">Get Routine Details</button><br>
</form><br>
<form action="consult.html">
	<button><font COLOR="white">Previous Consultation</button><br>
</form><br>

<form action="report.html">
	<button><font COLOR="white">Get Reports/ Bills</button><br>
</form><br>
<form action="appt.html">
	<button><font COLOR="white">Get Appointments</button><br>
</form><br>
<a href="front_page.html"> LOG OUT</a>
<br><br><a href= "Front_page.html">Back</a>
</body>
</html>
<!-- 
<?php
// function send($Visitor_id)
// {
// 	$conn = mysqli_connect('localhost', 'root','');
// 	mysqli_select_db($conn,'routine_care1');
// 	echo "<br>".'a'.$Visitor_id;
	// $sql = "SELECT * FROM VISITORS WHERE Visitor_id= " .$Visitor_id;
	// $res = mysqli_query($conn,$sql);
	// while($row = mysqli_fetch_row($res))
	// {
	// 	echo $row['Name'];
	$V_id = $Visitor_id;
	// }
//echo 'b'.$Visitor_id;
?> -->


