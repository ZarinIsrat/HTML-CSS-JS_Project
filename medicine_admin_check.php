<?php
$d=($_REQUEST["medi_Name"]);
$g=($_REQUEST["Generic_Name"]);
$cn=($_REQUEST["company_Name"]);
$cat=($_REQUEST["catagory"]);
$p=($_REQUEST["mediprice"]);
$am=($_REQUEST["amount"]);

if(strlen($_REQUEST["medi_Name"])<=2)
{
	echo "ERROR";
	header("Location:medicine_admin.php?error=wrong name");
	
}
else if($d[0]=="0"||$d[0]=="1"||$d[0]=="2"||$d[0]=="3"||$d[0]=="4"||$d[0]=="4"||$d[0]=="5"||$d[0]=="6"||$d[0]=="7"||$d[0]=="8"||$d[0]=="9"||preg_match('~[0-9]~', $_REQUEST["medi_Name"]))
{
	echo "ERROR";
	header("Location:medicine_admin.php?error=wrong name ");
	
}
else if(strlen($_REQUEST["Generic_Name"])<=2)
{
	echo "ERROR";
	header("Location:medicine_admin.php?error=wrong generic name");
	
}
else if($g[0]=="0"||$g[0]=="1"||$g[0]=="2"||$g[0]=="3"||$g[0]=="4"||$g[0]=="4"||$g[0]=="5"||$g[0]=="6"||$g[0]=="7"||$g[0]=="8"||$g[0]=="9"||preg_match('~[0-9]~', $_REQUEST["Generic_Name"]))
{
	echo "ERROR";
	header("Location:medicine_admin.php?error=wrong generic name ");
	
}

else if(strlen($_REQUEST["company_Name"])<=2)
{
	echo "ERROR";
	header("Location:medicine_admin.php?error=wrong company name");
	
}
else if($cn[0]=="0"||$cn[0]=="1"||$d[0]=="2"||$cn[0]=="3"||$cn[0]=="4"||$cn[0]=="4"||$cn[0]=="5"||$cn[0]=="6"||$cn[0]=="7"||$cn[0]=="8"||$cn[0]=="9"||preg_match('~[0-9]~', $_REQUEST["company_Name"]))
{
	echo "ERROR";
	header("Location:medicine_admin.php?error=wrong company name");
	
}
else if(strlen($_REQUEST["catagory"])<=2)
{
	echo "ERROR";
	header("Location:medicine_admin.php?error=wrong catagory ");
	
}
else if($cat[0]=="0"||$cat[0]=="1"||$cat[0]=="2"||$cat[0]=="3"||$cat[0]=="4"||$cat[0]=="4"||$cat[0]=="5"||$cat[0]=="6"||$cat[0]=="7"||$cat[0]=="8"||$cat[0]=="9"||preg_match('~[0-9]~', $_REQUEST["catagory"]))
{
	echo "ERROR";
	header("Location:medicine_admin.php?error=wrong catagory ");
	
}
else if( $_REQUEST["mediprice"]==0||preg_match('~[A-Z]~', $_REQUEST["mediprice"]))
{
	echo "ERROR";
	header("Location:medicine_admin.php?error=wrong price");
}
else 
	
{    
$con = mysqli_connect("127.0.0.1","root","","pharmacy");

if(!$con)
{
    die('Connection Failed'.mysql_error());
}

//$result = mysqli_query($con,"SELECT * FROM `user` WHERE user_id=$id");
//$row = mysqli_fetch_array($result);

$query = "INSERT INTO medicine(medi_Name,medi_Generic_name,medi_Catagory,medi_price,medi_Company,amount) VALUES ('$d','$g','$cat','$p','$cn','$am')";
    //$result = mysqli_query($conn, $sql);
	$data = mysqli_query ($con,$query);
	if($data)
	{
		header("Location:medicine_admin.php");
	echo "YOUR REGISTRATION IS COMPLETED...";
	}


}
?>