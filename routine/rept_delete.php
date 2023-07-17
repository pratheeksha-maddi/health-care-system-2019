<link rel="stylesheet" type="text/css" href="style3.css">
<font color="white" face="Times New Roman" size=5><br><br>
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

$Report_id = $_POST['Report_id'];

$sql2 = "SELECT * FROM report_analysis WHERE Report_id = '$Report_id'";
$ret = mysqli_query($conn, $sql2);
$row = mysqli_fetch_assoc($ret);
if(!$row)
{
	echo 'Invalid Report_id';
}
else
{
$sql1 = "DELETE FROM report_analysis WHERE Report_id = '$Report_id'";
$ret = mysqli_query($conn, $sql1);
//$row = mysqli_fetch_array($ret);
echo "Deleted Successfully";
}
?>
<form action="select.php">
		<br><button>Redirect to homepage</button>
		</form>
</body>
</html>