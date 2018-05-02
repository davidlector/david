<?php
session_start();

include "config/config.php";
include "config/koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran Mahasiswa</title>


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	
</head>
<body>
	<div class="container">
		<?php include "template/navbar.php";?>

		<?php 
			$_GET["P"] = isset($_GET["p"]) ? $_GET["p"] : "";
			if($_GET["P"] === "home" || empty($_GET["p"]))
			{
				include "view/home.php";
			}
			else if($_GET['p'] === "mahasiswa")
			{
				include "view/mahasiswa.php";
			}
			else if($_GET['p'] === "mahasiswa_add")
			{
				include "view/form_add_mahasiswa.php";
			}
			else if($_GET['p'] === "mahasiswa_update")
			{
				include "view/form_update_mahasiswa.php";
			}
			else if($_GET['p'] === "mahasiswa_delete")
			{
				include "query/delete.php";
			}
			else if($_GET['p'] === "login.php")
			{
				include "/login.php";
			}
		?>

			

		<?php include "template/footer.php";?>
	</div>
</body>
</html>

