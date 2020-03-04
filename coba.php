<?php
include "conn.php";
include "groupArray.php";
include "create.php";
include "simpan.php";

$data[] = array();
$angka = array();
$hitung = 0;
$total = 0;
$zxc = array();
$matkul = str_replace(' ','',trim(strtolower($_POST["matkul"])));

/*
while($row = mysqli_fetch_array($query)){
	$data[$hitung] = $row["nama"];
	$hitung += 1;
}
*/
//echo print_r($data)."<br/>";
//mencari total siswa
$query = mysqli_query($conn, "SELECT COUNT(*) as total FROM datasiswa");
while ($d = mysqli_fetch_array($query)) {
	$total = $d["total"];
}
$kelompok = $_POST["kelompok"];
//membuat kelompok
for ($i=0; $i < $total ; $i++) {
	$a = $i % $kelompok;
	$a = $a+1;
	$angka[$i] = $a;
}
//print_r($angka) sebelum diacak
print_r($angka);
echo "<br/>";
echo "Kelompok: ".$_POST["kelompok"];

function acak($arr){
	for ($i=0; $i < sizeof($arr); ++$i) { 
		$r = rand(0, $i);
		$tmp = $arr[$i];
		$arr[$i] = $arr[$r];
		$arr[$r] = $tmp;
	}
	return $arr;
}

//print_r($angka) setelah diacak;
echo "<br/>";
$angka = acak($angka);
print_r($angka);

//assoc array
$query = mysqli_query($conn, "SELECT * FROM datasiswa");
while ($asd = mysqli_fetch_assoc($query)) {
	$zxc[] = array("nama"=>$asd["nama"], "kelompok"=>$angka[$hitung], "nim"=>$asd["nim"]);
	$hitung += 1;
}

//grouping array per kelompok
$grouped = array_group_by($zxc, "kelompok");

echo "<br/>";
print_r($zxc);
//echo $grouped[1][0]["nama"];

//menampilkan array assoc
for ($i=1; $i <= $_POST["kelompok"] ; $i++) { 

echo "
	<table>
		<tr>
			<th>NIM</th>
			<th>Nama</th>
			<th>Kelompok ".$i."</th>
		</tr>
";
foreach ($grouped[$i] as $key => $value) {
	echo "
		<tr>
			<td>".$value["nim"]."</td>
			<td>".$value["nama"]."</td>
			<td>".$value["kelompok"]."</td>
		</tr>
	";
}
echo "</table>";
}

//simpan array assoc

echo create_tabel($matkul, $conn)." ".simpan_data($matkul, $zxc, $conn);
?>