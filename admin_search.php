<!DOCTYPE html>
<html>
<head>
	<title>Ajax</title>
</head>
<body style= "background-color:#1C265D" >

	<center>
		<div>
			<p style= "text-align: center;color:#91919E"> ADMIN SEARCH </p>

			<input type="text" id='search' name="" onkeyup="loadData()">
			<input type="button"  name="" value="Search" >
			<a href="Admin_side.php"><button type="button" required name="CANCLE">CANCLE</button></a>

		</div>
		<div id="result">
			
		</div>

		

	</center>

	<script type="text/javascript">
		
		function loadData(){

			var xmlHttp = new XMLHttpRequest();

			xmlHttp.open('POST', 'search.php', true);
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
</body>
</html>