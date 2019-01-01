<?php
session_start();
               if( isset($_COOKIE['login'])){

				//if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="success"){


				echo "COOKIE LOGIN ";
				



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

<textarea rows="30" cols="60" style="position: absolute;left:600px; top:80px; background-image:url('pic2.png');" >
 
</textarea>

<h2 style="position: absolute;left:650px; top:30px;">ADMIN</h2>

<div class="btn-group">
  
  <a href="customer_admin.php"><button class="button">CUSTOMER</button><a><br>
  <a href="distributor_admin.php"><button class="button">DISTRIBUTOR</button></a><br>
  <a href="admin_search.php"><button class="button">USER SEARCH</button></a><br>
  <a href="medicine_admin.php"><button class="button">MEDICINE</button></a><br>
  <a href="medicine_search.php"><button class="button">MEDICINE SRATCH</button></a><br>
  <a href="sales_report_admin.php"><button class="button">SALES REPORT</button></a><br>
  <button class="button"  onclick="logout()">LOGOUT</button><br>
</div>

</body>
</html>
