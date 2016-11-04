<?php 
define("user","root");
define("password","");
define("database","project");
define("host","localhost");

$koneksi = mysqli_connect(host,user,password);
if ($koneksi) {
	$db = mysqli_select_db($koneksi, database);
	if (!$db) {
		echo "database tidak ada";
	}else{
		// echo "database yang anda pilih ada";
	}
}else{
 	echo "anda tidak terkoneksi dengan mariadb";
}
 ?>
