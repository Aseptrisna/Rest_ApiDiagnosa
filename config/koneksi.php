<?php

	$server		= "localhost";
	$user		= "root";
	$password	= "";
	$database	= "penyakit";
	$con = mysqli_connect($server, $user, $password, $database);
	if (mysqli_connect_errno()) {
		echo "Gagal terhubung MySQL: " . mysqli_connect_error();
	}
?>