<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<link rel="stylesheet" type="text/css" href="style3.css">

<font color="white" face="Comic Sans MS" size=2><br><br> 
<body align="center">	

<?php
// header('Location:http://localhost/login/login.html');
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
$Calorie_intake = $_POST['Calorie_intake'];
$Water_intake = $_POST['Water_intake'];
$Weight = $_POST['Weight'];
$input_date1 =$_POST['From_date'];
$From_date =date("Y-m-d H:i:s",strtotime($input_date1));

$input_date2=$_POST['To_date'];
$To_date =date("Y-m-d H:i:s",strtotime($input_date2));


$sql1 = "UPDATE routine_details1 set From_date = '$From_date', To_date = '$To_date', Calorie_intake = '$Calorie_intake', Water_intake = '$Water_intake', Weight = '$Weight' where Visitor_id = '$Visitor_id' ";

if(mysqli_query($conn,$sql1))
	{
	
	echo 'Updation Successful!';
	}
else 
{
	
	echo 'Invalid Bill_id';
}
	
?>
<form action="select.php">
		<button>Redirect to homepage</button>
		</form>
</body>
</html>