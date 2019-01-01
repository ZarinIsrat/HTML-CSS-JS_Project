<script   type="text/javascript">

function chk(){
	var flag=true;
	var letters = /^[0-9]+$/;
	//var letters = "0123456789";
	//var l=document.myform.uname.value.length;

	document.getElementById("sidemsg").innerHTML="";
	document.getElementById("sidemsg2").innerHTML="";
	//document.getElementById("sidemsg3").innerHTML="";
	document.getElementById("sidemsg4").innerHTML="";
	//document.getElementById("sidemsg5").innerHTML="";
	document.getElementById("sidemsg6").innerHTML="";
	document.getElementById("sidemsg7").innerHTML="";
	document.getElementById("sidemsg8").innerHTML="";

	
	
	var firstname=document.getElementById("fisrt_name").value.length;
	var fname=document.getElementById("fisrt_name").value;
	var lastname=document.getElementById("last_name").value.length;
	var lname=document.getElementById("last_name").value;
	//var dob=document.getElementById("dob").value.length;
	var phone=document.getElementById("phone").value.length;
	//var email=document.getElementById("email").value.length;
	var password=document.getElementById("pass").value.length;
	var conpassword=document.getElementById("cpass").value.length;
	var area =document.getElementById("area").value.length;
	// var result = /[^a-z0-9\\,\\.\\;]/g(fn );
	
	if(firstname<3||fname.match(letters)){
		un=document.getElementById("sidemsg");
		un.innerHTML="first name error";
		un.style.color="red";
		//document.myform.uname.focus();
		flag=false;
	}


	 else if(lastname<3||lname.match(letters)){
		un=document.getElementById("sidemsg2");
		un.innerHTML="lastname error";
		un.style.color="red";
		//document.myform.pass.focus();
		flag=false;
	}
	// else if(dob==0){
		// un=document.getElementById("sidemsg3");
		// un.innerHTML=" dob error";
		// un.style.color="red";
		// //document.myform.pass.focus();
		// flag=false;
	// }
	
	else if(phone<4){
		un=document.getElementById("sidemsg4");
		un.innerHTML=" phone error";
		un.style.color="red";
		//document.myform.pass.focus();
		flag=false;
	}
	else if(password==0){
		un=document.getElementById("sidemsg6");
		un.innerHTML=" pass error";
		un.style.color="red";
		//document.myform.pass.focus();
		flag=false;
	}
	else if(conpassword==0){
		un=document.getElementById("sidemsg7");
		un.innerHTML=" confirmed pass error";
		un.style.color="red";
		//document.myform.pass.focus();
		flag=false;
	}

	else if(area<4){
		un=document.getElementById("sidemsg8");
		un.innerHTML=" area error";
		un.style.color="red";
		//document.myform.pass.focus();
		flag=false;
	}
	
	else{
		//alert("all okay");
		//document.getElementById("sidemsg").innerHTML="Ok";
		//document.getElementById("sidemsg2").innerHTML="Ok";
		//document.myform.submit();
	document.getElementById("sidemsg").innerHTML="";
	document.getElementById("sidemsg2").innerHTML="";
	//document.getElementById("sidemsg3").innerHTML="";
	document.getElementById("sidemsg4").innerHTML="";
	document.getElementById("sidemsg6").innerHTML="";
	document.getElementById("sidemsg7").innerHTML="";
	document.getElementById("sidemsg8").innerHTML="";
	
	}
	return flag;
}
/* function email()
{
var iChars = "@.";
for (var i = 0; i < document.getElementById("email").value.length; i++) {
if (iChars.indexOf(document.getElementById("email").value.charAt(i)) == -1) {
un=document.getElementById("sidemsg5");
un.innerHTML=" email error";
un.style.color="red";

}
}
	
	
} */


function check2(){
var iChars = "@.";
for (var i = 0; i < document.getElementById("email").value.length; i++) {
if (iChars.indexOf(document.getElementById("email").value.charAt(i)) != -1) {
un=document.getElementById("sidemsg5");
un.innerHTML=" Find @/ .";
un.style.color="red";

}


}
	
}


</script>



<?php
session_start();

if(isset($_GET["error"])&&$_GET["error"]=="wrong first name"){
	echo "<span style=' position:  absolute;left:300px;top:100px;color:red ;'>INCORRECT FIRST NAME</span>";
}
if(isset($_GET["error"])&&$_GET["error"]=="wrong last name"){
	echo "<span style=' position:absolute;left:300px;top:150px;color:red ;'>INCORRECT LAST NAME</span>";
}
if(isset($_GET["error"])&&$_GET["error"]=="wrong  DATE"){
	 echo "<span style=' position: absolute;left:300px; top:189px;color:red ;'>INCORRECT DATE</span>";
}
if(isset($_GET["error"])&&$_GET["error"]=="wrong phone"){
	echo "<span style=' position: absolute;left:300px; top:80px;color:red ;top:320px;'>INCORRECT PHONE</span>";
}
if(isset($_GET["error"])&&$_GET["error"]=="wrong email"){
	echo "<span style='position: absolute;left:300px;top:380px;color:red ;'>INCORRECT EMAIL</span>";
}
if(isset($_GET["error"])&&$_GET["error"]=="password"){
	echo "<span style='color:red ;position: absolute;left:300px;top:430px;'>PASSWORD DOES NOT MATCH </span>";
}
if(isset($_GET["error"])&&$_GET["error"]=="wrong area"){
	echo "<span style=' position: absolute;left:300px; top:80px;color:red ;top:500px;'>INCORRECT AREA</span>";
}

?>
<!DOCTYPE html>
<html>
<head>
<title>DISTRIBUTOR_ADMIN</title>
<h1 style= "text-align: center;color:#91919E" >DISTRIBUTOR</h1>
</head>
<body style= "background-color:#1C265D" >


<form  name="myform" action="distributor_admin_check.php" method="POST">

<iframe src="distributor_table_show.php"   style="position: absolute;left:580px; top:80px " height="400" width="600">
</iframe>
<br></br>

<label>First Name:</label>
<input type="text" name="First_Name" placeholder="Enter First Name" id="fisrt_name" onkeyup="chk()">
<span id="sidemsg" ></span>
<br/><br/>

<label>Last Name:</label>
<input type="text" name="Last_Name" placeholder="Enter last Name" id="last_name" onkeyup="chk()">
<span id="sidemsg2" ></span>
<br/><br/>

<label>Date Of Birth:</label>
<input type="date" name="dob">
<br/><br/>

<label>Gender:</label><br/>
<input type="radio" name="gender" value="Male" checked> Male<br/>
<input type="radio" name="gender" value="Female" /> Female<br/>
<input type="radio" name="gender" value="Other" /> Other<br/>


<br/><br/>

<label>Phone:</label>
<input type="text" name="Phone" placeholder="Enter Phone Number"   id="phone" onkeyup="chk()">
<span id="sidemsg4" ></span>
<br/><br/>

<label>EmailID:</label>
<input type="text" name="Email" placeholder="Enter email address" id="email" onkeyup="check2()">
<span id="sidemsg5" ></span>
<br/><br/>

<label>Password:</label>
<input type="password" name="Password"  placeholder="Enter Password" id="pass" onkeyup="chk()" >
<span id ="sidemsg6"></span>
<br/><br/>

<label>Confirm Password:</label>
<input type="password"  name="Confirm_Password" placeholder="Confirm Password"  id="cpass" onkeyup="chk()">
<span id ="sidemsg7"></span>
<br><br/>

<label>AREA:</label>
<input type="text" name="distributor_area" placeholder="Enter Area" id="area" onkeyup="chk()">
<span id="sidemsg8" ></span>
<br/><br/>


<input type="submit" name="stb" value= "Submit">
<button name="customer_update">update</button>
<a href="distributor_allocation_side.php"><button type="button" required name="distributor_allocation">ALLOCATION</button></a>
<a href="Admin_side.php"><button type="button" required name="CANCLE">CANCLE</button></a>
<br></br>
</form>
<form action="Admin_dis_delete.php" method="POST">
<label>ID:</label>
<input type="text" name="user_id" placeholder="Enter Id">
<input type="submit" name="distributor_delete" value= "Delete">
</form>


<br/><br/>
</body>
</html>