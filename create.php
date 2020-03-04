<?php

function create_tabel($tabel, $conn){
	$query = "CREATE TABLE ".$tabel."(
			nim varchar(12),
			kelompok varchar(2)			
			);";	
	$result = mysqli_query($conn, $query);
	if($result){
		$pesan = "tabel berhasil";
	}else{
		$pesan = "tabel gagal";
	}
	return $pesan;
}
?>