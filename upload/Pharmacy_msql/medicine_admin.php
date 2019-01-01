<script   type="text/javascript">

function chk(){
	var flag=true;
	//var l=document.myform.uname.value.length;
	document.getElementById("sidemsg").innerHTML="";
	document.getElementById("sidemsg1").innerHTML="";
	
	document.getElementById("sidemsg2").innerHTML="";
	
	document.getElementById("sidemsg3").innerHTML="";
	document.getElementById("sidemsg4").innerHTML="";
	document.getElementById("sidemsg5").innerHTML="";
	

	
	
	var mediname=document.getElementById("medi_name").value.length;
	var genericname=document.getElementById("generic_name").value.length;
	
	var comp=document.getElementById("comp_name").value.length;
	var catagory=document.getElementById("catagory").value.length;
	var price=document.getElementById("price").value.length;
	var amount=document.getElementById("mediamount").value.length;
	
	
	if(mediname<3){
		un=document.getElementById("sidemsg");
		un.innerHTML="name error";
		un.style.color="red";
		//document.myform.uname.focus();
		flag=false;
	}
	  else if(genericname==0){
		un=document.getElementById("sidemsg1");
		un.innerHTML="generic name error";
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
	
	else if(comp==0){
		un=document.getElementById("sidemsg2");
		un.innerHTML=" company name error";
		un.style.color="red";
		//document.myform.pass.focus();
		flag=false;
	}
	else if(catagory==0){
		un=document.getElementById("sidemsg3");
		un.innerHTML=" catagory name error";
		un.style.color="red";
		//document.myform.pass.focus();
		flag=false;
	}
	else if(price==0){
		un=document.getElementById("sidemsg4");
		un.innerHTML=" price error";
		un.style.color="red";
		//document.myform.pass.focus();
		flag=false;
	}
	 else if(amount==0){
		un=document.getElementById("sidemsg5");
		un.innerHTML=" amount error";
		un.style.color="red";
		//document.myform.pass.focus();
		flag=false;
	} 

	
	else{
		//alert("all okay");
		
	document.getElementById("sidemsg").innerHTML="";
	document.getElementById("sidemsg1").innerHTML="";
	document.getElementById("sidemsg2").innerHTML="";
	document.getElementById("sidemsg3").innerHTML="";
	document.getElementById("sidemsg4").innerHTML="";
	document.getElementById("sidemsg5").innerHTML="";
	
	
	} 
	return flag;
}
</script>




<?php
session_start();
if(isset($_GET["error"])&&$_GET["error"]=="wrong name"){
	echo "<span style=' position:  absolute;left:300px;top:100px;color:red ;'>INCORRECT MEDICINE NAME</span>";
}
if(isset($_GET["error"])&&$_GET["error"]=="wrong generic name"){
	echo "<span style=' position:  absolute;left:300px;top:150px;color:red ;'>INCORRECT MEDICINE GENERIC  NAME</span>";
}
if(isset($_GET["error"])&&$_GET["error"]=="wrong company name"){
	echo "<span style=' position:  absolute;left:300px;top:180px;color:red ;'>INCORRECT COMPANY NAME</span>";
}
if(isset($_GET["error"])&&$_GET["error"]=="wrong catagory"){
	echo "<span style=' position:  absolute;left:300px;top:230px;color:red ;'>INCORRECT CATAGORY NAME</span>";
}
if(isset($_GET["error"])&&$_GET["error"]=="wrong price"){
	echo "<span style=' position:  absolute;left:300px;top:270px;color:red ;'>INVALID PRICE</span>";
}

?>


<!DOCTYPE html>
<html>
<head>
<title>MEDICHINE_ADMIN</title>
<h1 style= "text-align: center;color:#91919E" >MEDICINE</h1>

</head>
<body style= "background-color:#1C265D" >

<?php if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="success"){ ?>


<form  name="myform" action="medicine_admin_check.php " method="POST">
<button name="medi_button_search" style="position: absolute;left:950px; top:50px;">search</button>
<input type="text" name="medi_search" style="position: absolute;left:1000px ;top:50px; ">
<iframe  src="medi_table_show.php"  style="position: absolute;left:580px; top:80px " height="400" width="600";>
</iframe>
<br></br>

<label> Medicine Name:</label>
<input type="text" name="medi_Name" placeholder="Enter Medicine Name" id="medi_name" onkeyup="chk()">
<span id="sidemsg" ></span>
<br/><br/>

<label>Generic Name:</label>
<input type="text" name="Generic_Name" placeholder="Enter Genetic  Name" id="generic_name" onkeyup="chk()">
<span id="sidemsg1" ></span>
<br/><br/>

<label>Company  Name:</label>
<input type="text" name="company_Name" placeholder="Enter company  Name" id="comp_name" onkeyup="chk()">
<span id="sidemsg2" ></span>

<br/><br/>

<label>catagory :</label>
<input type="text" name="catagory" placeholder="Enter catagory" id="catagory" onkeyup="chk()">
<span id="sidemsg3" ></span>
<br/><br/>


<label>price :</label>
<input type="text" name="mediprice" placeholder="Enter medicine price" id="price" onkeyup="chk()">
<span id="sidemsg4" ></span>
<br></br>

<label>amount :</label>
<input type="text" name="amount" placeholder="Enter medicine amount" id="mediamount" onkeyup="chk()">
<span id="sidemsg5" ></span>
<br></br>


<input type="submit" name="stb" value= "Submit">
<button name="medi_update">update</button>

<br><br/>

<a href="Admin_side.php"><button type="button" required name="CANCLE">CANCLE</button></a>
</form>
<br><br/>

<form  action="Admin_medicine_delete.php " method="POST">
<label>ID:</label>
<input type="text" name="medi_id" placeholder="Enter Id">
<input type="submit" name="medicine_delete" value= "Delete">

</form>
<?php  

} 
else{
	header("Location:login.php");
}
?>
</body>
</html>
