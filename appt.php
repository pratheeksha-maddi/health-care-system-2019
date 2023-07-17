<link rel="stylesheet" type="text/css" href="style1.css">
<font color="white" face="Times New Roman" size=5><br><br>

<?php
// header('Location:http://localhost/login/login.html');
// header('Refresh:5; Location: http://localhost/front_page.html');
$conn = mysqli_connect('localhost', 'root','');

if(!$conn)
{
	//echo 'Not connected to server';
}
else
{
	//echo 'Connected to server';
}
if(!mysqli_select_db($conn,'routine_care1'))
{
	//echo 'Database not connected';
}


$Name1 = $_POST['Name1'];
$Name2 = $_POST['Name2'];
$Day = $_POST['Day'];

$sql1 = "SELECT N_id from Nutritionist where Name = '$Name2'";
$ret1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($ret1);

$sql2 = "SELECT Visitor_ID from Visitors where Name = '$Name1'";
$ret2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($ret2);

echo $row1['N_id']."<br>";
echo $row2['Visitor_ID']."<br>";
$N1 = $row1['N_id'];
$N2 = $row2['Visitor_ID'];
$sql3 = "INSERT into appointments(Visitor_id, N_id, Days) values ('$N2','$N1','$Day')";
mysqli_query($conn, $sql3);

// $sql4 = "CREATE TRIGGER set_appt1 AFTER INSERT on appointments 
// for each row 
// update appointments set Say_Status = 'Confirmed' 
// where (EXISTS((select * from avail where N_id='$N1' and Days='$Day')))";

// mysqli_query($conn, $sql4);
// call($set_appt1);
// echo '1';
// $sql4 = "SELECT status1 from Status where id_n = '$N1' and day='$Day'";
// $ret3 = mysqli_query($conn, $sql4);
// $row3 = mysqli_fetch_assoc($ret2);
// echo "<br>".$row3['status1'];

$sql5 = "SELECT Status1 from status where id_n = '$N1' and day = '$Day'";
$ret5 = mysqli_query($conn, $sql5);
$row5 = mysqli_fetch_array($ret5);
echo $row5['Status1'];
