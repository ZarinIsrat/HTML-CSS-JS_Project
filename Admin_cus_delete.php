<?php
session_start();
// if (isset($_GET['user_id'])) {
 $id = $_POST['user_id'];
// //$user_id=($_REQUEST["user_id"]);
// echo $id;}
// echo sgwqswqyg;

 
if(strlen($_REQUEST["user_id"])==0||preg_match('~[A-Z]~', $_REQUEST["user_id"]))
{
	echo "ERROR";
	header("Location:customer_admin.php?errors=wrong id");
	
}

$con = mysqli_connect("127.0.0.1","root","","pharmacy");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM user WHERE user_id=$id";

if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
    header("Location:customer_admin.php");

} else {
	header("Location:customer_admin.php");
    echo "Error id" . mysqli_error($con);
}

mysqli_close($con);
?>
