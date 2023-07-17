<link rel="stylesheet" type="text/css" href="style5.css">
<font color="white" face="Times New Roman" size=4><br><br> 
	<?php
// header('Location:http://localhost/login/login.html');
	session_start();
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
// $Visitor_id = $_POST['Visitor_id'];
$sql = "Call total_bill('$user')";
$sql1 = "Call total_visits('$user')";
$ret = mysqli_query($conn,$sql);
$ret1 = mysqli_query($conn,$sql1);
	if($ret)
	{
		while ($row = $ret->fetch_object())  {
        // print_r($row);
        // echo $row->Visitor_id."<br>";
        // echo $row->sum_of_bill;
		// $row1 = $_GET['$ret1']);
		//$row1 = $ret1->fetch_array();
        echo "<table>";
		echo "<tr>";
		echo "<th>"."Visitor_id"."</th>";
		echo "<th>"."Total_bill"."</th>";
		//echo "<th>"."total_visits"."</th>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$row->Visitor_id."</td>";
		echo "<td>".$row->sum_of_bill."</td>";
		//echo "<td>".$row1['No_visits']."</td>";
		echo "</tr>";
		echo "</table>";

        }
        $sql2 = "SELECT Status from report_analysis where Visitor_id = '$user'";
        $ret2 = mysqli_query($conn, $sql2);
       // $row = mysqli_fetch_row($ret2);
        //echo "<br>"."Status - ".$row['Status'];
	}
else 
{
	
	echo 'Invalid Visitor_id';
}
	
?>

	<br><br>	
		<a href = "V_login.html">LOG OUT</a>
		
</body>
</html>