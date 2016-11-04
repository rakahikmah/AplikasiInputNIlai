<?php 

require_once 'fullcontrol.php';



if (isset($_POST['tambah'])) {
	$nim  		=$_POST['nim'];
	$nama 		=$_POST['nama'];
	$jkelamin 	=$_POST['jkelamin'];
	$foto_nama 	=$_FILES['gambar']['name'];
	$foto_size 	=$_FILES['gambar']['size'];
	$foto_type 	=$_FILES['gambar']['type'];
	$foto_tmp  	=$_FILES['gambar']['tmp_name'];
	$path 		="foto/".$foto_nama;
	if ($foto_type ="image/jpeg" || $foto_type ="image/png" || $foto_type ="image/jpg" ){
		if ($foto_size <= 10000000){
			if (move_uploaded_file($foto_tmp,$path)) {
				$inputkan = TambahMhs($nim,$nama,$jkelamin,$foto_nama);
				run($inputkan);
				header("location:viewdatamhs.php");
			}else{
				echo "foto gagal dipindahkan";
			}
		}else{
			echo "data terlalu besar";
		}
	}else{
		echo "type file tidak sesuai";
	}
}




 ?>