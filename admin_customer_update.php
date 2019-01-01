
<?php
session_start();
if(isset($_GET["errors"])&&$_GET["errors"]=="wrong id"){
	echo "<span style=' position:  absolute;left:300px;top:50px;color:red ;'>INCORRECT ID</span>";
}

?>
<!DOCTYPE html>
<html>
<head>
<title>CUSTOMER_UPDATE</title>
<h1 style= "text-align: center;color:#91919E" >CUSTOMER UPDATE</h1>
</head>
<body style= "background-color:#1C265D" >
<?php if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="success"){ ?>
<form  name="myform" action="cus_update_check.php" method="POST">

<iframe src="customer_table_show.php"   style="position: absolute;left:580px; top:80px " height="400" width="600">
	
</iframe> 
<br></br>
<label style=" color:red">User ID:</label>
<input type="text" name="User_id" placeholder="Enter Id" id="user_id" onkeyup="check3()">
<br/><br/>

<label style=" color:red">First Name:</label>
<input type="text" name="First_Name" placeholder="Enter First Name" id="fisrt_name" onkeyup="chk()">
<span id="sidemsg" ></span>
<br/><br/>

<label style=" color:red">Last Name:</label>
<input type="text" name="Last_Name" placeholder="Enter last Name" id="last_name" onkeyup="chk()">
<span id="sidemsg2" ></span>
<br/><br/>

<label style=" color:red">Date Of Birth:</label>
<input type="date" name="dob">
<br/><br/>

<label style=" color:red">Gender:</label><br/>
<input type="radio" name="gender" value="Male" checked> Male<br/>
<input type="radio" name="gender" value="Female" /> Female<br/>
<input type="radio" name="gender" value="Other" /> Other<br/>


<br/><br/>

<label>Phone:</label>
<input type="text" name="Phone" placeholder="Enter Phone Number"  id="phone" onkeyup="chk()">
<span id="sidemsg4" ></span>
<br/><br/>

<label>EmailID:</label>
<input type="text" name="Email" placeholder="Enter email address"  id="email" onkeyup="check2()">
<span id="sidemsg5" ></span>
<br/><br/>

<label>Password:</label>
<input type="password" name="Password"  placeholder="Enter Password"  id="pass" onkeyup="chk()">
<span id ="sidemsg6"></span>
<br/><br/>

<label>AREA:</label>
<input type="text" name="customer_area" placeholder="Enter Area" id="area" onkeyup="chk()" >
<span id ="sidemsg8"></span>
<br/><br/>

<input type="submit" name="stb" value= "Submit">

<a href="customer_admin.php"><button type="button" required name="CANCLE">CANCLE</button></a>
<br></br>



<?php  

} 
else{
	header("Location:login.php");
}
?>
</body>
</html>