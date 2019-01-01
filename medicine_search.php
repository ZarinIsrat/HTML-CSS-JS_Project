

<!DOCTYPE html>
<html>
<head>
<title>medichine search</title>
<h1 style= "text-align: center; color:#91919E" >MEDICINE SEARCH</h1>
</head>
<body style= "background-color:#1C265D" >
<form  name="myform"  method="POST">
<h1 style= "text-align: center; color:#91919E" >Search</h1>
<h1 style= "text-align: center;" >======================</h1>
<br></br>
<center>

<input type="text" id="search" placeholder="Enter First Name" onkeyup="loadData()">
<a href="admin_side.php"><button type="button" required name="CANCLE">CALCEL</button></a>

<div id="result"></div>
</center>
</body>
</html>

<script type="text/javascript">
		
		function loadData(){

			var xmlHttp = new XMLHttpRequest();

			xmlHttp.open('POST', 'medicine_search_check.php', true);
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
