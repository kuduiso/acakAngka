<?php
	echo '<p id="asd"></p>';
?>
<script>
	Array.prototype.shuffle = function() {
		var i = this.length, j, temp;
		while(--i > 0){
			j = Math.floor(Math.random() * (i+1));
			temp = this[j];
			this[j] = this[i];
			this[i] = temp;
		}
		return this;
	}

	var arr = ['A','B','C','D','E','F','G','H'];
	var result = arr.shuffle();
	var z = Math.floor(Math.random() * 5);

	document.getElementById('asd').innerHTML = z;
	document.write(result);
</script>