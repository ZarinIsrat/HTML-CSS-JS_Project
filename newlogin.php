<?php
session_start();
if(isset($_GET["error"])){
echo "<span style='color:red ; position: absolute;top: 450px;font-size:20px;'>INCORRECT USERNAME OR PASSWORD</span>";
 }

 

?>
<script   type="text/javascript">

function chk(){
	var flag=true;
	//var l=document.myform.uname.value.length;
	document.getElementById("sidemsg").innerHTML="";
	document.getElementById("sidemsg2").innerHTML="";
	
	var l=document.getElementById("un").value.length;
	var lp=document.myform.psw.value.length;
	if(l==0){
		un=document.getElementById("sidemsg");
		un.innerHTML="user name error";
		un.style.color="red";
		//document.myform.uname.focus();
		flag=false;
	}
	else if(lp==0){
		un=document.getElementById("sidemsg2");
		un.innerHTML="password is too short";
		un.style.color="red";
		//document.myform.pass.focus();
		flag=false;
	}
	else{
		//alert("all okay");
		//document.getElementById("sidemsg").innerHTML="Ok";
		//document.getElementById("sidemsg2").innerHTML="Ok";
		//document.myform.submit();
	}
	return flag;
}
</script>




<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="mystyle.css" />
</head>
<body>

	<div class="box">
		<h2>login</h2>
		 <center><a href="Signup.php"  > signup</a></center>
		<form  name="myform" action="Login_Check.php" method="post">
			<div class="inputBox">
			<input type="text" placeholder="Enter User Id" name="id">
			<label>UserId</label>
			</div>
			<div class="inputBox">
			<input type="password" placeholder="Enter Password" name="psw">
			<label>Password</label>
			</div>
		    <label ><b>Enter</b></label>
<select name="type" >
  
  <option value="Admin">Admin</option>
  <option value="Customer">Customer</option>
  <option value="Distributor">Distributor</option>

</select>
<br/>
<label>&nbsp;</label><!--input type="checkbox" name="autologin" value="1">Remember Me<br /-->
			<a href="Login_Check.php"><button type="submit" required name="Login" class="btn"  >Login</button></a>
		</form>





</body>
</html>
