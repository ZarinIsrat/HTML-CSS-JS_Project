<?php
session_start();

				if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="success"){


				//echo "<br><a href='logout.php'>Logout</a>";
				



				 }

				else{
				header("Location:login.php");

 
}


?>
<script type="text/javascript">

function logout()
{
	window.location.assign("logout.php")
}
</script>
<!DOCTYPE html>
<html>
<head>
<title>CUSTOMER_SIDE</title>
</head>
<style>
.btn-group .button {
    background-color: #333333;
    border: 1px solid black;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    
    font-size: 16px;

    width: 150px;
    
	
          }



.btn-group .button:hover {
    background-color: #a6a6a6;
}
</style>


 
<body style= " background-color:#1C265D " >

<textarea rows="30" cols="60" style="position: absolute;left:600px; top:80px; background-image:url('customer.png');" >
 
</textarea>

<h2 style="position: absolute;left:650px; top:30px;color:#91919E">CUSTOMER</h2>

<div class="btn-group">
  
  <a href="customer_profile.php"><button class="button">PROFILE</button><a><br>
  <a href="customer_order_side.php"><button class="button">ORDER</button></a><br>
  <button class="button" onclick="logout()" >LOGGOUT</button><br>
</div>

</body>
</html>
