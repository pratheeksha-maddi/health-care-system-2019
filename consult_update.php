<link rel="stylesheet" type="text/css" href="style1.css">
<font color="white" face="Times New Roman" size=4><br><br> 
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


$Bill_id = $_POST['Bill_id'];
$Tests = $_POST['Tests'];
$input_date=$_POST['Date_visited'];
$Date_visited =date("Y-m-d H:i:s",strtotime($input_date));


$sql1 = "UPDATE consultation set Tests = '$Tests', Date_visited = '$Date_visited' where Bill_id = '$Bill_id'";

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