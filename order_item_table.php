
<?php 

   session_start();
   $cusid=$_SESSION['id'];

	$con = mysqli_connect("127.0.0.1","root","","pharmacy");

if(!$con)
{
    die('Connection Failed'.mysql_error());
}
     $sql = "select * from order_table where customer_id like '".$cusid."%'";

	$result = mysqli_query($con, $sql);
	echo "<table border='2'><tr><th>Medi Name</th><th>Amount</th></tr>";

	while($row = mysqli_fetch_assoc($result)){
		//echo $row['cus_id']." | ";
		//echo $row['cus_First_Name']." | ";
		//echo $row['password']."<br/>";
		 //echo $row."<br />";
		echo "<tr><td>".$row["medi_Name"]."</td><td>".$row["medi_Amount"]."</td></tr>";
    }
    echo "</table>";
   
		

	

	//echo "kkkkkk";
	 ?>