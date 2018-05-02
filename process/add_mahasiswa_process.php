<?php

if($_SERVER["REQUEST_METHOD"] != "POST")
{
	header("HTTP/1.0 404 NOT FOUND");
	echo "404 not found";
	exit;
}
include "../config/config.php";
include "../config/koneksi.php";


$NIM = $_POST['NIM'];
$nama = $_POST['nama'];
$gender = $_POST['jenis_kelamin'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];
$file = $_FILES['photo'];




if($NIM != "" && $nama !="")


{

	$photo ="";
	if(!empty($file["name"]))
	{
		move_uploaded_file($file["tmp_name"], "../upload/img/$file[name]") or die ($file["error"]);
		$photo = $file["name"];
	}


	$str = "INSERT INTO mahasiswa_tb(NIM, nama, jenis_kelamin, jurusan, alamat, foto) 
			VALUES ('$NIM','$nama','$gender','$jurusan', '$alamat','$photo')";
	$q = mysqli_query($connect,$str) or die (mysqli_error($connect));

	header("location:".$base_url."index.php?p=mahasiswa");
}
else
{
	$error_msg = "";
	if($NIM == "")
	{
		$error_msg .= "<div>NIM harus diisi </div>";
	}
	if($nama == "")
	{
		$error_msg .= "<div>nama harus diisi</div>";
	}
	header("location:".$base_url."index.php?p=mahasiswa_add");
}




echo "Berhasil di input";