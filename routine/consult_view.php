<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
<font color="white" face="Times New Roman" size=4><br><br> 
<body align="center">	
	<h1>Consultation view</h1>
<table border=1 cellpadding="3" cellspacing="5" align="center" bgcolor="grey">
	<tr>
		<th>Visitor_id</th>
		<th>Name</th>
		<th>Age</th>
		<th>Gender</th>
		<th>Time visited</th>
		<th>Recommendation</th>
		<th>Improvement</th>
		<th>Tests</th>
		<th>Bill id</th>
	</tr> 

<?php
// header('Location:http://localhost/login/login.html');
//header('Refresh:5; Location: http://localhost/front_page.html');
$conn = mysqli_connect('localhost', 'root','');

if(!$conn)
{
	//echo 'Not connected to server';
}
else
{
	//echo 'Connected to server'."<br>";
}
if(!mysqli_select_db($conn,'routine_care1'))
{
	echo 'Database not connected';
}


// $Visitor_id = $_POST['Visitor_id'];

// $sql3 = "SELECT * FROM consultation WHERE Visitor_id = '$Visitor_id'";
// $ret = mysqli_query($conn, $sql3);
// $row = mysqli_fetch_assoc($ret);


$sql1 = "SELECT V.Visitor_id, Name, Age, Gender, Date_visited, Time_visited, Recommendation, Improvement, Tests, Bill_id from Visitors V, Consultation C where (V.Visitor_id = C.Visitor_id)";
// $ret = mysqli_query($conn, $sql1);
// $row = mysqli_fetch_array($ret);
// echo 'ID :   '.$row['Visitor_id']."  "."<br>";
// echo 'Name :  '.$row['Name']."<br>";
// echo 'Age :  '.$row['Age']."<br>";
// echo 'Gender:  '.$row['Gender']."<br>";

// $sql2 =  "SELECT Date_visited, Time_visited, Recommendation, Improvement, Tests, Bill_id FROM Consultation where (Visitor_id = '$Visitor_id')";
// $ret = mysqli_query($conn, $sql2);
// $row = mysqli_fetch_assoc($ret);
// echo 'Date_visited :   '.$row['Date_visited']."  "."<br>";
// echo 'Time_visited :  '.$row['Time_visited']."<br>";
// echo 'Recommendation :  '.$row['Recommendation']."<br>";
// echo 'Improvement:  '.$row['Improvement']."<br>";
// echo 'Tests:  '.$row['Tests']."<br>";
// echo 'Bill_id :  '.$row['Bill_id']."<br>";

$sql = "SELECT * FROM ROUTINE_DETAILS";
	$ret = mysqli_query($conn, $sql1);
	
	// echo "<table>";
	// echo "<tr>";
	// echo "<th>"."Visitor_id"."</th>"; 
	// echo "<th>"."Name"."</th>";
	// echo "<th>"."Age"."</th>";
	// echo "<th>"."Gender"."</th>";
	// echo "<th>"."Date_visited"."</th>";
	// echo "<th>"."Recommendation"."</th>";
	// echo "<th>"."Improvement"."</th>";
	// echo "<th>"."Tests"."</th>";
	// echo "<th>"."Bill_id"."</th>";
	// echo "</tr>";
	// "<th>"."Bill_id"."</th>";
	// "<th>"."Bill_amount"."</th>";
	// "<th>"."Status"."</th>";
	while($row2 = mysqli_fetch_array($ret))
	{
		echo "<tr>";
		echo "<td>".$row2['Visitor_id']."</td>";
		echo "<td>".$row2['Name']."</td>";
		echo "<td>".$row2['Age']."</td>";
		echo "<td>".$row2['Gender']."</td>";
		echo "<td>".$row2['Date_visited']."</td>";
		echo "<td>".$row2['Recommendation']."</td>";
		echo "<td>".$row2['Improvement']."</td>";
		echo "<td>".$row2['Tests']."</td>";
		echo "<td>".$row2['Bill_id']."</td>";
		// "<td>".$row2['']."</td>";
		// "<td>".$row2['']."</td>";
		// "<td>".$row2['']."</td>";
		echo "</tr>";
	}
	echo "</table>";
// 



?>
<html>
		<body>
		<form action="select.php">
		<br><br><button>Redirect to menu page</button>
		</form>
		</body></html>



