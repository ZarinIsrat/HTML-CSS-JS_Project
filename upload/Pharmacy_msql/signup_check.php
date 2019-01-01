<?php
session_start();

$f_name=($_REQUEST["First_Name"]);
$l_name=($_REQUEST["Last_Name"]);
$dob=($_REQUEST["dob"]);
$gender=($_REQUEST["gender"]);
$phone=($_REQUEST["Phone"]);
$email=($_REQUEST["Email"]);
$password=($_REQUEST["Password"]);
$confirm_pass=($_REQUEST["Confirm_Password"]);
 
 	
 
if(strlen($_REQUEST["First_Name"])<=2)
{
	echo "ERROR";
	header("Location:Signup.php?error=wrong first name");
	
}
else if($f_name[0]=="0"||$f_name[0]=="1"||$f_name[0]=="2"||$f_name[0]=="3"||$f_name[0]=="4"||$f_name[0]=="4"||$f_name[0]=="5"||$f_name[0]=="6"||$f_name[0]=="7"||$f_name[0]=="8"||$f_name[0]=="9")
{
	echo "ERROR";
	header("Location:Signup.php?error=wrong first name");
	
}
else if(strlen($_REQUEST["Last_Name"])<=2)
{
	echo "ERROR";
	header("Location:Signup.php?error=wrong last name");
}
else if($l_name[0]=="0"||$l_name[0]=="1"||$l_name[0]=="2"||$l_name[0]=="3"||$l_name[0]=="4"||$l_name[0]=="4"||$l_name[0]=="5"||$l_name[0]=="6"||$l_name[0]=="7"||$l_name[0]=="8"||$l_name[0]=="9")
{
	 echo "ERROR";
	 header("Location:Signup.php?error=wrong lastname");
	
 }
// else if( $_REQUEST["Month"]=="February" &&($_REQUEST["Day"]==29||$_REQUEST["Day"]==31||$_REQUEST["Day"]==30) )
// {
	// echo "ERROR";
	// header("Location:Signup.php?error=wrong  DATE ");
	
// }
// else if( $_REQUEST["Month"]=="APRIL"|| $_REQUEST["Month"]=="JUNE" &&($_REQUEST["Day"]==31))
// {
	// echo "ERROR";
	// header("Location:Signup.php?error=wrong  DATE ");
	
// } 

else if( $_REQUEST["dob"]==0||strlen($_REQUEST["dob"])<8)
{
	header("Location:Signup.php?error=wrong  DATE ");
}
else if( $_REQUEST["Phone"]==0||preg_match('~[A-Z]~', $_REQUEST["Phone"]))
{
	echo "ERROR";
	header("Location:Signup.php?error=wrong phone");
}

else if(strpos($_REQUEST["Email"],"@")==0||strpos($_REQUEST["Email"],".")==0)
{
	echo "ERROR";
	header("Location:Signup.php?error=wrong email");
}


else if($_REQUEST["Password"]!= $_REQUEST["Confirm_Password"]||$_REQUEST["Password"]==0||$_REQUEST["Confirm_Password"]==0)
 {
	echo "ERROR";
	header("Location:Signup.php?error=password");
	
 }
 




else{
	      $message = "SUCCESSFULLY SIGNNEDUP";
        
		
		/*$myfile = fopen("check.txt", "a");
        $uname=$_REQUEST[First_Name];
        $pass=$_REQUEST[Password];
	    $data   = "$uname $pass  \r\n ";
	    fwrite($myfile, $data);
	    fclose($myfile);*/


$con = mysqli_connect("127.0.0.1","root","","pharmacy");

if(!$con)
{
    die('Connection Failed'.mysql_error());
}

//$result = mysqli_query($con,"SELECT * FROM `user` WHERE user_id=$id");
//$row = mysqli_fetch_array($result);

$query = "INSERT INTO user(First_Name,Last_Name,Dob,Gender,Phone,Email,Password,Type) VALUES ('$f_name','$l_name','$dob','$gender','$phone','$email','$password','Admin')";
    //$result = mysqli_query($conn, $sql);
	$data = mysqli_query ($con,$query);
	if($data)
	{
		header("Location:login.php");
	echo "YOUR REGISTRATION IS COMPLETED...";
	}

 
		 
 


}

 


?>