<?php

include "../config/koneksi.php";

$NIM = "";
$nama = "";
$gender = "";
$jurusan = "";
$alamat = "";


$str = "INSERT INTO mahasiswa_tb(NIM,nama,jenis_kelamin,jurusan, alamat) values ('$NIM','$nama','$gender','$jurusan','$alamat')";
$q = mysqli_query($connect,$str);

echo "Success!!";