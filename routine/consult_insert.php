
<link rel="stylesheet" type="text/css" href="style1.css">
<font color="white" face="Times New Roman" size=5><br><br>
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
$N_id = $_POST['N_id'];
//$Date_visited = $_POST['Date_visited'];
$Recommendation = $_POST['Recommendation'];
$Improvement = $_POST['Improvement'];
$Tests = $_POST['Tests'];
$Bill_id = $_POST['Bill_id'];
$input_date=$_POST['Date_visited'];
$Date_visited =date("Y-m-d H:i:s",strtotime($input_date));

$sql1 = "INSERT INTO consultation (Visitor_id ,N_id, Date_visited,Recommendation, Improvement, Tests, Bill_id) VALUES ('$Visitor_id','$N_id','$Date_visited', '$Recommendation', '$Improvement','$Tests', '$Bill_id')";

if(mysqli_query($conn,$sql1))
	{
	$f=1;
	echo 'Insertion Successful!';
	}
else 
{
	$f=0;
	echo 'Insertion Unsuccessful!';
}
	
?>
<form action="select.php">
		<button>Redirect to homepage</button>
		</form>
</body>
</html>