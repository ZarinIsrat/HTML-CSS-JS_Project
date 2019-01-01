<?php

$user_id=($_REQUEST["distributor_id"]);
$order_id=($_REQUEST["order_id"]);
$con = mysqli_connect("127.0.0.1","root","","pharmacy");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());

}
            
            
           // $sql = "UPDATE user ". "SET First_Name = $f_name ". 
               //"WHERE user_id = $user_id" ;
           
            //$retval = mysql_query( $sql, $conn );
           $sql = "UPDATE order_table   SET distributor_id='$user_id'  where  order_id='$order_id' ";
           



if (mysqli_query($con, $sql)) {
    echo "Record updated successfully";
    header("Location:distributor_allocation_side.php");
} else {
    echo "Error updating record: " . mysqli_error($con);
    header("Location:distributor_allocation_side.php ?errors=wrong id");
}

mysqli_close($con);
?>