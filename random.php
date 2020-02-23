<!DOCTYPE html>
<html>
<head>
	<title>AcakAcak</title>
</head>
<body>
	<?php include "acakAcak.php"?>

	<input type="text" id="hasil" value=""></input>
	<p id="number" style="font-size:36px" value=""></p>
	<button id="asd" onclick="zxc();">Acak</button>

	<script type="text/javascript">
		var button = document.getElementById("asd");
		let count = 0;
		let angka = 0;
		let intervalID;
		function zxc(){
				document.getElementById("number").innerHTML = Math.floor(Math.random() * 10)+1;
			}
		intervalID = setInterval(function(){
			count += 1;
			if(count % 100 == 0){
				document.getElementById("hasil").value = document.getElementById("number").innerHTML;
				console.log(count)
				clearInterval(intervalID);
			}else{
				button.click();
			}
		},5)

		
	</script>

</body>
</html>