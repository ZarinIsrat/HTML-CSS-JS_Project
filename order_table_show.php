
<?php 

   session_start();
   $cusid=$_SESSION['id'];

	$con = mysqli_connect("127.0.0.1","root","","pharmacy");

if(!$con)
{
    die('Connection Failed'.mysql_error());
}
     $sql = "select * from order_table ";

	$result = mysqli_query($con, $sql);
	echo "<table border='2'><tr><th>order Id</th><th>Medi Name</th><th>Amount</th><th>Customer Id </th><th>distributor Id </th></tr>";

	while($row = mysqli_fetch_assoc($result)){
		//echo $row['cus_id']." | ";
		//echo $row['cus_First_Name']." | ";
		//echo $row['password']."<br/>";
		 //echo $row."<br />";
		echo "<tr><td>".$row["order_id"]."</td><td>".$row["medi_Name"]."</td><td>".$row["medi_Amount"]."</td><td>".$row["customer_id"]."</td><td>".$row["distributor_id"]."</td></tr>";
    }
    echo "</table>";
   
		

	

	//echo "kkkkkk";
	 ?>