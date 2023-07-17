<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<link rel="stylesheet" type="text/css" href="style3.css">

<font color="white" face="Times New Roman" size=3><br><br> 
<body align="center">	
	<h1>Routine view</h1>
<table border=1 cellpadding="3" cellspacing="5" bgcolor="grey" align="center">
	<tr>
		<th>Visitor_id</th>
		<th>From_date</th>
		<th>To_date</th>
		<th>Calorie intake</th>
		<th>Water intake</th>
		<th>Steps walked</th>
		<th>Hours sleep</th>
		<th>Hours physical activity</th>
		<th>Avg heart rate</th>
		<th>Weight</th>
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

// $sql1 = "SELECT Name FROM Visitors WHERE Visitor_id = '$Visitor_id'";
// $ret = mysqli_query($conn, $sql1);

// if($ret)
// {
	$sql = "SELECT * FROM ROUTINE_DETAILS";
	$ret = mysqli_query($conn, $sql);
	
	// echo "<table align="."<center>";
	// echo "<tr>";
	// echo "<th>"."Visitor_id"."</th>"; 
	// echo "<th>"."From_date"."</th>";
	// echo "<th>"."To_date"."</th>";
	// echo "<th>"."Calorie_intake"."</th>";
	// echo "<th>"."Water_intake"."</th>";
	// echo "<th>"."Steps_walked"."</th>";
	// echo "<th>"."Hours_sleep"."</th>";
	// echo "<th>"."Hours_Physical_activity"."</th>";
	// echo "<th>"."Avg_heart_rate"."</th>";
	// echo "</tr>";
	//  "<th>"."Bill_id"."</th>";
	// "<th>"."Bill_amount"."</th>";
	// "<th>"."Status"."</th>";
	while($row2 = mysqli_fetch_array($ret))
	{	
		$input_date1 =$row2['From_date'];
		$From_date =date("Y-m-d H:i:s",strtotime($input_date1));

		$input_date2=$row2['To_date'];
		$To_date =date("Y-m-d H:i:s",strtotime($input_date2));

		echo "<tr>";
		echo "<td>".$row2['Visitor_id']."</td>";
		echo "<td>".$From_date."</td>";
		echo "<td>".$To_date."</td>";
		echo "<td>".$row2['Calorie_intake']."</td>";
		echo "<td>".$row2['Water_intake']."</td>";
		echo "<td>".$row2['Steps_walked']."</td>";
		echo "<td>".$row2['Hours_sleep']."</td>";
		echo "<td>".$row2['Hours_Physical_activity']."</td>";
		echo "<td>".$row2['Avg_heart_rate']."</td>";
		echo "<td>".$row2['Weight']."</td>";
		// "<td>".$row2['']."</td>";
		// "<td>".$row2['']."</td>";
		// "<td>".$row2['']."</td>";
		echo "</tr>";
	}
	echo "</table>";
// 
?>


		<form action="select.php">
		<br><br><button>Redirect to homepage</button>
		</form>
</body>
</html>




