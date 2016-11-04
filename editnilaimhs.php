<?php require_once 'fullcontrol.php'; ?>
<?php require_once 'prosesedit.php'; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.css">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<title>Document</title>
	</head>
	<body>
		<div class="container-fluid">	
			<div class="row">
				<center>
				<h2>Edit Nilai Mahasiswa</h2>
				</center>
				<br><br>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-offset-3" >
					<form action="" enctype="multipart/form-data" method="post">
						<div class="form-group row">
							<label for="NIMNilai" class="col-xs-3 col-form-label">NIM</label>
							<div class="col-xs-8">
								<input class="form-control" type="text" name="nimnilai" value="<?php echo $result['nim']?>">
							</div>
						</div>
						<div class="form-group row">
							<label for="UTSNilai" class="col-xs-3 col-form-label">UTS</label>
							<div class="col-xs-8">
								<input class="form-control" type="text" name="uts" value="<?php echo $result['uts']?>">
							</div>
						</div>
						<div class="form-group row">
							<label for="UASNilai" class="col-xs-3 col-form-label">UAS</label>
							<div class="col-xs-8">
								<input class="form-control" type="text" name="uas" value="<?php echo $result['uas']?>">
							</div>
						</div>
						<div class="form-group row">
							<label for="TugasNilai" class="col-xs-3 col-form-label">TUGAS</label>
							<div class="col-xs-8">
								<input class="form-control" type="text" name="tugas" value="<?php echo $result['tugas']?>">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-xs-offset-3 col-xs-8">
								<button type="submit" class="btn btn-default" name="edit">Edit Nilai Nilai</button>
								&nbsp;&nbsp;&nbsp;
								<button type="reset" class="btn btn-default">Batalkan</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>