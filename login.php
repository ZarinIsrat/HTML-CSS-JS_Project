
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
<title>LOGIN</title>
<link href="style.css" rel="stylesheet" type="text/css">
<h1 style= "color:#91919E"> LOGIN</h1>
</head>
<body style= "text-align: center;background-color:#1C265D;background-image:url('pic1.jpg');">
<form   name="myform" action="Login_Check.php" method="post">
<label for="uid" style="position: absolute;top: 180px;left:400px;" ><b>User_Id</b></label>
<input type="text" placeholder="Enter User Id" name="id"  id="un"   style="position: absolute;top: 180px;left:500px;width:350px; height:30px;" onkeyup="chk()">
<span id="sidemsg"  style="position: absolute;top: 180px;left:900px;"></span>
<br>
<label for="psw"style="position: absolute;top: 250px;left:400px;"><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="psw" style="position: absolute;left:500px;top:250px;width:350px; height:30px ;" onkeyup="chk()">
<span id="sidemsg2"  style="position: absolute;top:250px;left:900px;"></span>
<br>
<label for="typ"style="position: absolute;top: 320px;left:400px;"><b>Enter</b></label>
<select name="type" style="position: absolute;left:500px;top:320px;width:350px; height:30px ;">
  
  <option value="Admin">Admin</option>
  <option value="Customer">Customer</option>
  <option value="Distributor">Distributor</option>

</select>
<label>&nbsp;</label><input type="checkbox" name="autologin" value="1">Remember Me<br />
<a href="Login_Check.php"><button type="submit" required style="position: absolute;top: 450px;left:550px;padding: 10px 45px ;background-color:#81818E;"name="Login"  >Login</button></a>
<a href="Signup.php"  > signup</a>
</form>
</body>
</html>