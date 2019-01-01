<?php
	
session_start();
$_SESSION["flag"]="";
/*global $auth;
	$myfile = fopen("check.txt", "r") or die("Unable to open file!");
	while($c=fgets($myfile)){
		$a=explode(" ",trim($c));
		$auth[$a[0]]=$a[1];
	print_r($a);
	}
	fclose($myfile);
	
$u=$_REQUEST['id'];
$p=md5($_REQUEST['psw']);


if(isset($auth[$u]) && md5($auth[$u]==$p) &&$_REQUEST['type']=="Admin"){
	$_SESSION["flag"]="success";
	header("Location:Admin_side.php");
	
}
else if(isset($auth[$u]) && md5($auth[$u]==$p) &&$_REQUEST['type']=="Customer"){
	$_SESSION["flag"]="success";
	header("Location:customer_side.php");
	
}
else{
	echo "I can't recognize you";
	header("Location:login.php ?error=incorrect");
	}
 */
 $id = $_REQUEST["id"];
$pass = $_REQUEST["psw"];
$_SESSION['id']=$_REQUEST["id"];

// Connect to the database

$con = mysqli_connect("127.0.0.1","root","","pharmacy");

if(!$con)
{
    die('Connection Failed'.mysql_error());
}



$result = mysqli_query($con,"SELECT * FROM `user` WHERE user_id=$id");


$row = mysqli_fetch_array($result);

if($row["user_id"]==$id && $row["Password"]==$pass && $_REQUEST['type']==$row["Type"]&&$_REQUEST['type']=='Admin')
{
	if($_POST['autologin']=="on"){
						setcookie("autologin", "valid", time()+360,'/');
					}

					//$cookie_name = "abc";
					setcookie("login", $id, time()+360,'/');
	
	$_SESSION["flag"]="success";
	header("Location:Admin_side.php");}
else if($row["user_id"]==$id && $row["Password"]==$pass && $_REQUEST['type']==$row["Type"]&&$_REQUEST['type']=='Customer')
{    
	
	$_SESSION["flag"]="success";
	header("Location:customer_side.php");}
	
else if($row["user_id"]==$id && $row["Password"]==$pass && $_REQUEST['type']==$row["Type"]&&$_REQUEST['type']=='Distributor')
{
	

	$_SESSION["flag"]="success";
	header("Location:distributor_side.php");}
else
{
	echo "I can't recognize you";
	header("Location:newlogin.php ?error=incorrect");
	
} 
	
	
	?>