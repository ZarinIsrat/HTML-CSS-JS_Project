<?php
session_start();

$user_id=($_REQUEST["User_id"]);
$f_name=($_REQUEST["First_Name"]);
$l_name=($_REQUEST["Last_Name"]);
$dob=($_REQUEST["dob"]);
$gender=($_REQUEST["gender"]);
$phone=($_REQUEST["Phone"]);
$email=($_REQUEST["Email"]);
$password=($_REQUEST["Password"]);
$confirm_pass=($_REQUEST["Confirm_Password"]);
$area=($_REQUEST["customer_area"]);

if(strlen($_REQUEST["User_id"])==0||preg_match('~[A-Z]~', $_REQUEST["User_id"]))
{
	echo "ERROR";
	header("Location:admin_customer_update.php?errors=wrong id");
	
}
//echo "$f_name";
else{

$con = mysqli_connect("127.0.0.1","root","","pharmacy");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());

}
            
            
           // $sql = "UPDATE user ". "SET First_Name = $f_name ". 
               //"WHERE user_id = $user_id" ;
           
            //$retval = mysql_query( $sql, $conn );
           $sql = "UPDATE user  SET First_Name='$f_name' , Last_Name='$l_name' , Dob='$dob' ,Gender ='$gender' , Phone='$phone' , Email='$email' ,Password='$password' ,Area='$area' WHERE user_id='$user_id' ";
           

;

if (mysqli_query($con, $sql)) {
    echo "Record updated successfully";
    header("Location:admin_customer_update.php");
} else {
    echo "Error updating record: " . mysqli_error($con);
    header("Location:admin_customer_update.php ?errors=wrong id");
}

mysqli_close($con);
}
?>
