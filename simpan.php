<?php
function simpan_data($tabel, array $arr, $conn){
	foreach ($arr as $key => $value) {
		$query = "INSERT INTO ".$tabel." VALUES(".$value["nim"].",". $value["kelompok"].");";
		$result = mysqli_query($conn, $query);

		if($result){
			$pesan = "data tersimpan";
		}else{
			$pesan = "data belum tersimpan";
		}
	}

	return $pesan;
}
?>