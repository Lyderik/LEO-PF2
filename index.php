<!DOCTYPE html>
<html>
<head>
	<title> LEO1_PF2 </title>
	<link type="text/css" rel="stylesheet" href="./snow.css">
</head>

<style>
	<body>

	<div class="content">
			<h2>Random numbers from the second container</h2>
		<div id="split">
		
		</div>
		<button onclick="request()">Click to refresh the numbers</button>
	</div>
	</body>
<script>
function request() {
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if(this.readyState == 4 && this.status == 200) {
			var myArr = JSON.parse(this.responseText);
			
			document.getElementById("split").innerHTML = "";

			var i;
			for (i = 0; i < myArr.length - 1; i++) {
			var span = document.createElement("span");
			var node = document.createTextNode(myArr[i]);
			span.appendChild(node);
			var element = document.getElementById("split");
			element.appendChild(span);
			}

		}
	};
	xmlhttp.open("GET", "./getNumbers.php", true);
	xmlhttp.send();
}
request();
setInterval(request, 5000);
</script>
</html>
