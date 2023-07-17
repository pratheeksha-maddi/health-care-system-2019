<link rel="stylesheet" type="text/css" href="style3.css">


	<font color="white" face="Comic Sans MS" size=5><br><br> 
<?php
// header('Location:http://localhost/login/login.html');
header('Refresh:5; Location: http://localhost/front_page.html');
$conn = mysqli_connect('localhost', 'root','');

if(!$conn)
{
	echo 'Not connected to server';
}
else
{
	echo 'Connected to server'."<br>";
}
if(!mysqli_select_db($conn,'routine_care1'))
{
	echo 'Database not connected';
}


$Visitor_id = $_POST['Visitor_id'];

$sql1 = "SELECT Name FROM Visitors WHERE Visitor_id = '$Visitor_id'";
$ret = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($ret);
echo($row['Name']);
$sql = "SELECT * FROM ROUTINE_DETAILS WHERE Visitor_id = '$Visitor_id'";
$ret = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($ret);

echo "<br>";
echo "Visitor_id :    ".$row['Visitor_ID']."<br>";
echo "From_date :     ".$row['From_date']."<br>";
echo "To_date :       ".$row['To_date']."</td>";
echo "Avg_Calorie_intake_<br>(in Kcal/day) :     ".$row['Avg_Calorie_intake_(in Kcal/day)']."<br>";
echo "Avg_Water_intake_<br>(in L/day) :     ".$row['Avg_Water_intake_(in L/day)']."<br>";
echo "Steps_walked :   ".$row['Steps_walked']."<br>";
echo "Hours_sleep :    ".$row['Hours_sleep']."<br>";
echo "Hours_Physical<br>_activity :    ".$row['Hours_Physical_activity']."<br>";
echo "Avg_heart_rate :  ".$row['Avg_heart_rate']."<br><br>";

?>

<html>
		<body>

		<form action="select.php">
		<button>"Redirect to menu page"></button>
		</form>
		</body></html>



