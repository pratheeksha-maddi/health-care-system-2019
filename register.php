<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<?php
// header('Location:http://localhost/login/login.html');
header('Refresh:5; Location: http://localhost/front_page.html');
$conn = mysqli_connect('localhost', 'root','');

if(!$conn)
{
	// echo 'Not connected to server';
}
else
{
	//echo 'Connected to server';
}
if(!mysqli_select_db($conn,'routine_care1'))
{
	//echo 'Database not connected';
}


$Visitor_id = $_POST['Visitor_id'];
$Name = $_POST['Name'];
$Age = $_POST['Age'];
$Gender = $_POST['Gender'];
$Address = $_POST['Address'];
$Phone = $_POST['Phone'];
$Email_id = $_POST['Email_id'];
$Specific_conditions = $_POST['Specific_conditions'];
// $Username = $_POST['Username'];
$Password = $_POST['Password'];
$Designation = "Visitor";

$sql1 = "INSERT INTO Visitors (Visitor_ID,Name, Age, Gender, Address,Phone, Email_id,Specific_conditions) VALUES ('$Visitor_id','$Name',
'$Age', '$Gender', '$Address','$Phone', '$Email_id','$Specific_conditions')";

$sql2 = "INSERT INTO Login (Username,Password,Designation,id) VALUES ('$Visitor_id','$Password','$Designation','$Visitor_id')";
if(mysqli_query($conn,$sql1) && mysqli_query($conn,$sql2))
	{
	$f=1;
	echo 'Registration Successful!';
	}
else 
{
	$f=0;
	echo 'Registration Unsuccessful!';
}
	
?>
		<html>
		<body>
		<form action="front_page.html"><br><br>
		<input type="submit" value="Redirect to home page">
		
		</form>
		</body></html>
