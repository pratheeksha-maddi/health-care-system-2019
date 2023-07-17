<link rel="stylesheet" type="text/css" href="style3.css">

<font color="white" face="Comic Sans MS" size=2><br><br> 
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

$sql2 = "SELECT * FROM routine_details WHERE Visitor_id = '$Visitor_id'";
$ret = mysqli_query($conn, $sql2);
$row = mysqli_fetch_assoc($ret);
if(!$row)
{
	echo 'Invalid Visitor_id';
}
else
{
$sql1 = "DELETE FROM routine_details WHERE Visitor_id = '$Visitor_id'";
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