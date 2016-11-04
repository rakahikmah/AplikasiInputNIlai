<?php 
	require_once 'fullcontrol.php';
	if (isset($_GET['nim'])) {
		$nim = $_GET['nim'];
		$hapus = HapusNilaiMhs($nim);
		if ($hapus) {
			header("location:viewnilaimhs.php");
		}
	}
?>