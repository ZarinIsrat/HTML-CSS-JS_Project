<?php
session_start();
// if (isset($_GET['user_id'])) {
 $id = $_POST['medi_id'];
// //$user_id=($_REQUEST["user_id"]);
// echo $id;}
// echo sgwqswqyg;



$con = mysqli_connect("127.0.0.1","root","","pharmacy");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM medicine WHERE medi_id=$id";

if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
    header("Location:medicine_admin.php");

} else {
	header("Location:medicine_admin.php");
    echo "Error id" . mysqli_error($con);
}

mysqli_close($con);
?>
