<?php
session_start();

//$_SESSION["flag"]="";
$name=($_REQUEST["medi_name"]);
$amount=($_REQUEST["amount"]);
$cusid=$_SESSION['id'];

  
 

  $con = mysqli_connect("127.0.0.1","root","","pharmacy");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO order_table (medi_Name,medi_Amount,customer_id)
VALUES ('$name', '$amount' ,'$cusid')";
$sql_2=" UPDATE medicine  SET amount=amount-'$amount'";


if (mysqli_query($con, $sql) &&mysqli_query($con, $sql_2)) {
  header("Location:customer_order_side.php");
    

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);

?>