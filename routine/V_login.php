<link rel="stylesheet" type="text/css" href="style4.css">
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
$Visitor_id = $_POST['Visitor_id'];
$Password = ($_POST['Password']);
$Visitor_id = stripslashes($Visitor_id);
$Password = stripslashes($Password);

// $sql = "Select count(*) from Login where (Username = '$Username' and Password = '$Password')";

// $result = mysqli_query($conn,$sql);
// $count = mysqli_num_rows($result);
// if($count==1){
// echo 'success';
// }else{
// echo 'failure';
// }
        $ret=mysqli_query( $conn, "SELECT * FROM Login WHERE Username='$Visitor_id' AND Password='$Password' ") or die("Could not execute query: " .mysqli_error($conn));
        echo $Visitor_id;
        $row = mysqli_fetch_assoc($ret);

        if(!$row ) {
            echo 'Login Failed !'."<br>".'Try again with correct username and password.';
            echo $Visitor_id;
        }

        else {
            echo 'Login Successful !'."<br>";
                
                    echo 'Visitor'."<br>";
                    session_start();
                    $_SESSION['user']=$Visitor_id;
                    // $a = $Visitor_id;
                    // $_POST['']
                    // $_POST[$_SESSION['user']];    
                    header('Location: visitor.php'.$_GET['previouspage']);
                    
            
            
        }
        
?>
