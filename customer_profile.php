<?php?>
<!DOCTYPE html>
<html>
<head>
<title>PROFILE</title>
<h1 style= "color:#91919E"> PROFILE</h1>
</head>
<body style= "text-align: center;background-color:#1C265D;">
<form   name="myform"  method="post">
<label style="position: absolute;left:100px; top:50px ;color:#91919E">Order items:</label>
<!--textarea rows="10" cols="20" style="position: absolute;left:1000px; top:20px"></textarea-->
<br><br/>

<iframe    style="position: absolute;left:100px; top:100px " height="400" width="600"; src="order_item_table.php">
</iframe>
<br></br>
<a href="customer_side.php"><button type="button" required name="CANCEL" style="position: absolute;left:100px; top:500px">CANCEL</button></a>
</form>
</body>
</html>