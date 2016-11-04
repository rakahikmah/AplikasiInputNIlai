<?php 

require_once 'fullcontrol.php';

if (isset($_POST['input'])) {
	$uts  		= escape($_POST['uts']);
	$uas  		= escape($_POST['uas']);
	$tugas 		= escape($_POST['tugas']);
	$matkul 	= escape("Data Mining");
	$nim 		= escape($_POST['nimnilai']);
	$hasilindex = escape(""); 
	
	$hasiluts 	= round(($uts/100) * 30);
	$hasiluas 	= round(($uas/100) * 40);
	$hasiltugas = round(($tugas/100) * 30);
	$hasilakhir = $hasiluts + $hasiluas + $hasiltugas;

	switch ($hasilakhir) {
			case ($hasilakhir >= 90  && $hasilakhir <= 100) :
					$hasilindex = "A";
				break;

		 	case ($hasilakhir >= 80  && $hasilakhir <= 89) :
					$hasilindex = "B+";
				break;

			case ($hasilakhir >= 70  && $hasilakhir <= 79) :
					$hasilindex = "B";
				break;

			case ($hasilakhir >= 60  && $hasilakhir <= 69) :
					$hasilindex = "C+";
				break;

			case ($hasilakhir >= 50  && $hasilakhir <= 59) :
					$hasilindex = "C";
				break;

			case ($hasilakhir >= 35  && $hasilakhir <= 49) :
					$hasilindex = "D+";
				break;

			case ($hasilakhir >= 20  && $hasilakhir <= 34) :
					$hasilindex = "D";
				break;	

			case ($hasilakhir >= 0  && $hasilakhir <= 19) :
					$hasilindex = "E";
				break;
						
		}

		$sql = TambahNilaiMhs($nim,$uts,$tugas,$uas,$matkul,$hasilindex);
	if ($sql) {
		header("location:viewnilaimhs.php");
	}else{
		echo "missing input d because ". mysqli_error($koneksi);
	}

}

 ?>