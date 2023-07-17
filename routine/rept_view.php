
<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<link rel="stylesheet" type="text/css" href="style3.css">

<font color="white" face="Times New Roman" size=4><br><br> 
<body align="center">	
	<h1>Report view</h1>
<table border=1 cellpadding="3" cellspacing="5" bgcolor="grey" align="center">
	<tr>
		<th>Report_id</th>
		<th>Visitor_id</th>
		<th>Report_date</th>
		<th>Tests undergone</th>
		<th>Bill_id</th>
		<th>Bill_amount</th>
		<th>Status</th>
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

// $sql1 = "SELECT * FROM report_analysis WHERE Visitor_id = '$Visitor_id'";
// $ret = mysqli_query($conn, $sql1);
// // $row1 = mysqli_fetch_row($ret);

	
	$sql2 = "SELECT * FROM report_analysis";
	$ret = mysqli_query($conn, $sql2);
	// echo "<table>";
	// echo "<tr>";
	// echo "<th>"."Report_id"."</th>";
	// echo "<th>"."Visitor_id"."</th>"; 
	// echo "<th>"."Report_date"."</th>";
	// echo "<th>"."Tests_undergone"."</th>";
	// echo "<th>"."Bill_id"."</th>";
	// echo "<th>"."Bill_amount"."</th>";
	// echo "<th>"."Status"."</th>";
	// echo "</tr>";
	while($row2 = mysqli_fetch_array($ret))
	{
		echo "<tr>";
		echo "<td>".$row2['Report_id']."</td>";
		echo "<td>".$row2['Visitor_id']."</td>";
		echo "<td>".$row2['Report_date']."</td>";
		echo "<td>".$row2['Tests_undergone']."</td>";
		echo "<td>".$row2['Bill_id']."</td>";
		echo "<td>".$row2['Bill_amnt']."</td>";
		echo "<td>".$row2['Status']."</td>";
		echo "</tr>";
	}
	echo "</table>";

?>


		<form action="select.php">
		<br><button>Redirect to homepage</button>
		</form>
</body>
</html>




