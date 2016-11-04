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
				<h2>Data Mahasiswa</h2>
				</center>
			</div>
			<div class="row">
				<div class="table-responsive">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Foto</th>
								<th>Nim</th>
								<th>Nama</th>
								<th>Jenis Kelamin</th>
								<th>
								<?php for ($i=0; $i <=11 ; $i++) { 
									echo "&nbsp;";
								} ?>
								Opsi
								</th>
							</tr>
						</thead>
						<tbody>
						<?php 
							$query =TampilDataMhs();
							$row   =mysqli_num_rows($query);
							$no    =1;
						 ?>
							<?php if ($row > 0) :
							while ($result = mysqli_fetch_assoc($query)) : ?>
							<tr>
								<td><?=$no++;?></td>
								<td><?="<img src=foto/$result[foto] width=100 height=100>";?></td>
								<td><?=$result['nim'] ;?></td>
								<td><?=$result['nama'] ;?></td>
								<td><?=$result['jkelamin'] ;?></td>
								<td>
								<a href="editdtmahasiswa.php?nim=<?=$result['nim'];?>" onClick="return tanya()"><button class="btn btn-warning" type="button">Edit</button></a> &nbsp; &nbsp;
								<a href="hapusdtmahasiswa.php?nim=<?=$result['nim'];?>"><button class="btn btn-danger" type="button">Hapus</button></a>
								</td>
							</tr>
							<?php endwhile; ?>
							<?php else: ?>
							<tr>
								<td colspan="6"><h3 align="center">Data tidak ada silahkan anda tambah data dulu broo</h3></td>
							</tr>
							<?php endif; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>