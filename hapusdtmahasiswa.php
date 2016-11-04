<?php 
	require_once 'fullcontrol.php';
	if (isset($_GET['nim'])) {
		// $nim = $_GET['nim'];
		// $hapus = HapusDataMhs($nim);
		// if ($hapus) {
		// 	echo "data berhasil dihapus";
		// }
		
		$nim = $_GET['nim'];
		$foto = namaFoto($nim);
		unlink("foto/".$foto['foto']);
		$hapus = HapusDataMhs($nim);
		
		if ($hapus) {
			echo "berhasil";
		}else {
			echo "ada kesalahan";
		}
	}
?>