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
//$Bill_id = $_POST['Bill_id'];
$Bill_amnt = $_POST['Bill_amnt'];
$Status = $_POST['Status'];
// $input_date1 =$_POST['From_date'];
// $From_date =date("Y-m-d H:i:s",strtotime($input_date1));

// $input_date2=$_POST['To_date'];
// $To_date =date("Y-m-d H:i:s",strtotime($input_date2));


$sql1 = "UPDATE report_analysis set Bill_amnt = '$Bill_amnt', Status = '$Status' where Report_id = '$Report_id'";

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
		<br><button>Redirect to homepage</button>
		</form>
</body>
</html>