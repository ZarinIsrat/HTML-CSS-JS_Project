<?php
	
	$key 	= $_POST['key'];
	 session_start();

	$con = mysqli_connect("127.0.0.1","root","","pharmacy");

if(!$con)
{
    die('Connection Failed'.mysql_error());
}
   $sql = "select * from user where user_id like '".$key."%'";

	$result = mysqli_query($con, $sql);
	//echo "<table border='2'><tr><th>ID</th><th>Medi_ Name</th><th>medi_Generic_name</th><th>medi_Catagory</th><th>Price</th><th>Company</th></tr>";
	$data ="";
	
	while($row = mysqli_fetch_assoc($result)){
		//$data .= "<tr><td>".$row["user_id"]."</td></tr>";
		$data .="<center><div onclick='abc(this.innerHTML)' style='background-color: #eee;width:200px;border: 1px solid #000;margin:2px'>".$row['user_id']."</div></center>";
	//echo $data;


		}
	echo $data;

?>