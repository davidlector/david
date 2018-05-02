<?php


include "../config/koneksi.php";



$NIM = $_POST['NIM'];
$nama = $_POST['nama'];
$gender = $_POST['jenis_kelamin'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];
$file = $_FILES['photo'];

print_r ($file);
$photo ="";
	if(!empty($file["name"]))
	{
		move_uploaded_file($file["tmp_name"], "../upload/img/$file[name]") or die ($file["error"]);
		$photo = $file["name"];
	}

$str = "UPDATE  mahasiswa_tb SET 
nama='$nama',
jenis_kelamin='$gender',
jurusan='$jurusan', 
alamat='$alamat', 
foto='$file[name]' 
WHERE NIM = '$NIM'";
$q = mysqli_query($connect,$str) or die (mysqli_error($connect));


echo "Berhasil di input";