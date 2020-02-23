<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'acakacak';
$conn = mysqli_connect($host, $user, $pass, $db);

$query = mysqli_query($conn, "SELECT * FROM datasiswa");
echo "
	<table border='1' style='border-collapse:collapse'>
	<tr>
		<th>NIM</th>
		<th>NAMA</th>
		<th>KELOMPOK</th>
	</tr>";
while ($d = mysqli_fetch_array($query)) {
	echo "
	<tr>
		<td>".$d["nim"]."</td>
		<td>".$d["nama"]."</td>
		<td>".$d["kelompok"]."</td>
	</tr>";
}
echo "</table>";
#echo "hello";

?>