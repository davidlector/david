		<div class="col-md-5">
			<h2>Form Update</h2>
			<hr>
			<?php
			$nim = $_GET["nim"];
			$str = "SELECT * FROM mahasiswa_tb WHERE NIM='$nim' ";
			$q = mysqli_query($connect, $str);
			$row = mysqli_fetch_array($q);
			?>
			<form class="form" action="<?php echo $base_url."process/update_mahasiswa_process.php"?>" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label>NIM</label>
					<input readonly value="<?php echo $row["NIM"]?>" type="text" name="NIM" class="form-control">
				</div>
				<div class="form-group">
					<label>Nama</label>
					<input type="text" value="<?php echo $row["nama"]?>" name="nama" class="form-control">
				</div>
				<?php 
					$selected_male = "";
					$selected_female = "";

				if ($row["jenis_kelamin"] == "Laki-laki")
				{
					$selected_male = "checked='checked'";
				}
				else if ($row["jenis_kelamin"] == "Perempuan")
				{
					$selected_female = "checked='checked'";
				}
				?>
				<div class="form-group">
					<label>Jenis Kelamin</label>
					<span> &nbsp; &nbsp;&nbsp;&nbsp;</span>
					<label><input <?php echo $selected_male ?> type="radio" name="jenis_kelamin" value="Laki-laki">Laki-Laki</label>
					<span> &nbsp; &nbsp;&nbsp;&nbsp;</span>
					<label><input <?php echo $selected_female ?> type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</label>
				</div>
				<div class="form-group">
					<label>Jurusan</label>
					<textarea name="jurusan" value="<?php echo $row["jurusan"]?>" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<textarea name="alamat" value="<?php echo $row["alamat"]?>" class="form-control"></textarea>
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