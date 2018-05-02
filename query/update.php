<?php

include "../config/koneksi.php";

$NIM = "";
$alamat = "";

$str = "UPDATE mahasiswa_tb SET alamat='$alamat' WHERE NIM='$NIM' ";
$q = mysqli_query($connect,$str);

echo "Success!!";