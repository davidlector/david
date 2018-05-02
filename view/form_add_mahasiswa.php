<?php
$base_url="http://localhost/Kampus/";
?>
		<div class="col-md-5">
			<h2>Form Pendaftaran Mahasiswa</h2>
			<form class="form" action="<?php echo $base_url."process/add_mahasiswa_process.php"?>" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label>NIM</label>
					<input type="text" name="NIM" class="form-control">
				</div>
				<div class="form-group">
					<label>Nama</label>
					<input type="text" name="nama" class="form-control">
				</div>
				<div class="form-group">
					<label>Jenis Kelamin</label>
					<label><input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-Laki</label>
					<span> &nbsp; &nbsp;</span>
					<label><input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</label>
				</div>
				<div class="form-group">
					<label>Jurusan</label>
					<textarea name="jurusan" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<textarea name="alamat" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<label>Upload</label><br>
					<input type="file" name="photo">
				</div>

				<button type="submit" class="btn btn-success">Submit</button>
			</form>
		</div>
		<div class="clearfix"></div>
	</div>
</body>
</html>