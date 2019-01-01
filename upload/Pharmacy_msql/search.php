<?php
	
	$key 	= $_POST['key'];

	$con = mysqli_connect("127.0.0.1","root","","pharmacy");

	$sql = "select * from user where First_Name like '".$key."%'";
	$result = mysqli_query($con,$sql);
	
	$data ="";
	echo "<table border='2'><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>DOB</th><th>Genter</th><th>Phone</th><th>Email</th><th>Password</th></tr>";
	while($row = mysqli_fetch_assoc($result)){
		$data .= "<tr><td>".$row["user_id"]."</td><td>".$row["First_Name"]."</td><td> ".$row["Last_Name"]."</td><td> ".$row["Dob"]."</td><td> ".$row["Gender"]."</td><td> ".$row["Phone"]."</td><td> ".$row["Email"]."</td><td> ".$row["Password"]."</td></tr>";
	}
	echo $data;

?>