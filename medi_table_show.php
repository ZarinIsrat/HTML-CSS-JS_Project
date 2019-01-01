
<?php 

   session_start();

	$con = mysqli_connect("127.0.0.1","root","","pharmacy");

if(!$con)
{
    die('Connection Failed'.mysql_error());
}
    $sql= $sql = "select * from medicine ";

	$result = mysqli_query($con, $sql);
	echo "<table border='2'><tr><th>ID</th><th>Medi_ Name</th><th>medi_Generic_name</th><th>medi_Catagory</th><th>Price</th><th>Company</th><th>Amount</th></tr>";

	while($row = mysqli_fetch_assoc($result)){
		
		echo "<tr><td>".$row["medi_id"]."</td><td>".$row["medi_Name"]."</td><td> ".$row["medi_Generic_name"]."</td><td> ".$row["medi_Catagory"]."</td><td> ".$row["medi_price"]."</td><td> ".$row["medi_Company"]."</td><td> ".$row["amount"]."</td></tr>";
    }
    echo "</table>";
	
	 ?>
	 

