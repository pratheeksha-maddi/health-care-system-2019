<link rel="stylesheet" type="text/css" href="style2.css">
<font color="white" face="Times New Roman" size=5><br><br>

<?php
// header('Location:http://localhost/login/login.html');
//header('Refresh:5; Location: http://localhost/front_page.html');
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

$sql1 = "SELECT Visitor_id, Name, Age, Gender from Visitors V where (Visitor_id = '$Visitor_id')";
$ret = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($ret);
echo 'ID :   '.$row['Visitor_id']."  "."<br>";
echo 'Name :  '.$row['Name']."<br>";
echo 'Age :  '.$row['Age']."<br>";
echo 'Gender:  '.$row['Gender']."<br>";

$sql2 =  "SELECT Date_visited, Time_visited, Recommendation, Improvement, Tests, Bill_id FROM Consultation where (Visitor_id = '$Visitor_id')";
$ret = mysqli_query($conn, $sql2);
$row = mysqli_fetch_assoc($ret);
echo 'Date_visited :   '.$row['Date_visited']."  "."<br>";
echo 'Time_visited :  '.$row['Time_visited']."<br>";
echo 'Recommendation :  '.$row['Recommendation']."<br>";
echo 'Improvement:  '.$row['Improvement']."<br>";
echo 'Tests:  '.$row['Tests']."<br>";
echo 'Bill_id :  '.$row['Bill_id']."<br>";





?>
<html>
		<body>
		<form action="select.php">
		<input type="submit" value="Redirect to menu page">
		</form>
		</body></html>



