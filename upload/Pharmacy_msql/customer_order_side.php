<!DOCTYPE html>
<html>
<head>
	<title>order</title>
</head>
<body style= "background-color:#1C265D" >
    <form method="POST" action="order_place_check.php">
	<center>
		<div>
			<p style= "text-align: center;color:#91919E"> order </p>
			<label style= "color:#91919E">Enter name</label>

			<input type="text" id='search' name="medi_name" onkeyup="loadData()">
			<label style= "color:#91919E">Enter Amount</label>
			
			 <select name="amount"  >
			 	<?php 
	for($u=1;$u<=100;$u++)
	{
		echo "<option value='$u'>$u</option>";
	}
	?>
           </select>
           <br></br>
			<input type="submit" name="submit" value="submit">
			<a href="customer_side.php"><button type="button" required name="CANCLE">CANCLE</button></a>

		</div>
		<div id="result">
			
		</div>

		

	</center>

	<script type="text/javascript">
		
		function loadData(){

			var xmlHttp = new XMLHttpRequest();

			xmlHttp.open('POST', 'medi_order_check.php', true);
			xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			var abc = "key="+document.getElementById('search').value;
			xmlHttp.send(abc);

			xmlHttp.onreadystatechange = function(){

				if(this.readyState == 4 && this.status==200)
				{
					//alert(this.responseText);
					document.getElementById('result').innerHTML = this.responseText;
					//alert(this.responseText);
				}
			}

		}

		function abc(data){

			document.getElementById('search').value=data;
			document.getElementById('result').innerHTML="";
		}

	</script>
</form>
</body>
</html>