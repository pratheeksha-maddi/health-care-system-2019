<link rel="stylesheet" type="text/css" href="style2.css">
<font color="white" face="Times New Roman" size=5><br><br> 
<?php


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
$Username = $_POST['Username'];
$Password = ($_POST['Password']);
$Username = stripslashes($Username);
$Password = stripslashes($Password);

// $sql = "Select count(*) from Login where (Username = '$Username' and Password = '$Password')";

// $result = mysqli_query($conn,$sql);
// $count = mysqli_num_rows($result);
// if($count==1){
// echo 'success';
// }else{
// echo 'failure';
// }
		$ret=mysqli_query( $conn, "SELECT * FROM A_login WHERE A_username='$Username' AND A_password='$Password' ") or die("Could not execute query: " .mysqli_error($conn));
		$row = mysqli_fetch_assoc($ret);

		if(!$row ) {
			echo 'Login Failed !'."<br>".'Try again with correct username and password.';
		}

		else {
	        echo 'Login Successful !'."<br>";
				
					echo 'Visitor'."<br>";
					$_SESSION['username']=$username;    
   	 				header('Location: select.php'.$_GET['previouspage']);
					
			
			
		}
		
?>
