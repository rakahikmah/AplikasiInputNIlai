<?php 

$folder = "foto/anjing.jpg";


if (file_exists("foto/anjing.jpg")) {
	unlink($folder);
	echo "berhasil";
}else{
	echo "gagal";
}

