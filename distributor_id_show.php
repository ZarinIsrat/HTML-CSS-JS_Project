	
	<?php
 session_start();
$cusid=$_SESSION['id'];

//$order_number= ;
$key 	= $_POST['key'];
 
$con = mysqli_connect("127.0.0.1","root","","pharmacy");

if(!$con)
{
    die('Connection Failed'.mysql_error());
}
  // $sql = "select customer_id from order_table  where order_id='$key'  ";
  // $sql_2="select  from user where Type='Customer' " ;
   $sql="select user_id from user where Type='Distributor' and Area=(select  Area  from user where Type='Customer' and user_id=(select customer_id from order_table where order_id='$key'))";

	$result = mysqli_query($con, $sql);
	//$result_2 = mysqli_query($con, $sql_2);
	//$result_3 = mysqli_query($con, $sql_3);
	
	
	//echo "<table border='2'><tr><th>ID</th><th>Medi_ Name</th><th>medi_Generic_name</th><th>medi_Catagory</th><th>Price</th><th>Company</th></tr>";
	$data ="";
	
	while($row = mysqli_fetch_assoc($result)){
		//$match= array_intersect($array1, $array2);
		
	    //if ($row_2['Area']==$row_3['Area'])
		$data .="<center><div onclick='abc(this.innerHTML)' style='background-color: #eee;width:200px;border: 1px solid #000;margin:2px'>".$row['user_id']."</div></center>";
        // echo $data;
		
		//echo $data;
	
		}
	echo $data;
 
?>
	