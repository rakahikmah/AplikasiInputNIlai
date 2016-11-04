<?php require_once 'fullcontrol.php'; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Lihat Data Mahasiswa</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.css">
		<script src="js/jquery"></script>
		<script src="js/bootstrap.js"></script>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<center>
				<h2>Data Nilai Mahasiswa</h2>
				</center>
			</div>
			<div class="row">
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th><center>No</center></th>
								<th><center>Nim</center></th>
								<th><center>Nama</center></th>
								<th><center>UTS</center></th>
								<th><center>Tugas</center></th>
								<th><center>UAS</center></th>
								<th><center>Mata Kuliah</center></th>
								<th><center>Hasil Akhir</center></th>
								<th><center>Opsi</center></th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$query = TampilDataNilaiMhs();
								$row = mysqli_num_rows($query);
								$no =1;
							?>
							<?php if ($row > 0) :
							while ($result = mysqli_fetch_assoc($query)) : ?>
							<tr>
								<td><?=$no++;?></td>
								<td><?=$result['nim']?></td>
								<td><?=$result['nama'];?></td>
								<td><?=$result['uts'];?></td>
								<td><?=$result['tugas'];?></td>
								<td><?=$result['uas'];?></td>
								<td><?=$result['mkuliah'];?></td>
								<td><?=$result['hasilakhir'];?></td>
								<td>
								<a href="editnilaimhs.php?nim=<?=$result['nim'];?>"><button class="btn btn-warning" type="button">Edit</button></a> &nbsp; &nbsp;
								<a href="hapusnilaimahasiswa.php?nim=<?=$result['nim'];?>"><button class="btn btn-danger" type="button">Hapus</button></a>
								</td>
							</tr>
							<?php endwhile; ?>
							<?php else: ?>
							<tr>
								<td colspan="9"><h3 align="center">Data tidak ada silahkan anda tambah data dulu broo</h3></td>
							</tr>
							<?php endif; ?>
						</tbody>
					</table>
				</div>

				
			</div>
		</div>
	</body>
</html>