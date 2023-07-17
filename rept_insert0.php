<html>
<head>
	<title>Routine</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>

<body align=left>
	<font color="white" face="Times New Roman"><br>
		<h2><b><u>Insert Report details</u></b></h2>
	 <div class="login-boxx">
        
	<form action="rept_insert.php" method="post">
	Report_id :  <input type="number" name="Report_id" required="Please enter the value"><br><br>
	Visitor_id: <!-- <input type="number" name="Visitor_id" required=""><br><br> -->
	<select name="Visitor_id">
	<?php 
	 $conn = mysqli_connect('localhost', 'root','');
	 mysqli_select_db($conn,'routine_care1');
	 $sql = "SELECT Visitor_ID from visitors";
	 $ret = mysqli_query($conn, $sql);
	 while($row = mysqli_fetch_array($ret))
	 {
	 	// echo "<select name=.\"Specific_conditions\">";
	 	echo "<option value= ".$row['Visitor_ID'].">".$row['Visitor_ID']."</option>";
	 	//$str = addslashes("<option value=\".$row['Visitor_ID']\">".$row['Visitor_ID']."</option>");
	 	//echo $str;
	}

	?> 
</select><br><br>

	Report_date :  <input type="date" name="Report_date" required="Please enter the value" min="2018-01-01" max="2019-11-18"><br><br>
	Tests_undergone :<!--  <input type="text" name="Tests_undergone" required="Please enter the value"><br><br> -->
	<select name="Tests_undergone">
	<?php 
	 $conn = mysqli_connect('localhost', 'root','');
	 mysqli_select_db($conn,'routine_care1');
	 $V_id = $_POST['Visitor_id'];
	 echo $V_id;
	 $sql = "SELECT distinct Tests from consultation";
	 $ret = mysqli_query($conn, $sql);
	 while($row = mysqli_fetch_array($ret))
	 {
	 	// echo "<select name=.\"Specific_conditions\">";
	 	echo "<option value= ".$row['Tests'].">".$row['Tests']."</option>";
	 	//$str = addslashes("<option value=\".$row['Visitor_ID']\">".$row['Visitor_ID']."</option>");
	 	//echo $str;
	}

	?> 
</select><br><br>
	Bill_id : <!-- <input type="number" name="Bill_id" required="Please enter the value"> -->
	<select name="Bill_id">
	<?php 
	 $conn = mysqli_connect('localhost', 'root','');
	 mysqli_select_db($conn,'routine_care1');
	 //$V_id = $_POST['Visitor_id'];
	 echo $V_id;
	 $sql = "SELECT distinct Bill_id from consultation";
	 $ret = mysqli_query($conn, $sql);
	 while($row = mysqli_fetch_array($ret))
	 {
	 	// echo "<select name=.\"Specific_conditions\">";
	 	echo "<option value= ".$row['Bill_id'].">".$row['Bill_id']."</option>";
	 	//$str = addslashes("<option value=\".$row['Visitor_ID']\">".$row['Visitor_ID']."</option>");
	 	//echo $str;
	}

	?> 
	</select><br><br>
	Bill_amnt : <input type="number" name="Bill_amnt" required="Please enter the value"><br><br>
	Status : <select name="Status">
				<option>--Select--</option>
			 <option value="Not Paid">Not Paid</option>
			 <option value="Paid">Paid</option>
			 </select><br><br><br><br>
	
	<button> <font face="Times New Roman" color="blue">SUBMIT</button>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
  <script src="filename.js"></script>
</form>
</body>
</html>