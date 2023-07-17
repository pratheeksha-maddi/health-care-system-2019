<link rel="stylesheet" type="text/css" href="style3.css">
<font color="white" face="Times New Roman" size=3><br><br>
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

$Bill_id = $_POST['Bill_id'];

$sql2 = "SELECT * FROM consultation WHERE Bill_id = '$Bill_id'";
$ret = mysqli_query($conn, $sql2);
$row = mysqli_fetch_assoc($ret);
if(!$row)
{
	echo 'Invalid Visitor_id';
}
else
{
$sql1 = "DELETE FROM consultation WHERE Bill_id = '$Bill_id'";
$ret = mysqli_query($conn, $sql1);
//$row = mysqli_fetch_array($ret);
echo "Deleted Successfully";
}
?>
<form action="select.php">
		<button>Redirect to homepage</button>
		</form>
</body>
</html>