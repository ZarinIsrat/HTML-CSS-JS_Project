
<!DOCTYPE html>
<html>
<head>
<title>DISTRIBUTOR_ADMIN</title>
<h1 style= "text-align: center;color:#91919E" >DISTRIBUTOR</h1>
</head>
<body style= "background-color:#1C265D ;text-align:center;" >
<form  name="myform" method="POST" action="distributor_allocation_check.php">
Order Number:
<!--select name="cus_order" id='order' onkeyup="call">
  
</select-->
<input type="text" id="order" name="order_id"  placeholder="Enter order  ID " onkeyup="call()">

Distributor id:

<input type="text" id="search" placeholder="Enter  ID " name="distributor_id">
<br></br>
<div id="result"></div>
<br/>
<input type="submit" required  name="stb" value= "Submit">
<a href="Admin_side.php"><button type="button" required name="CANCLE">CANCLE</button></a>


</form>
<br/><br/>
</body>
</html>
<script type="text/javascript">
		
		

		function abc(data){

			document.getElementById('search').value=data;
			document.getElementById('result').innerHTML="";
		}
		
		function call()
		{
			var xmlHttp = new XMLHttpRequest();

			xmlHttp.open('POST', 'distributor_id_show.php', true);
			xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			var abc = "key="+document.getElementById('order').value;
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

	</script>



	
	
