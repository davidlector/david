<div style = "padding:20px;">

	<h2>Data Mahasiswa</h2>
	<?php
	$keyword = "";
	if(!empty($_POST["keyword"]))
	{
		$keyword = $_POST["keyword"];
	}
	?>

	<form class="form float-left" action="<?php echo $base_url."index.php?p=mahasiswa" ?>" method="POST">
	<div class = "form-group">
		<input type="text"  value="<?php echo $keyword ?>" name="keyword" class="form-control" placeholder="Search">
		<button class=btn btn-primary">Search</button>
	</div>
    </form>

	<a href="<?php echo $base_url."index.php?p=mahasiswa_add" ?>"
	class="btn btn-primary float-right"> Add Mahasiswa </a>

	<span class="clearfix"></span><br>



	
	
	<?php
	
	$sqlcount = "SELECT count('NIM') from mahasiswa_tb";
	$q = mysqli_query($connect, $sqlcount);
	$f = mysqli_fetch_array($q);

	$banyakdata = $f[0];
	$limit = 5;
	$pagenumber = ceil($banyakdata / $limit);
	?>
<nav aria-label="Page navigation example">
  <ul class="pagination">
  	<?php
  	for($i=1;$i<=$pagenumber;$i++)
  	{ ?>
    <li class="page-item"><a class="page-link" href="<?php echo $base_url."index.php?p=mahasiswa&pg=$i" ?> "><?php echo $i ?></a></li>
	<?php
	}	
	?>
  </ul>
</nav>
<div class="responsive-table col-md-3 float-left">
	<table class="table table-bordered">

	
		<thead>
			<th>NIM</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Jurusan</th>
			<th>Alamat</th>
			<th>Photo</th>
			<th>Action</th>
		</thead>
	<tbody>
		<?php
		$limit = 5;
		$page = isset($_GET['pg']) ? $_GET['pg']:1;
		$start = ($page-1)*$limit;

		//$str = "SELECT * FROM mahasiswa_tb limit $start,$limit";
		$str = "SELECT * FROM mahasiswa_tb a LEFT JOIN jurusan b ON a.jurusan = b.jurusan_id limit $start,$limit";
			if(!empty($_POST['keyword']))
			{
				$str = "SELECT * FROM mahasiswa_tb a LEFT JOIN jurusan b ON a.jurusan = b.jurusan_id 
				WHERE nama LIKE '%$_POST[keyword]%' limit $start,$limit";
			}
			else if (!empty($_GET['f']))
			{
				$str = "SELECT * FROM mahasiswa_tb a LEFT JOIN jurusan b ON a.jurusan = b.jurusan_id 
				WHERE b.jurusan_id ='$_GET[f]'";
			}




		$q = mysqli_query($connect, $str);
		while ($row = mysqli_fetch_array($q, MYSQLI_ASSOC)) 
		{
		
		$photo = $base_url."upload/img/default.jpg";
		if(!empty($row['foto']))
		{
			$photo = $base_url."upload/img/".$row["foto"];
		}
		?>
		<tr>
			<td><?php echo $row["NIM"]?></td>
			<td><?php echo $row["nama"]?></td>
			<td><?php echo $row["jenis_kelamin"]?></td>
			<td><?php echo $row["jurusan"]?></td>
			<td><?php echo $row["alamat"]?></td>
			<td><img src="<?php echo $photo ?>" alt="<?php echo $photo ?>" height="50" weight="50"></td>

			<td>
				<a class="btn btn-primary" href="<?php echo $base_url."index.php?p=mahasiswa_update&nim=$row[NIM]"?> "title="edit">Edit</a>
				<form class="" method="POST" action="<?php echo $base_url."process/delete_mahasiswa_process.php"?>"
					onSubmit="return confirm('Are you sure you want to delete <?php echo $row["nama"]?> ?')">
				<input type="hidden" name="NIM" value="<?php echo $row["NIM"]?>">
				<button type="submit" class=btn btn-danger"> Delete</button>

				</form>
			</td>
		</tr>
		
		<?php
		}
		?>
		
	</tbody>
	</table>

</div>
	
		<ul class="list-group col-md-3 float-right">
			<?php
			$str1 = "SELECT * FROM jurusan";
			$q1 = mysqli_query($connect, $str1);
			while ($row1 = mysqli_fetch_array($q1, MYSQLI_ASSOC)) 
			{
			?>
		  	<li class="list-group-item"><a href="<?php echo $base_url."index.php?p=mahasiswa&f=$row1[jurusan_id]" ?>" > <?php echo $row1["jurusan"]?></li>
		  	<?php
		  	}
			?>
		</ul>

		<div class="clearfix"></div>
	</div>