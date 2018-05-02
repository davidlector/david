<?php

include "../config/koneksi.php";
?>


<table>
	<thead>
		<th>NIM</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Jurusan</th>
		<th>Alamat</th>
	</thead>
	<tbody>
		<?php
		$str = "SELECT * FROM mahasiswa_tb";
		$q = mysqli_query($connect,$str);
		while($f = mysqli_fetch_array($q,MYSQLI_ASSOC) )
		{
		?>
	<tr>
		<td><?php echo $f["NIM"]?></td>
		<td><?php echo $f["nama"]?></td>
		<td><?php echo $f["jenis_kelamin"]?></td>
		<td><?php echo $f["jurusan"]?></td>
		<td><?php echo $f["alamat"]?></td>
	</tr>
	<?php
        }
	?>
	</tbody>
</table>