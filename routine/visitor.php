<link rel="stylesheet" type="text/css" href="style5.css">
<font color="white" face="Times New Roman" size=4><br><br> 
<?php
session_start();
//$V_id = $_SESSION['user'];
// if(isset($_POST[$_SESSION['user']])){
//         $_SESSION['V_id'] = $_POST[$_SESSION['user']];
//     }
$user = $_SESSION['user'];
$conn = mysqli_connect('localhost', 'root','');
//echo 'hi'.$_SESSION['user'];
if(!$conn)
{
    echo 'Not connected to server';
}
else
{
    //echo 'Connected to server'."<br>";	'Name : '.$row['Name']		'Phone : '.$row['Phone']
}
if(!mysqli_select_db($conn,'routine_care1'))
{
    echo 'Database not connected';
}

$sql1 = "SELECT * FROM visitors where Visitor_ID = '$user'";
$ret = mysqli_query($conn, $sql1);
while($row = mysqli_fetch_array($ret))
{	echo "<h1>".'WELCOME !'."</h1>";
	//echo "<table>";
	echo "<br>".'Visitor_ID : '.$row['Visitor_ID']."<br>".'Age : '.$row['Age'];
	echo "<br>".'Phone : '.$row['Phone']."<br>";
	echo 'Name : '.$row['Name']."<br>".'Gender : '.$row['Gender']."<br>".'Specific conditions : '.$row['Specific_conditions']."<br>"."<br>"."<br>";
}
?>
<table border=1 cellpadding="3" cellspacing="5" align="left" bgcolor="">
	<tr><u>Consultations</u> <br><br>
		<th>Visitor_id</th>
		<!-- <th>Name</th>
		<th>Age</th>
		<th>Gender</th> -->
		<th>Date visited</th>
		<th>Recommendation</th>
		<th>Improvement</th>
		<th>Tests</th>
		<th>Bill id</th>
	</tr> 
<?php
$sql2 = "SELECT * FROM CONSULTATION WHERE Visitor_id ='$user'";
$ret = mysqli_query($conn, $sql2);

while($row2 = mysqli_fetch_array($ret)){
	
	echo "<tr>";
		echo "<td>".$row2['Visitor_id']."</td>";
		// echo "<td>".$row2['Name']."</td>";
		// echo "<td>".$row2['Age']."</td>";
		// echo "<td>".$row2['Gender']."</td>";
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
	echo "</table>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>";
?>
<table border=1 cellpadding="3" cellspacing="5" align="left" bgcolor="">
	<u>Reports and Bills</u> <br><br>
		<tr><th>Report_id</th>
		<!-- <th>Name</th>
		<th>Age</th>
		<thGender</th> -->
		<th>Report Date </th>
		<th>Tests undergone</th>
		<th>Bill id</th>
		<th>Bill amnt</th>
		<th>Bill status</th>
	</tr> 
<?php
$sql3 = "SELECT * FROM report_analysis WHERE Visitor_id ='$user'";
$ret = mysqli_query($conn, $sql3);
while($row2 = mysqli_fetch_array($ret))
	{
		echo "<tr>";
		echo "<td>".$row2['Report_id']."</td>";
		echo "<td>".$row2['Report_date']."</td>";
		echo "<td>".$row2['Tests_undergone']."</td>";
		echo "<td>".$row2['Bill_id']."</td>";
		echo "<td>".$row2['Bill_amnt']."</td>";
		echo "<td>".$row2['Status']."</td>";
		echo "</tr>";
	}
	echo "</table>";

?>
<br><br><br><br><br><form action="storedpr.php">
<button>Calculate total bill</button>
</form>


	<br><br>	
		<a href = "V_login.html">LOG OUT</a>
		
</body>
</html>