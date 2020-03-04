<!DOCTYPE html>
<html>
<head>
	<title>AcakAcak</title>
	<script type="text/javascript" src="angka.js"></script>
	<script src="jquery-3.4.1.min.js"></script>
</head>
<body>
	<!--Menampilkan datasiswa-->
	<table border="1" style="border-collapse: collapse;">
		<tr>
			<th>NIM</th>
			<th>NAMA</th>
			<th>KELOMPOK</th>
		</tr>
		<?php
		include "conn.php";
		$query = mysqli_query($conn,"SELECT * FROM datasiswa");
		while ($row = mysqli_fetch_array($query)) {
			echo"
		<tr>
			<td>".$row["nim"]."</td>
			<td>".$row["nama"]."</td>
			<td>".$row["kelompok"]."</td>
		</tr>";
		}
		
		?>
	</table>

	<!--Ini kolom jumlah kelompok--->
	<form class="form-user">
		Jumlah Kelompok:
		<input type="text" name="kelompok" id="kelompok">
		Mata Kuliah:
		<input type="text" name="matkul" id="matkul" maxlength="10">
	</form>
	<button id="asd">Acak</button>

	<div class="tampildata">
	</div>
	<!--
	<p id="number" style="font-size:36px" value=""></p>
	-->
	<!--untuk menghitung kelompok pakai array dan perulangan-->
	<!--jika jumlah array terpenuhi acak angka selesai-->

	<script type="text/javascript">
	$(document).ready(function(){
	$("#asd").click(function(){
		var kelompok = $("#kelompok").val();
		var matkul = $("#matkul").val();
		$.ajax({
			url: "coba.php",
			type: "POST",
			data: {
				'kelompok': kelompok,
				'matkul': matkul
			},
			success: function(data){
				$(".tampildata").html(data);
				}
			})
		})
	})
	</script>

</body>
</html>