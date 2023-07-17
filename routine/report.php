<link rel="stylesheet" type="text/css" href="style4.css">

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
$input_date1 =$_POST['From_date'];
$From_date =date("Y-m-d H:i:s",strtotime($input_date1));

$input_date2=$_POST['To_date'];
$To_date =date("Y-m-d H:i:s",strtotime($input_date2));

$Calorie_intake = $_POST['Calorie_intake'];
$Water_intake = $_POST['Water_intake'];
$Steps_walked = $_POST['Steps_walked'];
$Hours_sleep = $_POST['Hours_sleep'];
$Hours_Physical = $_POST['Hours_Physical'];
$Avg_heart_rate = $_POST['Avg_heart_rate'];


$sql1 = "INSERT INTO routine_details1(Visitor_ID, From_date, To_date ,Calorie_intake, Water_intake, Steps_walked, Hours_sleep, Hours_Physical_activity, Avg_heart_rate) VALUES('$Visitor_id','$From_date','$To_date' ,'$Calorie_intake', '$Water_intake', '$Steps_walked', '$Hours_sleep', '$Hours_Physical', '$Avg_heart_rate')";

if(mysqli_query($conn,$sql1))
	{
	
	echo 'Insertion Successful!';
	}
else 
{
	
	echo 'Invalid Visitor_id';
}
	
?>