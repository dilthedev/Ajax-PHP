<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ajax</title>
	<!-- <link rel="stylesheet" href="bootstrap.min.css"> -->
	<script>
		function showSuggestion(str){
			if(str.length == 0){
				document.getElementById('output').innerHTML='';
			}else{
				//AJAX Request
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function(){
					if(this.readyState == 4 && this.state == 200){
						document.getElementById('output').innerHTML= this.responseText;
					}
				};
			xmlhttp.open("GET","suggest.php?q="+str,true);
			xmlhttp.send();	

			//document.getElementById('output').innerHTML= str;

			}
		}

	</script>
</head>
<body>
	<div class="container">
		<h1>Search Users</h1>
		<form>
			Search Users: <input placeholder="Search here" type="text" class="form-control" onkeyup="showSuggestion(this.value)">
		</form>
		<p>Suggestions : <span id="output" style="font-weight: bold;"></span></p>
	</div>
	
</body>
</html>

