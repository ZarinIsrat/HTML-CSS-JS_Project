
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
					document.getElementById('search_table').innerHTML = this.responseText;
					//alert(this.responseText);
				}
			}

		}	


	