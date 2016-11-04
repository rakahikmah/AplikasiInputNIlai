<?php 
function TambahMhs($nim,$nama,$jkelamin,$foto){
	global $koneksi;
	$nim =escape($nim);
	$nama = escape($nama);
	$jkelamin = escape($jkelamin);
	$foto =escape($foto);
	$sql = "INSERT INTO mahasiswa (nim,nama,jkelamin,foto) VALUES ('$nim','$nama','$jkelamin','$foto')";
	return $sql;
}

function run($query){
	global $koneksi;
	return mysqli_query($koneksi,$query);
	
}

function escape($data){
	global $koneksi;
	return mysqli_real_escape_string($koneksi,$data);
}

function TambahNilaiMhs($nim,$uts,$tugas,$uas,$matkul,$hasilindex){
	global $koneksi;
	$nim = escape($nim);
	$uts = escape($uts);
	$tugas =escape($tugas);
	$id =escape("");
	$uas =escape($uas);
	$matkul =escape($matkul);
	$hasilindex =escape($hasilindex);
	$sql ="INSERT INTO nilai (nim,uts,tugas,uas,mkuliah,hasilakhir) VALUES ('$nim',$uts,$tugas,$uas,'$matkul','$hasilindex')";
	return run($sql);

}

function TampilDataMhs(){
	global $koneksi;
	$sql ="SELECT * FROM mahasiswa";
	return run($sql);
}

function TampilDataNilaiMhs(){
	global $koneksi;
	$sql ="SELECT m.nim ,m.nama,n.uts,n.tugas,n.uas,n.mkuliah,n.hasilakhir FROM mahasiswa m,nilai n WHERE m.nim=n.nim ORDER BY m.nim ASC;";
	return run($sql);
}

function namaFoto($nim){
	global $koneksi;
	$sql = "SELECT foto FROM mahasiswa WHERE nim='$nim' ";
	return  mysqli_fetch_assoc (run($sql));
}

function HapusDataMhs($nim){
	global $koneksi;
	$sql = "DELETE FROM mahasiswa WHERE nim='$nim' ";
	return run($sql);
}

function HapusNilaiMhs($nim){
	global $koneksi;
	$sql = "DELETE FROM nilai  WHERE nim='$nim' ";
	return run($sql);
}

function NilaiPerMhs($nim){
	global $koneksi;
	$sql =" SELECT  m.nim ,m.nama,n.uts,n.tugas,n.uas,n.mkuliah,n.hasilakhir FROM mahasiswa m,nilai n WHERE m.nim='$nim'  AND n.nim='$nim' ";
	return run($sql);
}

function EditNilaiMhs($nim,$uts,$tugas,$uas,$hasilindex){
	global $koneksi;
	$sql = " UPDATE  nilai n,mahasiswa m set n.uas=$uas, n.hasilakhir='$hasilindex', n.uts=$uts , n.tugas=$tugas WHERE m.nim='$nim' AND n.nim='$nim' "; 
	return run($sql);
}

 ?>