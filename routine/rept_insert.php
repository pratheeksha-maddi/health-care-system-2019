<link rel="stylesheet" type="text/css" href="style3.css">
<font color="white" face="Times New Roman" size=5><br><br>
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

$Report_id = $_POST['Report_id'];
$Visitor_id = $_POST['Visitor_id'];
$input_date1 =$_POST['Report_date'];
$Report_date =date("Y-m-d H:i:s",strtotime($input_date1));



$Tests_undergone = $_POST['Tests_undergone'];
$Bill_id = $_POST['Bill_id'];
$Bill_amnt = $_POST['Bill_amnt'];
$Status = $_POST['Status'];


$sql1 = "INSERT INTO report_analysis(Report_id, Visitor_id, Report_date, Tests_undergone ,Bill_id, Bill_amnt, Status) VALUES('$Report_id', '$Visitor_id', '$Report_date', '$Tests_undergone' ,'$Bill_id', '$Bill_amnt', '$Status')";

if(mysqli_query($conn,$sql1))
	{
	
	echo 'Insertion Successful!';
	}
else 
{
	
	echo 'Invalid Visitor_id';
}
	
?>

		<form action="select.php">
		<button>Redirect to homepage</button>
		</form>
</body>
</html>