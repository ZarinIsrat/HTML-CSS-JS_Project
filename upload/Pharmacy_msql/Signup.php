<script   type="text/javascript">

function chk(){
	var flag=true;
	//var l=document.myform.uname.value.length;
	document.getElementById("sidemsg").innerHTML="";
	document.getElementById("sidemsg2").innerHTML="";
	document.getElementById("sidemsg3").innerHTML="";
	document.getElementById("sidemsg4").innerHTML="";
	document.getElementById("sidemsg5").innerHTML="";
	document.getElementById("sidemsg6").innerHTML="";
	document.getElementById("sidemsg7").innerHTML="";
	
	
	var firstname=document.getElementById("fisrt_name").value.length;
	var lastname=document.getElementById("last_name").value.length;
	var dob=document.getElementById("dob").value.length;
	var phone=document.getElementById("phone").value.length;
	var email=document.getElementById("email").value.length;
	var password=document.getElementById("pass").value.length;
	var conpassword=document.getElementById("cpass").value.length;
	
	if(firstname<3){
		un=document.getElementById("sidemsg");
		un.innerHTML="first name error";
		un.style.color="red";
		//document.myform.uname.focus();
		flag=false;
	}
	 else if(lastname<3){
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
	
	else{
		//alert("all okay");
		//document.getElementById("sidemsg").innerHTML="Ok";
		//document.getElementById("sidemsg2").innerHTML="Ok";
		//document.myform.submit();
	document.getElementById("sidemsg").innerHTML="";
	document.getElementById("sidemsg2").innerHTML="";
	document.getElementById("sidemsg3").innerHTML="";
	document.getElementById("sidemsg4").innerHTML="";
	document.getElementById("sidemsg6").innerHTML="";
	document.getElementById("sidemsg7").innerHTML="";
	
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
if(isset($_GET["error"])&&$_GET["error"]=="wrong first name"){
	echo "<span style=' position:  absolute;left:300px;top:50px;color:red ;'>INCORRECT FIRST NAME</span>";
}
if(isset($_GET["error"])&&$_GET["error"]=="wrong last name"){
	echo "<span style=' position:absolute;left:300px;top:100px;color:red ;'>INCORRECT LAST NAME</span>";
}
if(isset($_GET["error"])&&$_GET["error"]=="wrong  DATE"){
	 echo "<span style=' position: absolute;left:300px; top:80px;color:red ;top:150px;'>INCORRECT DATE</span>";
}
if(isset($_GET["error"])&&$_GET["error"]=="wrong phone"){
	echo "<span style=' position: absolute;left:300px; top:80px;color:red ;top:260px;'>INCORRECT PHONE</span>";
}
if(isset($_GET["error"])&&$_GET["error"]=="wrong email"){
	echo "<span style='position: absolute;left:300px;top:320px;color:red ;'>INCORRECT EMAIL</span>";
}
if(isset($_GET["error"])&&$_GET["error"]=="password"){
	echo "<span style='color:red ;position: absolute;left:300px;top:360px;'>PASSWORD DOES NOT MATCH OR FILED DOES NOT FTLLUP CORRECTLY</span>";
}



?>
<!DOCTYPE html>
<html>
<head>
<title>ADMIN SIGNUP</title>
<h1 style= "text-align: center;color:#91919E" >ADMIN</h1>
</head>
<body style= "background-color:#1C265D" >


<form  name="myform" action="signup_check.php" method="POST">
<label>First Name:</label>
<input type="text" name="First_Name" placeholder="Enter First Name" id="fisrt_name" onkeyup="chk()">
<span id="sidemsg" ></span>
<br></br>

<label>Last Name:</label>
<input type="text" name="Last_Name" placeholder="Enter last Name" id="last_name" onkeyup="chk()">
<span id="sidemsg2" ></span>

<br/><br/>

<label>Date Of Birth:</label>
<input type="date" name="dob"  id="dob">
<span id="sidemsg3" ></span>


<br/><br/>

<label>Gender:</label><br/>
<input type="radio" name="gender" value="Male" checked> Male<br/>
<input type="radio" name="gender" value="Female" /> Female<br/>
<input type="radio" name="gender" value="Other" /> Other<br/>


<label>Phone:</label>
<input type="text" name="Phone" placeholder="Enter Phone Number"  id="phone" onkeyup="chk()">
<span id="sidemsg4" ></span>
<br/><br/>

<label>EmailID:</label>
<input type="text" name="Email" placeholder="Enter email address"  id="email" onkeyup="check2()">
<abbr title="hint: sample@example.com"><b>i</b></abbr>
<span id="sidemsg5" ></span>
<br/><br/>

<label>Password:</label>
<input type="password" name="Password"  placeholder="Enter Password"   id="pass" onkeyup="chk()">
<span id ="sidemsg6"></span>
<br/><br/>

<label>Confirm Password:</label>
<input type="password"  name="Confirm_Password" placeholder="Confirm Password"  id="cpass" onkeyup="chk()">
<span id ="sidemsg7"></span>
<br><br/>



<input type="submit" name="stb" value= "Submit" >

<a href="login.php"><button type="button" required name="CANCEL">CANCEL</button></a>
<form/>
<br/><br/>
</body>
</html>